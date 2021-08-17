<?php

namespace App\Http\Livewire;

use App\Models\Asignacion;
use App\Models\Estado;
use App\Models\Estudio;
use App\Models\Evaluacion;
use App\Models\Periodo;
use App\Models\Servicio;
use DB;
use Livewire\Component;

class Reportes extends Component
{

    public $pagination = 25;
    public $marcarTodo;
    public $evaluacionesSeleccionadas = [];
    public $filtroPeriodo;
    public $filtroMercado;
    public $filtroEstudio;
    public $filtroServicio;


    public function marcarTodo()
    {
        for ($i = 0; $i < $this->pagination; ++$i) {
            $this->evaluacionesSeleccionadas[$i] = $this->marcarTodo == 'checked' ? 'checked' : null;
        }
    }

    public function render()
    {
        $this->evaluacionesSeleccionadas = [];
        return view('livewire.reportes', [
            'evaluaciones' => Evaluacion::with('asignacion')
                ->when($this->filtroPeriodo, function ($query) {
                    $query->where(function ($query2) {
                        $query2->select('periodo_id')
                            ->from('asignacions')
                            ->whereColumn('evaluacions.asignacion_id', 'asignacions.id')
                            ->limit(1);
                    }, $this->filtroPeriodo);

                })
                ->when($this->filtroMercado, function ($query) {
                    $query->where(function ($query2) {
                        $query2->select('mercado')
                            ->from('agentes')
                            ->where('id', function ($query3) {
                                $query3->select('agente_id')
                                    ->from('asignacions')
                                    ->whereColumn('evaluacions.asignacion_id', 'asignacions.id')
                                    ->limit(1);
                            })
                            ->limit(1);
                    }, $this->filtroMercado);
                })
                ->when($this->filtroEstudio, function ($query) {
                    $query->where(function ($query2) {
                        $query2->select('estudio_id')
                            ->from('asignacions')
                            ->whereColumn('evaluacions.asignacion_id', 'asignacions.id')
                            ->limit(1);
                    }, $this->filtroEstudio);

                })
                ->when($this->filtroServicio, function ($query) {
                    $query->where(function ($query2) {
                        $query2->select('servicio_id')
                            ->from('agentes')
                            ->where('id', function ($query3) {
                                $query3->select('agente_id')
                                    ->from('asignacions')
                                    ->whereColumn('evaluacions.asignacion_id', 'asignacions.id')
                                    ->limit(1);
                            })
                            ->limit(1);
                    }, $this->filtroServicio);
                })
                ->paginate($this->pagination),
            'estudios' => Estudio::all(),
            'periodos' => Periodo::all(),
            'servicios' => Servicio::all(),
            'estados' => Estado::all(),
        ]);
    }
}
