<?php

namespace App\Http\Controllers;

use App\Models\Agente;
use App\Models\Asignacion;
use App\Models\Estudio;
use App\Models\Evaluacion;
use App\Models\Grabacion;
use App\Models\Log;
use App\Models\Notificacion;
use App\Models\Periodo;
use App\Models\Reporte;
use App\Models\Respuesta;
use App\Models\Estado;
use App\Models\Escala;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Auth;

/**
 * Class EvaluacionController
 * @package App\Http\Controllers
 * @version 9.1
 */

class EvaluacionController extends Controller
{


    public function reporte($evaluacionid){
        $evaluacionfinal = Evaluacion::where('id',$evaluacionid)->first();
        $respuestas = Respuesta::where('evaluacion_id',$evaluacionid)->get();
        $estados = Estado::all();
        $gestiones = Escala::where('grupo_id',1)->get();
        $resoluciones = Escala::where('grupo_id',2)->get();
        return view('evaluacions.reporte',compact( 'evaluacionfinal',  'estados', 'respuestas',
            'gestiones', 'resoluciones'));
    }

    public function index($evaluacionid){
        $evaluacionfinal = Evaluacion::where('id',$evaluacionid)->first();
        $estados = Estado::all();
        $pauta = $evaluacionfinal->asignacion->estudio->pauta->id;
        $historial = Log::where('evaluacion_id', $evaluacionid)->get();
        if ($pauta == 2) {
            $grabaciones = Grabacion::where('evaluacion_id', $evaluacionid)->get();
            return view('evaluacions.index_voz',compact( 'evaluacionfinal',  'estados', 'pauta', 'grabaciones', 'historial'));
        }
        return view('evaluacions.index',compact( 'evaluacionfinal',  'estados', 'pauta', 'historial'));
    }

    public function chat($evaluacionid){
        $evaluacionfinal = Evaluacion::where('id',$evaluacionid)->first();
        $pauta = $evaluacionfinal->asignacion->estudio->pauta->id;
        $chat = $evaluacionfinal->image_path;
        return view('evaluacions.chat',compact( 'evaluacionfinal',  'chat', 'pauta'));
    }

    public function indexNotify($evaluacionid)
    {
        $notificacion = Notificacion::where('evaluacion_id', $evaluacionid)->where('activa', true)->first();
        if ($notificacion) {
            $notificacion->leida = true;
            $notificacion->save();

        }
        return $this->index($evaluacionid);
    }

    public function guardaeval(Request $request, $evaluacionid){

        $evaluacion = Evaluacion::where('id',$evaluacionid)->first();
        if ($request->has('form1')) {
            //Formulario para pegar el Chat de Whatsapp
            $evaluacion->image_path = $request->textochatinput;
            $evaluacion->user_id = Auth::user()->id;
            $message = "El chat se guardo correctamente";
        } elseif ($request->has('form3')) {
            Log::log($evaluacion->id, Log::ACCION_CAMBIO_ESTADO, [$evaluacion->estado_id, $request->cambioestado]);
            $evaluacion->estado_id = $request->cambioestado;
            $message = "El estado se cambio correctamente";
        } elseif ($request->has('descartarEval')) {
            $evaluacion->estado_id = 6;
            $message = "La evaluación se descarto correctamente";
        } elseif ($request->has('enviarRevision')) {
            $evaluacion->estado_id = 3;
            $message = "La evaluación se envió a Revisión";
        }
        if ($evaluacion->estado_id == 3) {
            Notificacion::notificar($evaluacionid);
        }
        $evaluacion->save();
        return back()->with("status", $message);
    }

//    public function reportes()
//    {
//        $mercados = Agente::distinct()->get('mercado');
//        return $this->reportesMercado($mercados->first()->mercado);
//    }

