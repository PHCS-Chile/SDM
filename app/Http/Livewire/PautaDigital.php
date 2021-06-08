<?php

namespace App\Http\Livewire;

use App\Models\Atributo;
use App\Models\Escala;
use App\Models\Evaluacion;
use App\Models\Respuesta;
use Auth;
use Livewire\Component;

/**
 * Class PautaDigital
 * @package App\Http\Livewire
 * @version 2
 */
class PautaDigital extends Component
{
    public $evaluacion, $gestiones, $resoluciones;
    public $resultado = '';
    public $saludo1 = '';
    public $saludo2 = '';
    public $saludo3 = '';
    public $saludo4 = '';
    public $saludo5 = '';
    public $saludo6 = '';
    public $frases1 = '';
    public $frases2 = '';
    public $frases3 = '';
    public $frases4 = '';
    public $frases5 = '';
    public $cordialidad1 = '';
    public $cordialidad2 = '';
    public $cordialidad3 = '';
    public $cordialidad4 = '';
    public $cordialidad5 = '';
    public $gestionplantillas1 = '';
    public $gestionplantillas2 = '';
    public $gestionplantillas3 = '';
    public $gestionplantillas4 = '';
    public $gestionplantillas5 = '';
    public $ortografia1 = '';
    public $ortografia2 = '';
    public $ortografia3 = '';
    public $ortografia4 = '';
    public $ortografia5 = '';
    public $ortografia6 = '';
    public $ortografia7 = '';
    public $personalizacion1 = '';
    public $personalizacion2 = '';
    public $personalizacion3 = '';
    public $personalizacion4 = '';
    public $seguridad1 = '';
    public $seguridad2 = '';
    public $seguridad3 = '';
    public $manejosilencios1 = '';
    public $manejosilencios2 = '';
    public $manejosilencios3 = '';
    public $manejosilencios4 = '';
    public $aseguramiento1 = '';
    public $aseguramiento2 = '';
    public $aseguramiento3 = '';
    public $ofrecimiento1 = '';
    public $ofrecimiento2 = '';
    public $ofrecimiento3 = '';
    public $ofrecimiento4 = '';
    public $ofrecimiento5 = '';
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
    public $pecu_deteccion = '';
    public $pecu_infocorrecta = '';
    public $pecu_procedimiento = '';
    public $pecu_pocoprofesional = '';
    public $pecu_manipulacliente = '';
    public $pecu_cierreinteraccion = '';
    public $pecu_provocacierre = '';
    public $pecn_beneficio = '';
    public $pecn_fraude = '';
    public $pecn_nosondea = '';
    public $pecn_tipificacion = '';
    public $pecn_factibilidad = '';
    public $pecn_otragestion = '';
    public $pecc_infoconfidencial = '';
    public $pecc_novalidadatos = '';
    public $pecc_cierre = '';
    public $pecc_infoerronea = '';
    public $asistentevirtual1 = '';
    public $asistentevirtual2 = '';
    public $asistentevirtual3 = '';
    public $gestionesanteriores1 = '';
    public $gestionesanteriores2 = '';
    public $gestionesanteriores3 = '';
    public $usuarios1 = '';
    public $usuarios2 = '';
    public $usuarios3 = '';
    public $comentario_interno = '';
    public $retroalimentacion = '';
    public $rules1 = [];
    public $rules2 = [];
    public $rules3 = [];
    public $paso = '';
    public $marca_ici = 0;


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

    public function xpersonalizacion(){
        if($this->personalizacion3 == "checked"){
            $this->personalizacion1 = "";
            $this->personalizacion2 = "";
            $this->personalizacion4 = "No Aplica";
        }
    }

    public function xaseguramiento(){
        if($this->aseguramiento2 == "checked"){
            $this->aseguramiento1 = "";
            $this->aseguramiento3 = "No Aplica";
        }
    }

