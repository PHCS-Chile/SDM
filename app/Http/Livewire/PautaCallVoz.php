<?php

namespace App\Http\Livewire;

use App\Models\Escala;
use App\Models\Evaluacion;
use Livewire\Component;
use App\Http\Livewire\PautaBase;


/**
 * Class PautaCallVoz
 * @package App\Http\Livewire
 * @version 3
 */
class PautaCallVoz extends PautaBase
{
    public $gestiones, $resoluciones, $ruidos, $tiposnegocio, $pecresponsables;
    public $saludo1 = '';
    public $saludo2 = '';
    public $saludo3 = '';
    public $saludo4 = '';
    public $disposicion1 = '';
    public $disposicion2 = '';
    public $disposicion3 = '';
    public $cordialidad1 = '';
    public $cordialidad2 = '';
    public $cordialidad3 = '';
    public $cordialidad4 = '';
    public $cordialidad5 = '';
    public $manejosilencios1 = '';
    public $manejosilencios2 = '';
    public $manejosilencios3 = '';
    public $manejosilencios4 = '';
    public $seguridad1 = '';
    public $seguridad2 = '';
    public $seguridad3 = '';
    public $seguridad4 = '';
    public $seguridad5 = '';
    public $comunicacion1 = '';
    public $comunicacion2 = '';
    public $comunicacion3 = '';
    public $comunicacion4 = '';
    public $educacliente1 = '';
    public $educacliente2 = '';
    public $educacliente3 = '';
    public $educacliente4 = '';
    public $aseguramiento1 = '';
    public $aseguramiento2 = '';
    public $aseguramiento3 = '';
    public $aseguramiento4 = '';
    public $aseguramiento5 = '';
    public $aseguramiento6 = '';
    public $ofrecimientocomercial1 = '';
    public $ofrecimientocomercial2 = '';
    public $ofrecimientocomercial3 = '';
    public $ofrecimientocomercial4 = '';
    public $ofrecimientocomercial5 = '';
    public $ofrecimientocomercial6 = '';
    public $ofrecimientocomercial7 = '';
    public $ofrecimientocomercial8 = '';
    public $ofrecimientocomercial9 = '';
    public $ofrecimientocomercial10 = '';
    public $frasesenganche1 = '';
    public $frasesenganche2 = '';
    public $frasesenganche3 = '';
    public $frasesenganche4 = '';
    public $pecu_deteccion = '';
    public $pecu_gestionincorrecta = '';
    public $pecu_noresuelve = '';
    public $pecu_atenciongrosera = '';
    public $pecu_pocoprofesional = '';
    public $pecu_manipulacliente = '';
    public $pecn_nosondea = '';
    public $pecn_descalificaentel = '';
    public $pecn_beneficiofueraproc = '';
    public $pecn_fraude = '';
    public $pecn_noliberalinea = '';
    public $pecn_factibilidad = '';
    public $pecn_notipificasistema = '';
    public $pecn_otragestion = '';
    public $pecc_niegaescalamiento = '';
    public $pecc_omiteinformacion = '';
    public $pecc_infoconfidencial = '';
    public $pecc_cierrenegocios = '';
    public $pecc_novalidadatos = '';
    public $pecc_despacho = '';
    public $pec_responsable = '';
    public $otro_ruidoenllamada = '';
    public $otro_frasesyscripts = '';
    public $otro_tiponegocio = '';
    public $otro_ofrecimientomultilinea = '';
    public $otro_ofrecimientoequipo = '';
    public $otro_ofrecimientoaccesorio = '';
    public $retroalimentacion = '';
    public $comentario_interno = '';
    public $motivo = '';
    public $tipogestion1 = '';
    public $tipogestion2 = '';
    public $tipogestion3 = '';
    public $deteccion1 = '';
    public $deteccion2 = '';
    public $deteccion3 = '';
    public $deteccion4 = '';
    public $infocorrecta1 = '';
    public $infocorrecta2 = '';
    public $infocorrecta3 = '';
    public $infocorrecta4 = '';
    public $gestiona1 = '';
    public $gestiona2 = '';
    public $gestiona3 = '';
    public $gestiona4 = '';
    public $resolucion1 = '';
    public $resolucion2 = '';
    public $resolucion3 = '';
    public $resolucion4 = '';


    // FUNCIONES ESPECÍFICAS DEL BACKEND DE CALL VOZ

