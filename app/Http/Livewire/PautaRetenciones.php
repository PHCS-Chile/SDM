<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Atributo;
use App\Models\Escala;
use App\Models\Evaluacion;
use App\Models\Grabacion;
use App\Models\Respuesta;
use Auth;
use App\Http\Livewire\PautaBase;

class PautaRetenciones extends PautaBase
{

    public $saludo1 = '';
    public $saludo2 = '';
    public $saludo3 = '';
    public $saludo4 = '';
    public $manejosilencios1 = '';
    public $manejosilencios2 = '';
    public $manejosilencios3 = '';
    public $manejosilencios4 = '';
    public $expresionoral1 = '';
    public $expresionoral2 = '';
    public $expresionoral3 = '';
    public $expresionoral4 = '';
    public $seguridad1 = '';
    public $seguridad2 = '';
    public $seguridad3 = '';
    public $seguridad4 = '';
    public $claridad1 = '';
    public $claridad2 = '';
    public $claridad3 = '';
    public $claridad4 = '';
    public $cordialidad1 = '';
    public $cordialidad2 = '';
    public $cordialidad3 = '';
    public $cordialidad4 = '';
    public $cordialidad5 = '';
    public $antecedentes1 = '';
    public $antecedentes2 = '';
    public $antecedentes3 = '';
    public $antecedentes4 = '';
    public $antecedentes5 = '';
    public $antecedentes6 = '';
    public $antecedentes7 = '';
    public $infocompleta1 = '';
    public $infocompleta2 = '';
    public $infocompleta3 = '';
    public $infocompleta4 = '';
    public $infocompleta5 = '';
    public $infocompleta6 = '';
    public $infocorrecta1 = '';
    public $infocorrecta2 = '';
    public $infocorrecta3 = '';
    public $infocorrecta4 = '';
    public $infocorrecta5 = '';
    public $infocorrecta6 = '';
    public $gestiona1 = '';
    public $gestiona2 = '';
    public $gestiona3 = '';
    public $gestiona4 = '';
    public $protocolosubtel1 = '';
    public $protocolosubtel2 = '';
    public $protocolosubtel3 = '';
    public $protocolosubtel4 = '';
    public $procedimientos1 = '';
    public $procedimientos2 = '';
    public $procedimientos3 = '';
    public $procedimientos4 = '';
    public $procedimientos5 = '';
    public $procedimientos6 = '';
    public $procedimientos7 = '';
    public $procedimientos8 = '';
    public $procedimientos9 = '';
    public $protocoloplataforma1 = '';
    public $protocoloplataforma2 = '';
    public $protocoloplataforma3 = '';
    public $protocoloplataforma4 = '';
    public $protocoloplataforma5 = '';
    public $protocoloplataforma6 = '';
    public $caracterizacion1 = '';
    public $caracterizacion2 = '';
    public $caracterizacion3 = '';
    public $caracterizacion4 = '';
    public $caracterizacion5 = '';
    public $caracterizacion7 = '';
    public $caracterizacion8 = '';

    public $grabacion;
    public $retroalimentacion = '';
    public $comentario_interno = '';
    public $descripcion_caso = '';
    public $respuesta_ejecutivo = '';
    public $grabacioncheck = 0;

    public function inicializar()
    {
        /* Tipos de atributo al guardar */
        $this->tiposRespuesta = [
            PautaBase::$RESPUESTA_CHECK => [],
            PautaBase::$RESPUESTA_SI_NO => [],
        ];

        /* Reglas de validación */
        $this->agregarValidaciones([
            'descripcion_caso' => 'required',
            'respuesta_ejecutivo' => 'required',
            'retroalimentacion' => 'required',
        ]);

        $this->grabacion = Grabacion::where('evaluacion_id', $this->evaluacion->id)->first();
        if($this->grabacion){
            $this->grabacioncheck = 1;
        }
    }

    public function render()
    {
        return view('livewire.pauta-retenciones');
    }
}