    public function xofrecimiento(){
        if($this->ofrecimiento4 == "checked"){
            $this->ofrecimiento1 = "";
            $this->ofrecimiento2 = "";
            $this->ofrecimiento3 = "";
            $this->ofrecimiento5 = "No Aplica";
        }
    }

    /**
     * Efectúa un proceso de evaluación de calidad interna
     */
    public function ici()
    {

        $this->validate(array_merge($this->rules1, $this->rules2, $this->rules3));

        $suma = 0;
        $respuestas = Respuesta::where('evaluacion_id', $this->evaluacion->id)->get();
        foreach ($respuestas as $respuesta) {
            if ($respuesta->atributo->name_categoria != "Memo") {
                if ($respuesta->respuesta_text != $this->{$respuesta->atributo->name_interno}) {
                    $suma += 100;
                }
            }
            $respuesta->origen_id = 2;
            $respuesta->save();
        }
        $this->evaluacion->ici = $suma / 92;
        $this->evaluacion->user_ici = Auth::user()->id;
        $this->evaluacion->fecha_ici = now();//->format('d-m-Y H:i:s');
        $this->evaluacion->save();
        $this->save();
    }


    /**
     * Elimina la evaluación de calidad interna
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resetici(){
        Respuesta::where('evaluacion_id', $this->evaluacion->id)->where('origen_id',1)->delete();
        $respuestas = Respuesta::where('evaluacion_id', $this->evaluacion->id)->where('origen_id',2)->get();
        foreach ($respuestas as $respuesta) {
            $respuesta->origen_id = 1;
            $respuesta->save();
        }

        $this->evaluacion->ici = null;
        $this->evaluacion->user_ici = null;
        $this->evaluacion->fecha_ici = null;
        $this->evaluacion->save();

        return back()->with("status", "Se borro ICI correctamente");

    }

    /**
     * Guarda una respuesta.
     * Si se entrega el parametro $atributoint con valor distinto de NULL se tratará como atributo "padre".
     *
     * @param $atributoid
     * @param string $atributotext
     * @param null $atributoint
     */
    public function guardarespuesta($atributoid, string $atributotext, $atributoint=NULL){

        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacion->id)->where('atributo_id', $atributoid)->where('origen_id',1)->first();
        if(!$respuesta) {
            $respuesta = new Respuesta();
            $respuesta->atributo_id = $atributoid;
            $respuesta->evaluacion_id = $this->evaluacion->id;
            $respuesta->origen_id = 1;
        }
        $respuesta->respuesta_text = $atributotext;
        if ($atributoint !== NULL) {
            $respuesta->respuesta_int = $atributoint;
        }
        $respuesta->save();
    }


    /*
     * TODO: Esto requiere una manito de gato
     */
    public function save(){

        $this->validate(array_merge($this->rules1, $this->rules2, $this->rules3));

        $this->guardarespuesta(1, $this->saludo1);
        $this->guardarespuesta(2, $this->saludo2);
        $this->guardarespuesta(3, $this->saludo3);
        $this->guardarespuesta(4, $this->saludo4);
        $this->guardarespuesta(5, $this->saludo5);

        if($this->saludo1 == 'checked' or $this->saludo2 == 'checked' or $this->saludo3 == 'checked' or $this->saludo4 == 'checked' or $this->saludo5 == 'checked'){
            $respuestapadre = 0;
            $respuestapadretext = "No";
        }else{
            $respuestapadre = 1;
            $respuestapadretext = "Si";
        }
        $this->guardarespuesta(6, $respuestapadretext, $respuestapadre);

        $this->guardarespuesta(7, $this->frases1);
        $this->guardarespuesta(8, $this->frases2);
        $this->guardarespuesta(9, $this->frases3);
        $this-> guardarespuesta(10, $this->frases4);

        if($this->frases1 == 'checked' or $this->frases2 == 'checked' or $this->frases3 == 'checked' or $this->frases4 == 'checked'){
            $respuestapadre = 0;
            $respuestapadretext = "No";
        }else{
            $respuestapadre = 1;
            $respuestapadretext = "Si";
        }
        $this->guardarespuesta(11, $respuestapadretext, $respuestapadre);

        $this->guardarespuesta(12, $this->cordialidad1);
        $this->guardarespuesta(13, $this->cordialidad2);
        $this->guardarespuesta(14, $this->cordialidad3);
        $this->guardarespuesta(15, $this->cordialidad4);

        if($this->cordialidad1 == 'checked' or $this->cordialidad2 == 'checked' or $this->cordialidad3 == 'checked' or $this->cordialidad4 == 'checked'){
            $respuestapadre = 0;
            $respuestapadretext = "No";
        }else{
            $respuestapadre = 1;
            $respuestapadretext = "Si";
        }
        $this->guardarespuesta(16, $respuestapadretext, $respuestapadre);

        $this->guardarespuesta(17, $this->gestionplantillas1);
        $this->guardarespuesta(18, $this->gestionplantillas2);
        $this->guardarespuesta(19, $this->gestionplantillas3);
        $this->guardarespuesta(20, $this->gestionplantillas4);

        if($this->gestionplantillas1 == 'checked' or $this->gestionplantillas2 == 'checked' or $this->gestionplantillas3 == 'checked' or $this->gestionplantillas4 == 'checked'){
            $respuestapadre = 0;
            $respuestapadretext = "No";
        }else{
            $respuestapadre = 1;
            $respuestapadretext = "Si";
        }
        $this->guardarespuesta(21, $respuestapadretext, $respuestapadre);

        $this->guardarespuesta(22, $this->ortografia1);
        $this->guardarespuesta(23, $this->ortografia2);
        $this->guardarespuesta(24, $this->ortografia3);
        $this->guardarespuesta(25, $this->ortografia4);
        $this->guardarespuesta(26, $this->ortografia5);
        $this->guardarespuesta(27, $this->ortografia6);

        if($this->ortografia1 == 'checked' or $this->ortografia2 == 'checked' or $this->ortografia3 == 'checked' or $this->ortografia4 == 'checked' or $this->ortografia5 == 'checked' or $this->ortografia6 == 'checked'){
            $respuestapadre = 0;
            $respuestapadretext = "No";
        }else{
            $respuestapadre = 1;
            $respuestapadretext = "Si";
        }
        $this->guardarespuesta(28, $respuestapadretext, $respuestapadre);

        $this->guardarespuesta(29, $this->personalizacion1);
        $this->guardarespuesta(30, $this->personalizacion2);
        $this->guardarespuesta(31, $this->personalizacion3);

        if($this->personalizacion3 == 'checked'){
            if($this->personalizacion1 != 'checked' and $this->personalizacion2 != 'checked'){
                $respuestapadre = -1;
                $respuestapadretext = "No Aplica";
            }
        }elseif($this->personalizacion1 == 'checked' or $this->personalizacion2 == 'checked'){
            $respuestapadre = 0;
            $respuestapadretext = "No";
        }else{
            $respuestapadre = 1;
            $respuestapadretext = "Si";
        }

        $this->guardarespuesta(32, $respuestapadretext, $respuestapadre);

        $this->guardarespuesta(33, $this->seguridad1);
        $this->guardarespuesta(34, $this->seguridad2);

        if($this->seguridad1 == 'checked' or $this->seguridad2 == 'checked'){
            $respuestapadre = 0;
            $respuestapadretext = "No";
        }else{
            $respuestapadre = 1;
            $respuestapadretext = "Si";
        }
        $this->guardarespuesta(35, $respuestapadretext, $respuestapadre);

        $this->guardarespuesta(36, $this->manejosilencios1);
        $this->guardarespuesta(37, $this->manejosilencios2);
        $this->guardarespuesta(38, $this->manejosilencios3);

        if($this->manejosilencios1 == 'checked' or $this->manejosilencios2 == 'checked' or $this->manejosilencios3 == 'checked'){
            $respuestapadre = 0;
            $respuestapadretext = "No";
        }else{
            $respuestapadre = 1;
            $respuestapadretext = "Si";
        }
        $this->guardarespuesta(39, $respuestapadretext, $respuestapadre);

        $this->guardarespuesta(40, $this->aseguramiento1);
        $this->guardarespuesta(41, $this->aseguramiento2);

        if($this->aseguramiento2 == 'checked'){
            if($this->aseguramiento1 != 'checked'){
                $respuestapadre = -1;
                $respuestapadretext = "No Aplica";
            }
        }elseif($this->aseguramiento1 == 'checked'){
            $respuestapadre = 0;
            $respuestapadretext = "No";
        }else{
            $respuestapadre = 1;
            $respuestapadretext = "Si";
        }

        $this->guardarespuesta(42, $respuestapadretext, $respuestapadre);

        // Ofrece nuevos productos/servicios

        $this->guardarespuesta(43, $this->ofrecimiento1);
        $this->guardarespuesta(44, $this->ofrecimiento2);
        $this->guardarespuesta(45, $this->ofrecimiento3);
        $this->guardarespuesta(46, $this->ofrecimiento4);

        if($this->ofrecimiento4 == 'checked'){
            if($this->ofrecimiento1 != 'checked' and $this->ofrecimiento2 != 'checked' and $this->ofrecimiento3 != 'checked'){
                $respuestapadre = -1;
                $respuestapadretext = "No Aplica";
            }
        }elseif($this->ofrecimiento1 == 'checked' or $this->ofrecimiento2 == 'checked' or $this->ofrecimiento3 == 'checked'){
            $respuestapadre = 0;
            $respuestapadretext = "No";
        }else{
            $respuestapadre = 1;
            $respuestapadretext = "Si";
        }

        $this->guardarespuesta(47, $respuestapadretext, $respuestapadre);

        // MOTIVO DEL LLAMADO

        $this->guardarespuesta(48, $this->motivo);

        // GESTIONES

        $this->guardarespuesta(49, $this->gestion1);
        $this->guardarespuesta(50, $this->gestion2);
        $this->guardarespuesta(51, $this->gestion3);


        // DETECCION DE NECESIDADES

        $this->guardarespuesta(52, $this->deteccion1);
        $this->guardarespuesta(53, $this->deteccion2);
        $this->guardarespuesta(54, $this->deteccion3);


        if($this->deteccion1 == 'checked' or $this->deteccion2 == 'checked' or $this->deteccion3 == 'checked'){
            $respuestapadre = 0;
            $respuestapadretext = "No";
        }else{
            $respuestapadre = 1;
            $respuestapadretext = "Si";
        }

        $this->guardarespuesta(55, $respuestapadretext, $respuestapadre);

        // INFO CORRECTA

        $this->guardarespuesta(56, $this->infocorrecta1);
        $this->guardarespuesta(57, $this->infocorrecta2);
        $this->guardarespuesta(58, $this->infocorrecta3);

        if($this->infocorrecta1 == 'checked' or $this->infocorrecta2 == 'checked' or $this->infocorrecta3 == 'checked'){
            $respuestapadre = 0;
            $respuestapadretext = "No";
        }else{
            $respuestapadre = 1;
            $respuestapadretext = "Si";
        }

        $this->guardarespuesta(59, $respuestapadretext, $respuestapadre);

        // PROCEDIMIENTO

        $this->guardarespuesta(60, $this->procedimiento1);
        $this->guardarespuesta(61, $this->procedimiento2);
        $this->guardarespuesta(62, $this->procedimiento3);

        if($this->procedimiento1 == 'checked' or $this->procedimiento2 == 'checked' or $this->procedimiento3 == 'checked'){
            $respuestapadre = 0;
            $respuestapadretext = "No";
        }else{
            $respuestapadre = 1;
            $respuestapadretext = "Si";
        }

        $this->guardarespuesta(63, $respuestapadretext, $respuestapadre);

        // RESOLUCION EN LINEA

        $this->guardarespuesta(64, $this->resolucion1);
        $this->guardarespuesta(65, $this->resolucion2);
        $this->guardarespuesta(66, $this->resolucion3);

        // ERRORES CRITICOS

        $this->guardarespuesta(67, $this->pecu_deteccion);
        $this->guardarespuesta(68, $this->pecu_infocorrecta);
        $this->guardarespuesta(69, $this->pecu_procedimiento);
        $this->guardarespuesta(70, $this->pecu_pocoprofesional);
        $this->guardarespuesta(71, $this->pecu_manipulacliente);
        $this->guardarespuesta(73, $this->pecu_cierreinteraccion);
        $this->guardarespuesta(74, $this->pecu_provocacierre);
        $this->guardarespuesta(75, $this->pecn_beneficio);
        $this->guardarespuesta(76, $this->pecn_fraude);
        $this->guardarespuesta(77, $this->pecn_nosondea);
        $this->guardarespuesta(78, $this->pecn_tipificacion);
        $this->guardarespuesta(79, $this->pecn_factibilidad);
        $this->guardarespuesta(80, $this->pecn_otragestion);
        $this->guardarespuesta(81, $this->pecc_infoconfidencial);
        $this->guardarespuesta(82, $this->pecc_novalidadatos);
        $this->guardarespuesta(83, $this->pecc_cierre);
        $this->guardarespuesta(84, $this->pecc_infoerronea);

        // CARACTERIZACION COMPLEMENTARIA

        $this->guardarespuesta(85, $this->asistentevirtual1);
        $this->guardarespuesta(86, $this->asistentevirtual2);
        $this->guardarespuesta(87, $this->asistentevirtual3);
        $this->guardarespuesta(88, $this->gestionesanteriores1);
        $this->guardarespuesta(89, $this->gestionesanteriores2);
        $this->guardarespuesta(90, $this->gestionesanteriores3);
        $this->guardarespuesta(91, $this->usuarios1);
        $this->guardarespuesta(92, $this->usuarios2);
        $this->guardarespuesta(93, $this->usuarios3);


        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacion->id)->where('atributo_id', 94)->where('origen_id',1)->first();
        if($respuesta){
            $respuesta->respuesta_memo = $this->retroalimentacion;
            $respuesta->save();
        }else{
            Respuesta::create([
                'atributo_id' => 94,
                'evaluacion_id' => $this->evaluacion->id,
                'respuesta_memo' => $this->retroalimentacion,
                'origen_id' => 1,
            ]);
        }
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacion->id)->where('atributo_id', 95)->where('origen_id',1)->first();
        if($respuesta){
            $respuesta->respuesta_memo = $this->comentario_interno;
            $respuesta->save();
        }else{
            Respuesta::create([
                'atributo_id' => 95,
                'evaluacion_id' => $this->evaluacion->id,
                'respuesta_memo' => $this->comentario_interno,
                'origen_id' => 1,
            ]);
        }



        $penc = 0;
        $pecu = 100;
        $pecn = 100;
        $pecc = 100;
        $penctotal = 100;
        //Saludo
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacion->id)->where('atributo_id', 6)->first();
        if($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Frases
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacion->id)->where('atributo_id', 11)->first();
        if($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Cordialidad
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacion->id)->where('atributo_id', 16)->first();
        if($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Gestion de Planillas e Info
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacion->id)->where('atributo_id', 21)->first();
        if($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Ortografia
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacion->id)->where('atributo_id', 28)->first();
        if($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Personalizacion
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacion->id)->where('atributo_id', 32)->first();
        if($respuesta->respuesta_text == 'No Aplica'){
            $penctotal = $penctotal - 10;
        }elseif($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Seguridad
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacion->id)->where('atributo_id', 35)->first();
        if($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Manejo de Silencios
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacion->id)->where('atributo_id', 39)->first();
        if($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Aseguramiento
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacion->id)->where('atributo_id', 42)->first();
        if($respuesta->respuesta_text == 'No Aplica'){
            $penctotal = $penctotal - 10;
        }elseif($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Ofrecimiento
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacion->id)->where('atributo_id', 47)->first();
        if($respuesta->respuesta_text == 'No Aplica'){
            $penctotal = $penctotal - 10;
        }elseif($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        $pencfinal = $penc / $penctotal * 100;

        if($this->pecu_deteccion == 'checked' or $this->pecu_infocorrecta == 'checked' or $this->pecu_procedimiento == 'checked' or $this->pecu_pocoprofesional == 'checked' or $this->pecu_manipulacliente == 'checked' or $this->pecu_cierreinteraccion == 'checked' or $this->pecu_provocacierre == 'checked'){
            $pecu = 0;
        }
        if($this->pecn_beneficio == 'checked' or $this->pecn_fraude == 'checked' or $this->pecn_nosondea == 'checked' or $this->pecn_tipificacion == 'checked' or $this->pecn_factibilidad == 'checked' or $this->pecn_otragestion == 'checked'){
            $pecn = 0;
        }
        if($this->pecc_infoconfidencial == 'checked' or $this->pecc_novalidadatos == 'checked' or $this->pecc_cierre == 'checked' or $this->pecc_infoerronea == 'checked'){
            $pecc = 0;
        }

        $this->evaluacion->penc = $pencfinal;
        $this->evaluacion->pecu = $pecu;
        $this->evaluacion->pecn = $pecn;
        $this->evaluacion->pecc = $pecc;
        if($this->evaluacion->estado_id = 1){
            $this->evaluacion->user_completa = Auth::user()->name;
            $this->evaluacion->fecha_completa = now();
        }
        if(is_null($this->evaluacion->user_id)){
            $this->evaluacion->user_id = Auth::user()->id;
        }
        if(Auth::user()->perfil == 1){
            $this->evaluacion->user_supervisor = Auth::user()->name;
            $this->evaluacion->fecha_supervision = now();
            $this->evaluacion->estado_id = 5;
        }else{
            $this->evaluacion->estado_id = 2;
        }
        $this->evaluacion->save();
        return redirect(route('evaluacions.index', ['evaluacionid' => $this->evaluacion->id]));

    }

    public function render()
    {
        // PEC AUTOMATICO SEGUN ATRIBUTOS DE GESTIONES
        if($this->deteccion1 == "No" or $this->deteccion2 == "No" or $this->deteccion3 == "No"){
            $this->pecu_deteccion = "checked";
        }else{
            $this->pecu_deteccion = "";
        }

        if($this->infocorrecta1 == "No" or $this->infocorrecta2 == "No" or $this->infocorrecta3 == "No"){
            $this->pecu_infocorrecta = "checked";
        }else{
            $this->pecu_infocorrecta = "";
        }

        if($this->procedimiento1 == "No" or $this->procedimiento2 == "No" or $this->procedimiento3 == "No"){
            $this->pecu_procedimiento = "checked";
        }else{
            $this->pecu_procedimiento = "";
        }

        if($this->gestion2 != "" or $this->deteccion2 != "" or $this->infocorrecta2 != "" or $this->procedimiento2 != "" or $this->resolucion2 != ""){
            $this->rules2 = [
                'gestion2' => 'required',
                'deteccion2' => 'required',
                'infocorrecta2' => 'required',
                'procedimiento2' => 'required',
                'resolucion2' => 'required',
            ];
        }

        if($this->gestion3 != "" or $this->deteccion3 != "" or $this->infocorrecta3 != "" or $this->procedimiento3 != "" or $this->resolucion3 != ""){
            $this->rules3 = [
                'gestion3' => 'required',
                'deteccion3' => 'required',
                'infocorrecta3' => 'required',
                'procedimiento3' => 'required',
                'resolucion3' => 'required',
            ];
        }

        return view('livewire.pauta-digital');
    }
}