    /**
     * Implementación de método abstracto para ejecutar en el contexto del "mount".
     */
    public function inicializar()
    {
        $this->gestiones = Escala::where('grupo_id',1)->get();
        $this->resoluciones = Escala::where('grupo_id',2)->get();
        $this->ruidos = Escala::where('grupo_id',4)->get();
        $this->tiposnegocio = Escala::where('grupo_id',5)->get();
        $this->pecresponsables = Escala::where('grupo_id',3)->get();
        /* Reglas de validación */
        $this->rules1 = [
            'motivo' => 'required',
            'tipogestion1' => 'required',
            'deteccion1' => 'required',
            'infocorrecta1' => 'required',
            'gestiona1' => 'required',
            'resolucion1' => 'required',
            'retroalimentacion' => 'required',
        ];
    }

    /**
     * Implementación de método abstracto para ejecutar en el contexto del "save".
     */
    public function guardar()
    {
        $this->guardarRespuestas([97, 98, 99, 100], 'saludo', 1);
        $this->guardarRespuestas([101, 102, 103], 'disposicion', 1);
        $this->guardarRespuestas([104, 105, 106, 107, 108], 'cordialidad', 1);
        $this->guardarRespuestas([109, 110, 111, 112], 'manejosilencios', 1);
        $this->guardarRespuestas([113, 114, 115, 116, 117], 'seguridad', 1);
        $this->guardarRespuestas([118, 119, 120, 121], 'comunicacion', 1);
        $this->guardarRespuestas([122, 123, 124, 125], 'educacliente', 1);
        $this->guardarRespuestas([126, 127, 128, 129, 130, 131], 'aseguramiento', 1);
        $this->guardarRespuestas([132, 133, 134, 135, 136, 137, 138, 139, 140, 141], 'ofrecimientocomercial', 1);
        $this->guardarRespuestas([142, 143, 144, 145], 'frasesenganche', 1);

        // Errores críticos
        $this->guardarRespuesta(146, ['text' => $this->pecu_deteccion]);
        $this->guardarRespuesta(147, ['text' => $this->pecu_gestionincorrecta]);
        $this->guardarRespuesta(148, ['text' => $this->pecu_noresuelve]);
        $this->guardarRespuesta(149, ['text' => $this->pecu_atenciongrosera]);
        $this->guardarRespuesta(150, ['text' => $this->pecu_pocoprofesional]);
        $this->guardarRespuesta(151, ['text' => $this->pecu_manipulacliente]);
        $this->guardarRespuesta(152, ['text' => $this->pecn_nosondea]);
        $this->guardarRespuesta(153, ['text' => $this->pecn_descalificaentel]);
        $this->guardarRespuesta(154, ['text' => $this->pecn_beneficiofueraproc]);
        $this->guardarRespuesta(155, ['text' => $this->pecn_fraude]);
        $this->guardarRespuesta(156, ['text' => $this->pecn_noliberalinea]);
        $this->guardarRespuesta(157, ['text' => $this->pecn_factibilidad]);
        $this->guardarRespuesta(158, ['text' => $this->pecn_notipificasistema]);
        $this->guardarRespuesta(159, ['text' => $this->pecn_otragestion]);
        $this->guardarRespuesta(160, ['text' => $this->pecc_niegaescalamiento]);
        $this->guardarRespuesta(161, ['text' => $this->pecc_omiteinformacion]);
        $this->guardarRespuesta(162, ['text' => $this->pecc_infoconfidencial]);
        $this->guardarRespuesta(163, ['text' => $this->pecc_cierrenegocios]);
        $this->guardarRespuesta(164, ['text' => $this->pecc_novalidadatos]);
        $this->guardarRespuesta(165, ['text' => $this->pecc_despacho]);
        $this->guardarRespuesta(166, ['text' => $this->pec_responsable]);
        $this->guardarRespuesta(168, ['text' => $this->otro_ruidoenllamada]);
        $this->guardarRespuesta(169, ['text' => $this->otro_frasesyscripts]);
        $this->guardarRespuesta(171, ['text' => $this->otro_tiponegocio]);
        $this->guardarRespuesta(172, ['text' => $this->otro_ofrecimientomultilinea]);
        $this->guardarRespuesta(173, ['text' => $this->otro_ofrecimientoequipo]);
        $this->guardarRespuesta(174, ['text' => $this->otro_ofrecimientoaccesorio]);

        $this->guardarRespuesta(176, ['memo' => $this->retroalimentacion]);
        $this->guardarRespuesta(177, ['memo' => $this->comentario_interno]);
        $this->guardarRespuesta(179, ['text' => $this->motivo]);

        $this->guardarRespuestas([180, 181, 182], 'tipogestion');
        $this->guardarRespuestas([183, 184, 185, 186], 'deteccion');
        $this->guardarRespuestas([187, 188, 189, 190], 'infocorrecta');
        $this->guardarRespuestas([191, 192, 193, 194], 'gestiona');
        $this->guardarRespuestas([195, 196, 197, 198], 'resolucion');
    }

