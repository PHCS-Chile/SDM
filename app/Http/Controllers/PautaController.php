<?php

namespace App\Http\Controllers;

use App\Models\Evaluacion;
use App\Models\Respuesta;
use Illuminate\Http\Request;

class PautaController extends Controller
{
    public function resetici($evaluacionid){
        $evaluacion = Evaluacion::find($evaluacionid);
        $tieneICI = $evaluacion->respuestas->max('origen_id') == 2;
        if ($tieneICI) {
            Respuesta::where('evaluacion_id', $evaluacionid)->where('origen_id',1)->delete();
            $respuestas = Respuesta::where('evaluacion_id', $evaluacionid)->where('origen_id',2)->get();
            foreach ($respuestas as $respuesta) {
                $respuesta->origen_id = 1;
                $respuesta->save();
            }

            $evaluacion->ici = null;
            $evaluacion->user_ici = null;
            $evaluacion->fecha_ici = null;
            $evaluacion->save();
        }
        return redirect(route('evaluacions.index', [$evaluacionid]))->with("status", "Se borro ICI correctamente");

    }
}
