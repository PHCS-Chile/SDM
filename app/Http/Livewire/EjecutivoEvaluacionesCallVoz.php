<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Evaluacion;
use App\Models\Estado;
use App\Models\Asignacion;
use Livewire\WithPagination;

/**
 * Class EjecutivoEvaluacionesCallVoz
 * @package App\Http\Livewire
 *
 * @version 2
 */
class EjecutivoEvaluacionesCallVoz extends Component
{
    use WithPagination;
    public $asignacionid;
    public $filtroEstado;
    public $filtroEstadoGrabacion;
    public $filtroFecha;
    public $filtroConnid;
    public $searchMovil;
    public $filtroNoRecorridos;
    public $filtroEjecutivo = "Todos";
    public $estudio;

    public $subestudioDummies;


    /**
     * Mount
     * @param $asignacionid
     */
    public function mount($asignacionid){
        $this->asignacionid = $asignacionid;
        $this->estudio = Asignacion::where('id',$asignacionid)->first()->estudio_id;
    }

    /**
     * Render
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('livewire.ejecutivo-evaluaciones-call-voz', [
            'estados' => Estado::where('tipo', 1)->where('visible', 1)->get(),
            'ejecutivos' => Asignacion::find($this->asignacionid)->todosLosEjecutivos(),
            'grabacionestados' => Estado::where('tipo', 2)->where('visible', 1)->get(),
            'asignacionfinal' => Asignacion::find($this->asignacionid),
            'evaluacionescompletas' => Evaluacion::where('asignacion_id','=',$this->asignacionid)->where('estado_id', '>',1)->where('estado_id', '<',6)->get(),
            'evaluaciones' => Evaluacion::where('asignacion_id','=',$this->asignacionid)
                ->when($this->estudio == 3, function ($query) {
                    $query->where('tipo_gestion','Venta');
                })
                ->when($this->searchMovil, function ($query) {
                    $query->where('movil', 'like', "%" . trim($this->searchMovil) . "%");
                })
                ->when($this->filtroConnid, function ($query) {
                    $query->where('connid', 'like', "%" . trim($this->filtroConnid) . "%");
                })
                ->when($this->filtroFecha, function ($query) {
                    $query->where('fecha_grabacion', 'like', "%" . $this->filtroFecha . "%");
                })
                ->when($this->filtroEstado > 0, function ($query) {
                    $query->where('estado_id', $this->filtroEstado);
                })
                ->when($this->filtroEstadoGrabacion > 0, function ($query) {
                    $query->where('estado_conversacion', $this->filtroEstadoGrabacion);
                })
                ->when($this->filtroEjecutivo != "Todos", function ($query) {
                    $query->where('nombre_ejecutivo', $this->filtroEjecutivo);
                })
                ->orderBy('fecha_grabacion', 'desc')->paginate(40)
        ]);
    }

}
