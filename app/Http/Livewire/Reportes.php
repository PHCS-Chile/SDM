<?php

namespace App\Http\Livewire;

use App\Models\Estudio;
use App\Models\Evaluacion;
use Livewire\Component;

class Reportes extends Component
{

    public $pagination = 15;
    public $marcarTodo;
    public $evaluacionesSeleccionadas = [];

    public $filtroEstudio = 0;

    public function marcarTodo()
    {
        for ($i = 0; $i < $this->pagination; ++$i) {
            $this->evaluacionesSeleccionadas[$i] = $this->marcarTodo == 'checked' ? 'checked' : null;
        }
    }

    public function render()
    {
        return view('livewire.reportes', [
            'evaluaciones' => Evaluacion::where('id', '>', 0)
                ->when($this->filtroEstudio > 0, function ($query) {
                    $query->where('estudio_id', $this->filtroEstudio);
                })
                ->paginate($this->pagination),
            'estudios' => Estudio::all(),
        ]);
    }
}
