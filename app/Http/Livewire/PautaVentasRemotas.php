<?php

namespace App\Http\Livewire;

use App\Models\Escala;
use App\Models\Evaluacion;
use App\Models\Grabacion;
use App\Models\Respuesta;
use Auth;
use Livewire\Component;
use App\Http\Livewire\PautaBase;

class PautaVentasRemotas extends PautaBase
{
    public $grabacion;
    public $presentacion1 = '';
    public $presentacion2 = '';
    public $presentacion3 = '';
    public $frasesenganche1 = '';
    public $frasesenganche2 = '';
    public $frasesenganche3 = '';
    public $personalizacion1 = '';
    public $personalizacion2 = '';
    public $personalizacion3 = '';
    public $deteccion1 = '';
    public $deteccion2 = '';
    public $deteccion3 = '';
    public $deteccion4 = '';
    public $evaluacion1 = '';
    public $evaluacion2 = '';
    public $evaluacion3 = '';
    public $evaluacion4 = '';
    public $evaluacion5 = '';
    public $evaluacion6 = '';
    public $mejoralternativa1 = '';
    public $mejoralternativa2 = '';
    public $mejoralternativa3 = '';
    public $argumentacion1 = '';
    public $argumentacion2 = '';
    public $argumentacion3 = '';
    public $argumentacion4 = '';
    public $condiciones1 = '';
    public $condiciones2 = '';
    public $condiciones3 = '';
    public $condiciones4 = '';
    public $condiciones5 = '';
    public $condiciones6 = '';
    public $condiciones7 = '';
    public $condiciones8 = '';
    public $condiciones9 = '';
    public $promociones1 = '';
    public $promociones2 = '';
    public $promociones3 = '';
    public $promociones4 = '';
    public $promociones5 = '';
    public $promociones6 = '';
    public $promociones7 = '';
    public $promociones8 = '';
    public $facturacion1 = '';
    public $facturacion2 = '';
    public $facturacion3 = '';
    public $facturacion4 = '';
    public $facturacion5 = '';
    public $facturacion6 = '';
    public $cargos1 = '';
    public $cargos2 = '';
    public $cargos3 = '';
    public $cargos4 = '';
    public $cargos5 = '';
    public $cargos6 = '';
    public $cargos7 = '';
    public $equipos1 = '';
    public $equipos2 = '';
    public $equipos3 = '';
    public $equipos4 = '';
    public $equipos5 = '';
    public $validacion1 = '';
    public $validacion2 = '';
    public $validacion3 = '';
    public $validacion4 = '';
    public $validacion5 = '';
    public $validacion6 = '';
    public $validacion7 = '';
    public $validacion8 = '';
    public $validacion9 = '';
    public $validacion10 = '';
    public $validacion11 = '';
    public $validacion12 = '';
    public $validacion13 = '';
    public $validacion14 = '';
    public $despacho1 = '';
    public $despacho2 = '';
    public $despacho3 = '';
    public $despacho4 = '';
    public $despacho5 = '';
    public $despacho6 = '';
    public $despacho7 = '';
    public $scripts1 = '';
    public $scripts2 = '';
    public $scripts3 = '';
    public $scripts4 = '';
    public $scripts5 = '';
    public $despedida1 = '';
    public $atencion1 = '';
    public $atencion2 = '';
    public $atencion3 = '';
    public $atencion4 = '';
    public $atencion5 = '';
    public $atencion6 = '';
    public $atencion7 = '';
    public $lenguaje1 = '';
    public $lenguaje2 = '';
    public $lenguaje3 = '';
    public $lenguaje4 = '';
    public $lenguaje5 = '';
    public $lenguaje6 = '';
    public $claridad1 = '';
    public $claridad2 = '';
    public $claridad3 = '';
    public $dominio1 = '';
    public $dominio2 = '';
    public $dominio3 = '';
    public $dominio4 = '';
    public $retroalimentacion = '';
    public $comentario_interno = '';
    public $descripcion_caso = '';
    public $respuesta_ejecutivo = '';

    public function inicializar()
    {
        /* Reglas de validación */
        $this->agregarValidaciones([
            'despedida1' => 'required',
            'retroalimentacion' => 'required',
        ]);
        $this->grabacion = Grabacion::where('evaluacion_id', $this->evaluacion->id)->first();
        if($this->grabacion){
            $this->grabacioncheck = 1;
        }
    }

    public function guardar()
    {


    }

    /**
     * Implementación de método abstracto para ejecutar en el contexto del "save".
     *
     * @return mixed|void
     */
    public function configurarCalculoDePuntajes()
    {


    }

    public function render()
    {
        return view('livewire.pauta-ventas-remotas');
    }
}
