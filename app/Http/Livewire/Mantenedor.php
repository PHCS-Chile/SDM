<?php

namespace App\Http\Livewire;

use App\Models\Atributo;
use App\Models\Estudio;
use Livewire\Component;

class Mantenedor extends Component
{

    public $estudio;
    public $atributos;


    public function updatedAtributos($valor, $id)
    {
        $arregloID = explode(".", $id);
        $atributoID = $arregloID[1];
        $columna = $arregloID[0];
        $atributo = Atributo::find($atributoID);
        $atributo->{$columna} = $valor;
        $atributo->save();
    }

    public function obtenerAtributos()
    {
        $atributos = Atributo::where('pauta_id', $this->estudio)->get();
        $this->atributos = [];
        foreach ($atributos as $atributo) {
            $this->atributos['objetos'][$atributo->id] = $atributo;
            $this->atributos['ponderador'][$atributo->id] = $atributo->ponderador;
            $this->atributos['ponderador_ici'][$atributo->id] = $atributo->ponderador_ici;
        }
    }

    public function render()
    {
        if (!$this->estudio) {
            $this->estudio = 1;
        }
        $this->obtenerAtributos();
        return view('livewire.mantenedor', [
            'estudios' => Estudio::all(),
        ]);
    }
}
