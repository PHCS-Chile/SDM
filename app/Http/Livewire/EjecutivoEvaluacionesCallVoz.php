<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use App\Models\Evaluacion;
use App\Models\Estado;
use App\Models\Asignacion;


/**
 * Class EjecutivoEvaluacionesCallVoz
 * @package App\Http\Livewire
 *
 * @version 1
 */
class EjecutivoEvaluacionesCallVoz extends Component
{

    public $asignacionid;
    public $evaluaciones;
    public $estados;
    public $asignacionfinal;
    public $evaluacionescompletas;
    public $filtroEstado;
    public $filtroChat;
    public $searchMovil;
    public $filtroNoRecorridos;


    /**
     * Mount
     * @param $asignacionid
     */
    public function mount($asignacionid){
        $this->asignacionid = $asignacionid;
    }

    /**
     * Render
     * @return Application|Factory|View
     */
    public function render()
    {
        $this->estados = Estado::all();
        $this->asignacionfinal = Asignacion::all()->find($this->asignacionid);
        $this->evaluacionescompletas = Evaluacion::where('asignacion_id','=',$this->asignacionid)
            ->where('estado_id', '>',1)
            ->where('estado_id', '<',6)
            ->get();
        $evaluaciones2 = Evaluacion::where('asignacion_id','=',$this->asignacionid)
            ->where('movil', 'like', "%" . $this->searchMovil . "%")
            ->orderBy('fecha_grabacion', 'desc');

        if ($this->filtroEstado > 0) {
            $evaluaciones2->where('estado_id', '=', $this->filtroEstado);
        }

        if ($this->filtroChat == 'Con Chat') {
            $evaluaciones2->whereNotNull('image_path');
        }
        if ($this->filtroChat == 'Sin Chat') {
            $evaluaciones2->whereNull('image_path');
        }
        $this->evaluaciones = $evaluaciones2->get();

        return view('livewire.ejecutivo-evaluaciones-call-voz');
    }

}
