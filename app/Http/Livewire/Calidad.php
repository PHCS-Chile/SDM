<?php

namespace App\Http\Livewire;

use App\Models\Asignacion;
use App\Models\Estado;
use App\Models\Evaluacion;
use App\Models\Periodo;
use App\Models\User;
use Livewire\Component;


class Calidad extends Component
{
    public $estados, $usuarios, $usuariosresumen, $evaluaciones, $periodos, $filtroPeriodo, $asignacion1, $asignacion2, $filtroEstado, $filtroUsuario;

    public function mount(){
        $this->filtroPeriodo = Periodo::where('periodo_id',now()->format('ym'))->first()->id;
        $this->periodos = Periodo::all();
        $this->estados = Estado::all();
        $this->usuarios = User::where('perfil', 2)->get();
    }

    public function promedioici($usuario_id){
        $evaluaciones = Evaluacion::where('user_id',$usuario_id)->where('asignacion_id','>=',$this->asignacion1)->where('asignacion_id','<=',$this->asignacion2)->whereNotNull('ici')->get()->avg('ici');
        return $evaluaciones;
    }

    public function cuentaici($usuario_id){
        $evaluaciones = Evaluacion::where('user_id',$usuario_id)->where('asignacion_id','>=',$this->asignacion1)->where('asignacion_id','<=',$this->asignacion2)->whereNotNull('ici')->get();
        return $evaluaciones->count();
    }


    public function render()
    {
        //$asignaciones = Asignacion::where('periodo_id',$this->filtroPeriodo)->get()->toArray();
        //$this->asignacion1 = $asignaciones[array_key_first($asignaciones)]['id'];
        //$this->asignacion2 = $asignaciones[array_key_last($asignaciones)]['id'];

        $asignaciones = Asignacion::where('periodo_id',$this->filtroPeriodo)->orderBy('id')->get();
        $this->asignacion1 = $asignaciones->first()->id;
        $this->asignacion2 = $asignaciones->last()->id;



        $evaluaciones = Evaluacion::where('estado_id','>=',2)->where('estado_id','<=',5)->where('asignacion_id','>=',$this->asignacion1)->where('asignacion_id','<=',$this->asignacion2);

        if($this->filtroEstado){
            $evaluaciones->where('estado_id',$this->filtroEstado);
        }

        if($this->filtroUsuario){
            $evaluaciones->where('user_id',$this->filtroUsuario);
        }

        $this->evaluaciones = $evaluaciones->get();



        return view('livewire.calidad');
    }
}
