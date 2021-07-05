<?php

namespace App\Http\Livewire;

use App\Models\Escala;
use App\Models\Evaluacion;
use Livewire\Component;

class PautaCallVoz extends Component
{
    public $PENC_SaludoDespedida = '';
    public $PENC_SD_Bienvenida = '';
    public $PENC_SD_Despedida = '';
    public $PENC_SD_Contexto = '';
    public $PENC_Disposicion = '';
    public $PENC_DI_Interrumpe = '';
    public $PENC_DI_NoRetieneInfo = '';
    public $PENC_Cordialidad = '';
    public $PENC_CO_NoMuestraInteres = '';
    public $PENC_CO_NoReduceConflicto = '';
    public $PENC_CO_NoManifiestaDisposicion = '';
    public $PENC_CO_NoPideDisculpas = '';
    public $PENC_ManejoSilencios = '';
    public $PENC_MS_NoInformaPausa = '';
    public $PENC_MS_NoInteractua = '';
    public $PENC_MS_NoAgradece = '';
    public $PENC_Seguridad = '';
    public $PENC_Seguridad_Confianza = '';
    public $PENC_Seguridad_Informacion = '';
    public $PENC_Seguridad_Titubea = '';
    public $PENC_Seguridad_NoInformaMotivo = '';
    public $PENC_ComunicacionSimple = '';
    public $PENC_Comunicacion_TratoCercano = '';
    public $PENC_Comunicacion_PalabrasColoquiales = '';
    public $PENC_Comunicacion_Tecnicismos = '';
    public $PENC_EducaCliente = '';
    public $PENC_EducaCliente_NoInformaOtrosMedios = '';
    public $PENC_EducaCliente_NAMolestia = '';
    public $PENC_EducaCliente_NASinOpciones = '';
    public $PENC_Aseguramiento = '';
    public $PENC_Aseguramiento_NoValida = '';
    public $PENC_Aseguramiento_NATransfer = '';
    public $PENC_Aseguramiento_NACanal = '';
    public $PENC_Aseguramiento_NAMolestia = '';
    public $PENC_Aseguramiento_NAClienteAseguraInfo = '';
    public $PENC_Mejor_Alternativa = '';
    public $PENC_MA_NoAsesora = '';
    public $PENC_MA_NoOfreceAcorde = '';
    public $PENC_MA_NAPlataformaEspecialista = '';
    public $PENC_MA_NARechazaOfertas = '';
    public $PENC_MA_NANoTitular = '';
    public $PENC_MA_NASinFactComercial = '';
    public $PENC_MA_NASinFactTecnica = '';
    public $PENC_MA_NAProblemasTecnicos = '';
    public $PENC_MA_NAOtros = '';
    public $PENC_Frases_Enganche = '';
    public $PENC_FE_NoUtilizaFrases = '';
    public $PENC_FE_UsaArgumentosErroneos = '';
    public $PENC_FE_NASinOfrecimiento = '';
    public $PECU_DeteccionNecesidades = '';
    public $PECU_GestionIncorrecta = '';
    public $PECU_NoResuelve = '';
    public $PECU_AtencionGrosera = '';
    public $PECU_PocoProfesional = '';
    public $PECU_ManipulaCliente = '';
    public $PECN_NoSondea = '';
    public $PECN_DescalificaEntel = '';
    public $PECN_BeneficioFueraProc = '';
    public $PECN_Fraude = '';
    public $PECN_NoLiberaLinea = '';
    public $PECN_ValidacionFactibilidad = '';
    public $PECN_NoTipificaSistema = '';
    public $PECN_OtraGestion = '';
    public $PECC_NiegaEscalamiento = '';
    public $PECC_OmiteInformacion = '';
    public $PECC_InfoConfidencial = '';
    public $PECC_CierreNegocios = '';
    public $PECC_NoValidaDatos = '';
    public $PECC_CoordinacionDespacho = '';
    public $PEC_Responsable = '';
    public $OTRO_MotivoLlamado = '';
    public $OTRO_RuidoenLlamada = '';
    public $OTRO_FrasesyScripts = '';
    public $OTRO_TipoGestion = '';
    public $OTRO_TipoNegocio = '';
    public $OTRO_TN_OfrecimientoMultilinea = '';
    public $OTRO_TN_OfrecimientoEquipo = '';
    public $OTRO_TN_OfrecimientoAccesorio = '';
    public $OTRO_ResuelveEnLinea = '';
    public $retroalimentacion = '';
    public $comentario_interno = '';
    public $motivo = '';
    public $gestion1 = '';
    public $gestion2 = '';
    public $gestion3 = '';
    public $deteccion1 = '';
    public $deteccion2 = '';
    public $deteccion3 = '';
    public $deteccion4 = '';
    public $infocorrecta1 = '';
    public $infocorrecta2 = '';
    public $infocorrecta3 = '';
    public $infocorrecta4 = '';
    public $procedimiento1 = '';
    public $procedimiento2 = '';
    public $procedimiento3 = '';
    public $procedimiento4 = '';
    public $resolucion1 = '';
    public $resolucion2 = '';
    public $resolucion3 = '';



    /**
     * Carga info de la base de datos en el controlador
     * @param $evaluacionid    int La id de la evaluación que se cargará
     */
    public function mount(int $evaluacionid){
        /* Obtener info desde la base de datos */
        $this->evaluacion = Evaluacion::find($evaluacionid);
        $this->gestiones = Escala::where('grupo_id',1)->get();
        $this->resoluciones = Escala::where('grupo_id',2)->get();
        if($this->evaluacion->fecha_ici){
            $this->marca_ici = 1;
        }

        /* Cargar información obtenida en el controlador */
        $cargadas = [];
        foreach ($this->evaluacion->respuestas as $respuesta){
            if ($respuesta->atributo->name_categoria == "Memo") {
                $this->{$respuesta->atributo->name_interno} = $respuesta->respuesta_memo;
            } else {
                $this->{$respuesta->atributo->name_interno} = $respuesta->respuesta_text;
            }
        }
        /* Reglas de validación */
        $this->rules1 = [
            'motivo' => 'required',
            'gestion1' => 'required',
            'deteccion1' => 'required',
            'infocorrecta1' => 'required',
            'procedimiento1' => 'required',
            'resolucion1' => 'required',
            'retroalimentacion' => 'required',
        ];
    }

    public function render()
    {
        return view('livewire.pauta-call-voz');
    }
}
