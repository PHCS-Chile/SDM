<?php

namespace App\Http\Controllers;

use App\Models\Asignacion;
use App\Models\Periodo;
use App\Models\Evaluacion;
use Illuminate\Http\Request;

class AsignacionController extends Controller
{
    public function index($periodoid){

        $periodoidfinal = Periodo::where('periodo_id',$periodoid)->first()->id;
        $periodos = Periodo::all();
        $periodoSeleccionado = Periodo::where('periodo_id',$periodoid)->first()->periodo_id;
        $asignacions = Asignacion::with('agente.servicio', 'evaluacions')->where('periodo_id',$periodoidfinal)
            ->get()
            ->sortByDesc('servicio')
        ;
        return view('asignacions.index',compact('asignacions', 'periodos', 'periodoSeleccionado'));
    }

    public function periodo(Request $request){
            $periodoidfinal = Periodo::where('periodo_id', $request->seleccionPeriodo)->first()->periodo_id;

            return redirect()->route('asignacions.index', ['periodoid' => $periodoidfinal]);
    }

    public function listar($asignacionid){


        $asignacionfinal = Asignacion::where('id',$asignacionid)->first();

        $asignacions = Asignacion::where('periodo_id',$asignacionfinal->periodo_id)->get()->sortByDesc('servicio');
        $evaluaciones = Evaluacion::select('rut_ejecutivo','asignacion_id')
            ->where('asignacion_id', $asignacionid)
            ->groupBy('rut_ejecutivo','asignacion_id')
            ->get();
        $evaluacionescompletas = Evaluacion::where('asignacion_id','=',$asignacionid)
        ->where('estado_id', '>',1)
        ->where('estado_id', '<',6)
        ->get();


        return view('asignacions.listar',compact('asignacions', 'evaluaciones', 'asignacionfinal', 'evaluacionescompletas'));
    }

    public function ejecutivoevaluaciones($asignacionid, $rutejecutivo){

        $asignacions = Asignacion::where('periodo_id',2)->get()->sortByDesc('servicio');
        $asignacionfinal = Asignacion::where('id',$asignacionid)->first();
        $baseasignacions = Evaluacion::where('asignacion_id',$asignacionid)->where('rut_ejecutivo',$rutejecutivo);
        return view('asignacions.ejecutivoevaluaciones',compact('asignacions', 'baseasignacions', 'asignacionfinal', 'rutejecutivo'));
    }
}