    public function reportes(Request $request)
    {
        $periodos = Periodo::where('visible', 1)->get();
        $periodo_0 = new Periodo();
        $periodo_0->id = 0;
        $periodo_0->name = "Todos";
        $periodos->prepend($periodo_0);
        $periodoSeleccionado = intval(!empty($request->filter) ? $request->periodo : $periodos->last()->id);

        $mercados = collect([
            ['id' => '0', 'name' => 'Mixto'],
            ['id' => 'Hogar', 'name' => 'Hogar'],
            ['id' => 'Móvil', 'name' => 'Móvil']
        ]);
        $mercadoSeleccionado = !empty($request->filter) ? $request->mercado : '0';

        $estudios = Estudio::all();
        $estudio_0 = new Estudio();
        $estudio_0->id = 0;
        $estudio_0->name = "Todos";
        $estudios->prepend($estudio_0);
        $estudioSeleccionado = intval(!empty($request->filter) ? $request->estudio : 0);

        $servicios = $estudioSeleccionado === 0 ? Servicio::all() : Servicio::where('estudio_id', $estudioSeleccionado)->get();
        $servicio_0 = new Servicio();
        $servicio_0->id = 0;
        $servicio_0->name = "Todos";
        $servicios->prepend($servicio_0);
        $servicioSeleccionado = intval(!empty($request->filter) ? $request->servicio : 0);
        $todoFiltrado = $periodoSeleccionado !== 0 && $estudioSeleccionado !== 0 && $servicioSeleccionado !== 0;

        $evaluaciones = Evaluacion::whereIn('estado_reporte', [11, 12, 13])
            ->when($periodoSeleccionado !== 0, function ($query) use ($periodoSeleccionado) {
                return $query->whereIn('asignacion_id', Asignacion::where('periodo_id', $periodoSeleccionado)->get()->pluck('id')->all());
            })
            ->when($mercadoSeleccionado !== '0', function ($query) use ($mercadoSeleccionado) {
                return $query->whereIn(
                    'asignacion_id',
                    Asignacion::whereIn(
                        'agente_id',
                        Agente::where('mercado', $mercadoSeleccionado)->get()->pluck('id')->all()
                    )->get()->pluck('id')->all()
                );
            })
            ->when($mercadoSeleccionado === '0', function ($query) use ($mercadoSeleccionado) {
                return $query->whereIn(
                    'asignacion_id',
                    Asignacion::whereIn(
                        'agente_id',
                        Agente::where('mercado', '<>', 'Temp')->get()->pluck('id')->all()
                    )->get()->pluck('id')->all()
                );
            })
            ->when($estudioSeleccionado !== 0, function ($query) use ($estudioSeleccionado) {
                return $query->whereIn('asignacion_id', Asignacion::where('estudio_id', $estudioSeleccionado)->get()->pluck('id')->all());
            })
            ->when($servicioSeleccionado !== 0, function ($query) use ($servicioSeleccionado) {
                return $query->whereIn(
                    'asignacion_id',
                    Asignacion::whereIn(
                        'agente_id',
                        Agente::where('servicio_id', $servicioSeleccionado)->get()->pluck('id')->all()
                    )->get()->pluck('id')->all()
                );
            })
            ->get();
        $panelActivo = empty($request->panel_activo) ? 1 : $request->panel_activo;
        return view('evaluacions.reportes_mercado', compact(
            'periodos', 'periodoSeleccionado', 'mercados', 'mercadoSeleccionado', 'estudios',
            'estudioSeleccionado', 'servicios', 'servicioSeleccionado', 'evaluaciones', 'panelActivo', 'todoFiltrado'
        ));
    }

    public function reporteCambiarEstado(Request $request, $mercadoSeleccionado)
    {
        $evaluacion = Evaluacion::find($request->evaluacion_id);
        $evaluacion->estado_reporte = $request->estado_destino;
        $evaluacion->save();
        return redirect(route('evaluacions.reportes_mercado', $mercadoSeleccionado))->with('status', 'Se ha marcado la evaluación ' . $request->evaluacion_id . ' como ' . ($request->estado_destino == 13 ? 'REVISADA' : 'ENVIADA') . '.');
    }

    public function crearReporte(Request $request)
    {
        $evaluaciones = explode(",", $request->evaluaciones);
        if(count($evaluaciones) > 0) {
            $reporte = new Reporte();
            $reporte->etiqueta = $request->etiqueta ?: "";
            $reporte->user_id = Auth::user()->id;
            $reporte->save();
            foreach($evaluaciones as $evaluacion_id) {
                $evaluacion = Evaluacion::find($evaluacion_id);
                $evaluacion->estado_reporte = 13;
                $evaluacion->save();
                $reporte->evaluaciones()->attach($evaluacion_id);
            }
            return back()->with('status', 'Reporte creado con éxito.');
        }
        return back()->with('error', 'No se ha podido crear el reporte.');
    }

}
