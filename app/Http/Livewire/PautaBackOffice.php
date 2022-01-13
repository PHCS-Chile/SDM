<?php

namespace App\Http\Livewire;

use App\Http\Livewire\PautaBase;
use App\Models\Atributo;
use App\Models\Escala;
use App\Models\Evaluacion;
use App\Models\Grabacion;
use App\Models\Respuesta;
use Auth;
use Livewire\Component;

class PautaBackOffice extends PautaBase
{

    public $saludo1 = '';
    public $saludo2 = '';
    public $saludo3 = '';
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
    public $seguridad5 = '';
    public $claridad1 = '';
    public $claridad2 = '';
    public $claridad3 = '';
    public $claridad4 = '';
    public $cordialidad1 = '';
    public $cordialidad2 = '';
    public $cordialidad3 = '';
    public $cordialidad4 = '';
    public $cordialidad5 = '';
    public $pecu_antecedentes1 = '';
    public $pecu_antecedentes2 = '';
    public $pecu_antecedentes3 = '';
    public $pecu_antecedentes4 = '';
    public $pecu_antecedentes5 = '';
    public $pecu_antecedentes6 = '';
    public $pecu_antecedentes7 = '';
    public $pecu_antecedentes8 = '';
    public $pecu_antecedentes9 = '';
    public $pecu_antecedentes10 = '';
    public $pecu_antecedentes11 = '';
    public $pecu_antecedentes12 = '';
    public $pecu_infocompleta1 = '';
    public $pecu_infocompleta2 = '';
    public $pecu_infocompleta3 = '';
    public $pecu_infocompleta4 = '';
    public $pecu_infocompleta5 = '';
    public $pecu_infocompleta6 = '';
    public $pecu_infocompleta7 = '';
    public $pecu_infocompleta8 = '';
    public $pecu_infocompleta9 = '';
    public $pecu_infocorrecta1 = '';
    public $pecu_infocorrecta2 = '';
    public $pecu_infocorrecta3 = '';
    public $pecu_infocorrecta4 = '';
    public $pecu_infocorrecta5 = '';
    public $pecu_infocorrecta6 = '';
    public $pecu_infocorrecta7 = '';
    public $pecu_infocorrecta8 = '';
    public $pecu_infocorrecta9 = '';
    public $pecu_gestiona1 = '';
    public $pecu_gestiona2 = '';
    public $pecu_gestiona3 = '';
    public $pecu_gestiona4 = '';
    public $pecu_gestiona5 = '';
    public $pecu_gestiona6 = '';
    public $pecn_documentacion1 = '';
    public $pecn_documentacion2 = '';
    public $pecn_documentacion3 = '';
    public $pecn_documentacion4 = '';
    public $pecn_documentacion5 = '';
    public $pecn_documentacion6 = '';
    public $pecn_documentacion7 = '';
    public $pecc_protocolosubtel1 = '';
    public $pecc_protocolosubtel2 = '';
    public $pecc_protocolosubtel3 = '';
    public $pecc_protocolosubtel4 = '';
    public $pecc_protocolosubtel5 = '';
    public $pecc_protocolosubtel6 = '';
    public $pecn_procedimientos1 = '';
    public $pecn_procedimientos2 = '';
    public $pecn_procedimientos3 = '';
    public $pecn_procedimientos4 = '';
    public $pecn_procedimientos5 = '';
    public $pecn_procedimientos6 = '';
    public $pecn_procedimientos7 = '';
    public $pecn_procedimientos8 = '';
    public $pecn_procedimientos9 = '';
    public $pecu_protocoloplataforma1 = '';
    public $pecu_protocoloplataforma2 = '';
    public $pecu_protocoloplataforma3 = '';
    public $pecu_protocoloplataforma4 = '';
    public $pecu_protocoloplataforma5 = '';
    public $caracterizacion1 = '';
    public $caracterizacion2 = '';
    public $caracterizacion3 = '';
    public $caracterizacion4 = '';
    public $caracterizacion5 = '';
    public $caracterizacion6 = '';
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
            PautaBase::$RESPUESTA_CHECK => [329, 330, 332, 333, 334, 336, 337, 338, 340, 341, 342, 343, 345, 346, 347, 349, 350, 351, 352, 354, 355, 356, 357, 358, 359, 360, 361, 362, 363, 364, 366, 367, 368, 369, 370, 371, 372, 373, 375, 376, 377, 378, 379, 380, 381, 382, 384, 385, 386, 387, 388, 390, 391, 392, 393, 394, 395, 397, 398, 399, 400, 401, 403, 404, 405, 406, 407, 408, 409, 410, 412, 413, 414, 415, 416, 417, 418, 419, 420, 421, 422, 423],
            PautaBase::$RESPUESTA_OPCIONES => [],
            PautaBase::$RESPUESTA_SI_NO => [],
            PautaBase::$RESPUESTA_OTROS => [424, 425],
        ];

        /* Reglas de validación */
        $this->agregarValidaciones([
            'comentario_interno' => 'required',
            'retroalimentacion' => 'required',
        ]);

        $this->grabacion = Grabacion::where('evaluacion_id', $this->evaluacion->id)->first();
        if($this->grabacion){
            $this->grabacioncheck = 1;
        }
    }

    public function render()
    {
        return view('livewire.pauta-back-office');
    }

    public function guardar()
    {


        $this->guardarRespuestas([328, 329, 330], 'saludo', 1);
        $this->guardarRespuestas([331, 332, 333, 334], 'manejosilencios', 1);
        $this->guardarRespuestas([335, 336, 337, 338], 'expresionoral', 1);
        $this->guardarRespuestas([339, 340, 341, 342, 343], 'seguridad', 1);
        $this->guardarRespuestas([344, 345, 346, 347], 'claridad', 1);
        $this->guardarRespuestas([348, 349, 350, 351, 352], 'cordialidad', 1);
        $this->guardarRespuestas([353, 354, 355, 356, 357, 358, 359, 360, 361, 362, 363, 364], 'pecu_antecedentes', 1);
        $this->guardarRespuestas([365, 366, 367, 368, 369, 370, 371, 372, 373], 'pecu_infocompleta', 1);
        $this->guardarRespuestas([374, 375, 376, 377, 378, 379, 380, 381, 382], 'pecu_infocorrecta', 1);
        $this->guardarRespuestas([383, 384, 385, 386, 387, 388], 'pecu_gestiona', 1);
        $this->guardarRespuestas([389, 390, 391, 392, 393, 394, 395], 'pecn_documentacion', 1);
        $this->guardarRespuestas([396, 397, 398, 399, 400, 401], 'pecc_protocolosubtel', 1);
        $this->guardarRespuestas([402, 403, 404, 405, 406, 407, 408, 409, 410], 'pecn_procedimientos', 1);
        $this->guardarRespuestas([411, 412, 413, 414, 415], 'pecu_protocoloplataforma', 1);
        $this->guardarRespuestas([416, 417, 418, 419, 420, 421, 422, 423], 'caracterizacion');

        $this->guardarRespuesta(424, ['memo' => $this->retroalimentacion]);
        $this->guardarRespuesta(425, ['memo' => $this->comentario_interno]);

    }

    public function configurarCalculoDePuntajes()
    {

        $ponderadores = [
            328 => 8,    // saludo
            331 => 8,   // manejosilencios
            335 => 15,  // expresionoral
            339 => 10,  // seguridad
            344 => 5,   // claridad
            348 => 4,   // cordialidad
            353 => 5,   // antecedentes
            365 => 15,  // infocompleta
            374 => 15,  // infocorrecta
            383 => 15,  // gestiona
            389 => 15,  // documentacion
            396 => 15,  // pecc_protocolosubtel
            402 => 15,  // procedimientos
            411 => 15,  // protocoloplataforma
        ];
        $this->calcularPENC($ponderadores);
        $atributosCriticos = [
            'pecu' => ['antecedentes1', 'infocompleta1', 'infocorrecta1', 'gestiona1', 'protocoloplataforma1'],
            'pecn' => ['documentacion1', 'procedimientos1'],
            'pecc' => ['protocolosubtel1'],
        ];
        $this->calcularPEC($atributosCriticos);
    }

    public function xsaludo()
    {
        $this->validarCamposNoAplica([], [2, 3], 1, "saludo");


    }

    public function xmanejosilencios()
    {
        $this->validarCamposNoAplica([], [2, 3, 4], 1, "manejosilencios");

    }

    public function xexpresionoral()
    {
        $this->validarCamposNoAplica([], [2, 3, 4], 1, "expresionoral");

    }

    public function xseguridad()
    {
        $this->validarCamposNoAplica([], [2, 3, 4, 5], 1, "seguridad");

    }

    public function xclaridad()
    {
        $this->validarCamposNoAplica([], [2, 3, 4], 1, "claridad");

    }

    public function xcordialidad()
    {
        $this->validarCamposNoAplica([], [2, 3, 4, 5], 1, "cordialidad");

    }

    public function xantecedentes()
    {
        $this->validarCamposNoAplica([], [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12], 1, "pecu_antecedentes");

    }

    public function xinfocompleta()
    {
        $this->validarCamposNoAplica([], [2, 3, 4, 5, 6, 7, 8, 9], 1, "pecu_infocompleta");

    }

    public function xinfocorrecta()
    {
        $this->validarCamposNoAplica([], [2, 3, 4, 5, 6, 7, 8, 9], 1, "pecu_infocorrecta");

    }

    public function xgestiona()
    {
        $this->validarCamposNoAplica([], [2, 3, 4, 5, 6], 1, "pecu_gestiona");

    }

    public function xdocumentacion()
    {
        $this->validarCamposNoAplica([], [2, 3, 4, 5, 6, 7], 1, "pecn_documentacion");

    }

    public function xprotocolosubtel()
    {
        $this->validarCamposNoAplica([], [2, 3, 4, 5, 6], 1, "pecc_protocolosubtel");

    }

    public function xprocedimientos()
    {
        $this->validarCamposNoAplica([], [2, 3, 4, 5, 6, 7, 8, 9], 1, "pecn_procedimientos");

    }

    public function xprotocoloplataforma()
    {
        $this->validarCamposNoAplica([], [2, 3, 4, 5], 1, "pecu_protocoloplataforma");

    }

}
