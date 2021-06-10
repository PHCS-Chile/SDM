<?php

namespace App\Http\Controllers;

use App\Models\Evaluacion;
use App\Models\Respuesta;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

/**
 * Class PautaController
 * Gestiona las peticiones POST para la modificación de las pautas
 * @package App\Http\Controllers
 * @version 1
 */
class PautaController extends Controller
{

    /**
     * Elimina la discrepancia (ICI) para una evaluación, si es que esta la tiene definida.
     *
     * @param $evaluacionid
     * @return Application|RedirectResponse|Redirector
     */
    public function resetici($evaluacionid){
        $evaluacion = Evaluacion::find($evaluacionid);
        /* Si tiene ICI */
        if ($evaluacion->respuestas->max('origen_id') == 2) {
            /* Se eliminan los origen_id = 1 (respuestas con discrepancia) */
            Respuesta::where('evaluacion_id', $evaluacionid)->where('origen_id',1)->delete();
            $respuestas = Respuesta::where('evaluacion_id', $evaluacionid)->where('origen_id',2)->get();
            /* Se actualiza el origen_id a 1 (sin ICI) */
            foreach ($respuestas as $respuesta) {
                $respuesta->origen_id = 1;
                $respuesta->save();
            }
            /* Se actualiza la evaluación para que no tenga los resultados del ICI */
            $evaluacion->ici = null;
            $evaluacion->user_ici = null;
            $evaluacion->fecha_ici = null;
            $evaluacion->save();
        }
        return redirect(route('evaluacions.index', [$evaluacionid]))->with("status", "Se borro ICI correctamente");

    }
}