    /**
     * Implementación de método abstracto para ejecutar en el contexto del "save".
     */
    public function calcularPuntajes()
    {
        // TODO: Implement calcularPuntajes() method.
    }

    /**
     * Gestiona la construccion de la interfaz, así como de sus validaciones.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.pauta-call-voz');
    }


    // FUNCIONES PARA LA VALIDACION Y AUTOCOMPLETACIÓN DE CAMPOS SUJETOS A RESTRICCIONES

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xsaludo()
    {
        $this->validarCamposNoAplica([], [2, 3, 4], 1, "saludo");
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xdisposicion()
    {
        $this->validarCamposNoAplica([], [2, 3], 1, "disposicion");
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xcordialidad()
    {
        $this->validarCamposNoAplica([], [2, 3, 4, 5], 1, "cordialidad");
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xmanejosilencios()
    {
        $this->validarCamposNoAplica([], [2, 3, 4], 1, "manejosilencios");
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xseguridad()
    {
        $this->validarCamposNoAplica([], [2, 3, 4, 5], 1, "seguridad");
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xcomunicacion()
    {
        $this->validarCamposNoAplica([], [2, 3, 4], 1, "comunicacion");
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xeducacliente()
    {
        $this->validarCamposNoAplica([3, 4], [2], 1, "educacliente");
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xaseguramiento()
    {
        $this->validarCamposNoAplica([3, 4, 5, 6], [2], 1, "aseguramiento");
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xofrecimientocomercial()
    {
        $this->validarCamposNoAplica([4, 5, 6, 7, 8, 9, 10], [2, 3], 1, "ofrecimientocomercial");
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xfrasesenganche()
    {
        $this->validarCamposNoAplica([4], [2, 3], 1, "frasesenganche");
    }

    public function xotronegocio()
    {
        $campos = [
            'otro_ofrecimientomultilinea' => 'required',
            'otro_ofrecimientoequipo' => 'required',
            'otro_ofrecimientoaccesorio' => 'required',
        ];
        if ($this->otro_tiponegocio != "No aplica") {
            $this->agregarValidaciones($campos);
        } else {
            $this->quitarValidaciones($campos);
        }
    }

    public function xatributospec()
    {
        $atriobutosPEC = [
            'pecu' => ['deteccion', 'gestionincorrecta', 'noresuelve', 'atenciongrosera', 'pocoprofesional', 'manipulacliente'],
            'pecn' => ['nosondea', 'descalificaentel', 'beneficiofueraproc', 'fraude', 'noliberalinea', 'factibilidad', 'notipificasistema', 'otragestion'],
            'pecc' => ['niegaescalamiento', 'omiteinformacion', 'infoconfidencial', 'cierrenegocios', 'novalidadatos', 'despacho'],
        ];
        $hayMarcado = false;
        foreach ($atriobutosPEC as $tipo => $atributos) {
            foreach ($atributos as $atributo) {
                if ($this->{$tipo . "_" . $atributo} == 'checked') {
                    $hayMarcado = true;
                    break;
                }
            }
            if ($hayMarcado) {
                break;
            }
        }
        if ($hayMarcado) {
            $this->agregarValidaciones(['pec_responsable' => 'required']);
        } else {
            $this->quitarValidaciones(['pec_responsable' => 'required']);
        }
    }

    public function xgestion2()
    {
        $marcada = false;
        $campos = [
            'tipogestion2' => 'required',
            'deteccion2' => 'required',
            'infocorrecta2' => 'required',
            'gestiona2' => 'required',
            'resolucion2' => 'required',
        ];
        foreach ($campos as $campo => $regla) {
            if ($this->{$campo} != "") {
                $marcada = true;
                break;
            }
        }
        if ($marcada) {
            $this->agregarValidaciones($campos);
        } else {
            $this->quitarValidaciones($campos);
        }
    }

    public function xgestion3()
    {
        $marcada = false;
        $campos = [
            'tipogestion3' => 'required',
            'deteccion3' => 'required',
            'infocorrecta3' => 'required',
            'gestiona3' => 'required',
            'resolucion3' => 'required',
        ];
        foreach ($campos as $campo => $regla) {
            if ($this->{$campo} != "") {
                $marcada = true;
                break;
            }
        }
        if ($marcada) {
            $this->agregarValidaciones($campos);
        } else {
            $this->quitarValidaciones($campos);
        }
    }

}
