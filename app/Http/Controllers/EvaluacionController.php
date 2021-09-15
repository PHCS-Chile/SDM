<?php

namespace App\Http\Controllers;

use App\Models\Estudio;
use App\Models\Evaluacion;
use App\Models\Grabacion;
use App\Models\Log;
use App\Models\Notificacion;
use App\Models\Periodo;
use App\Models\Respuesta;
use App\Models\Estado;
use App\Models\Escala;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Auth;

/**
 * Class EvaluacionController
 * @package App\Http\Controllers
 * @version 7
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

    public function reportes()
    {
        $evaluaciones = Evaluacion::all();
        $estudios = Estudio::all();
        $periodos = Periodo::all();
        $servicios = Servicio::all();
        $estados = Estado::all();
        return view('evaluacions.reportes', compact(
            'evaluaciones', 'estudios', 'periodos', 'servicios', 'estados'
        ));
    }

}
