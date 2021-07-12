<?php

namespace App\Http\Controllers;

use App\Models\Evaluacion;
use App\Models\Respuesta;
use App\Models\Estado;
use App\Models\Escala;
use Illuminate\Http\Request;
use Auth;

/**
 * Class EvaluacionController
 * @package App\Http\Controllers
 * @version 2
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
        return view('evaluacions.index',compact( 'evaluacionfinal',  'estados', 'pauta'));
    }

    public function guardaeval(Request $request, $evaluacionid){

        if($request->has('form1')){
            //Formulario para pegar el Chat de Whatsapp
            $evaluacion = Evaluacion::where('id',$evaluacionid)->first();
            $evaluacion->image_path = $request->textochatinput;
            $evaluacion->user_id = Auth::user()->id;
            $evaluacion->updated_at = now();
            $evaluacion->save();
            return back()->with("status", "El chat se guardo correctamente");
        }elseif($request->has('form3')){
            $evaluacion = Evaluacion::where('id',$evaluacionid)->first();
            $evaluacion->estado_id = $request->cambioestado;
            $evaluacion->update();
            return back()->with("status", "El estado se cambio correctamente");
        }elseif($request->has('descartarEval')){
            $evaluacion = Evaluacion::where('id',$evaluacionid)->first();
            $evaluacion->estado_id = 6;
            $evaluacion->save();
            return back()->with("status", "La evaluación se descarto correctamente");
        }elseif($request->has('enviarRevision')){
            $evaluacion = Evaluacion::where('id',$evaluacionid)->first();
            $evaluacion->estado_id = 3;
            $evaluacion->update();
            return back()->with("status", "La evaluación se envió a Revisión");
        }
    }

}
