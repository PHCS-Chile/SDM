<?php

namespace App\Http\Livewire;

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
    public $evaluacionid, $respuestas,$gestiones, $resoluciones;
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
    public $gestionplanillas1 = '';
    public $gestionplanillas2 = '';
    public $gestionplanillas3 = '';
    public $gestionplanillas4 = '';
    public $gestionplanillas5 = '';
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
    public $manejosilecios1 = '';
    public $manejosilecios2 = '';
    public $manejosilecios3 = '';
    public $manejosilecios4 = '';
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



    public function mount($evaluacionid){
        $this->evaluacionid = $evaluacionid;
        $evaluacion = Evaluacion::where('id',$this->evaluacionid)->first();

        if($evaluacion->fecha_ici){
            $this->marca_ici = 1;
        }
        $this->respuestas = Respuesta::where('evaluacion_id',$evaluacionid)->get();
        $this->gestiones = Escala::where('grupo_id',1)->get();
        $this->resoluciones = Escala::where('grupo_id',2)->get();
        foreach ($this->respuestas as $respuesta){
            if($respuesta->atributo_id == 1){$this->saludo1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 2){$this->saludo2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 3){$this->saludo3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 4){$this->saludo4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 5){$this->saludo5 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 6){$this->saludo6 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 7){$this->frases1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 8){$this->frases2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 9){$this->frases3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 10){$this->frases4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 11){$this->frases5 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 12){$this->cordialidad1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 13){$this->cordialidad2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 14){$this->cordialidad3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 15){$this->cordialidad4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 16){$this->cordialidad5 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 17){$this->gestionplanillas1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 18){$this->gestionplanillas2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 19){$this->gestionplanillas3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 20){$this->gestionplanillas4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 21){$this->gestionplanillas5 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 22){$this->ortografia1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 23){$this->ortografia2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 24){$this->ortografia3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 25){$this->ortografia4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 26){$this->ortografia5 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 27){$this->ortografia6 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 28){$this->ortografia7 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 29){$this->personalizacion1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 30){$this->personalizacion2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 31){$this->personalizacion3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 32){$this->personalizacion4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 33){$this->seguridad1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 34){$this->seguridad2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 35){$this->seguridad3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 36){$this->manejosilecios1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 37){$this->manejosilecios2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 38){$this->manejosilecios3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 39){$this->manejosilecios4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 40){$this->aseguramiento1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 41){$this->aseguramiento2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 42){$this->aseguramiento3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 43){$this->ofrecimiento1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 44){$this->ofrecimiento2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 45){$this->ofrecimiento3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 46){$this->ofrecimiento4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 47){$this->ofrecimiento5 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 48){$this->motivo = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 49){$this->gestion1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 50){$this->gestion2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 51){$this->gestion3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 52){$this->deteccion1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 53){$this->deteccion2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 54){$this->deteccion3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 55){$this->deteccion4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 56){$this->infocorrecta1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 57){$this->infocorrecta2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 58){$this->infocorrecta3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 59){$this->infocorrecta4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 60){$this->procedimiento1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 61){$this->procedimiento2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 62){$this->procedimiento3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 63){$this->procedimiento4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 64){$this->resolucion1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 65){$this->resolucion2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 66){$this->resolucion3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 67){$this->pecu_deteccion = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 68){$this->pecu_infocorrecta = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 69){$this->pecu_procedimiento = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 70){$this->pecu_pocoprofesional = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 71){$this->pecu_manipulacliente = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 73){$this->pecu_cierreinteraccion = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 74){$this->pecu_provocacierre = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 75){$this->pecn_beneficio = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 76){$this->pecn_fraude = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 77){$this->pecn_nosondea = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 78){$this->pecn_tipificacion = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 79){$this->pecn_factibilidad = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 80){$this->pecn_otragestion = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 81){$this->pecc_infoconfidencial = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 82){$this->pecc_novalidadatos = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 83){$this->pecc_cierre = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 84){$this->pecc_infoerronea = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 85){$this->asistentevirtual1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 86){$this->asistentevirtual2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 87){$this->asistentevirtual3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 88){$this->gestionesanteriores1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 89){$this->gestionesanteriores2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 90){$this->gestionesanteriores3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 91){$this->usuarios1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 92){$this->usuarios2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 93){$this->usuarios3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 94){$this->comentario_interno = $respuesta->respuesta_memo;}
            if($respuesta->atributo_id == 95){$this->retroalimentacion = $respuesta->respuesta_memo;}
        }
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

    public function ici()
    {
        if(array_count_values($this->rules2)>1 and array_count_values($this->rules3)>1){
            $this->validate(array_merge($this->rules1, $this->rules2, $this->rules3));
        }elseif(array_count_values($this->rules2)>1){
            $this->validate( array_merge($this->rules1, $this->rules2));
        }else{
            $this->validate($this->rules1);
        }

        $suma = 0;
        $respuestas = Respuesta::where('evaluacion_id', $this->evaluacionid)->get();
        foreach ($respuestas as $respuesta) {
            if ($respuesta->atributo_id == 1) {
                if ($respuesta->respuesta_text != $this->saludo1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 2) {
                if ($respuesta->respuesta_text != $this->saludo2) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 3) {
                if ($respuesta->respuesta_text != $this->saludo3) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 4) {
                if ($respuesta->respuesta_text != $this->saludo4) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 5) {
                if ($respuesta->respuesta_text != $this->saludo5) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 6) {
                if ($respuesta->respuesta_text != $this->saludo6) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 7) {
                if ($respuesta->respuesta_text != $this->frases1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 8) {
                if ($respuesta->respuesta_text != $this->frases2) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 9) {
                if ($respuesta->respuesta_text != $this->frases3) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 10) {
                if ($respuesta->respuesta_text != $this->frases4) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 11) {
                if ($respuesta->respuesta_text != $this->frases5) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 12) {
                if ($respuesta->respuesta_text != $this->cordialidad1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 13) {
                if ($respuesta->respuesta_text != $this->cordialidad2) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 14) {
                if ($respuesta->respuesta_text != $this->cordialidad3) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 15) {
                if ($respuesta->respuesta_text != $this->cordialidad4) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 16) {
                if ($respuesta->respuesta_text != $this->cordialidad5) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 17) {
                if ($respuesta->respuesta_text != $this->gestionplanillas1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 18) {
                if ($respuesta->respuesta_text != $this->gestionplanillas2) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 19) {
                if ($respuesta->respuesta_text != $this->gestionplanillas3) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 20) {
                if ($respuesta->respuesta_text != $this->gestionplanillas4) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 21) {
                if ($respuesta->respuesta_text != $this->gestionplanillas5) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 22) {
                if ($respuesta->respuesta_text != $this->ortografia1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 23) {
                if ($respuesta->respuesta_text != $this->ortografia2) {
                    $suma = $suma + 100;
                }

            }
            if ($respuesta->atributo_id == 24) {
                if ($respuesta->respuesta_text != $this->ortografia3) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 25) {
                if ($respuesta->respuesta_text != $this->ortografia4) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 26) {
                if ($respuesta->respuesta_text != $this->ortografia5) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 27) {
                if ($respuesta->respuesta_text != $this->ortografia6) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 28) {
                if ($respuesta->respuesta_text != $this->ortografia7) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 29) {
                if ($respuesta->respuesta_text != $this->personalizacion1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 30) {
                if ($respuesta->respuesta_text != $this->personalizacion2) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 31) {
                if ($respuesta->respuesta_text != $this->personalizacion3) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 32) {
                if ($respuesta->respuesta_text != $this->personalizacion4) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 33) {
                if ($respuesta->respuesta_text != $this->seguridad1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 34) {
                if ($respuesta->respuesta_text != $this->seguridad2) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 35) {
                if ($respuesta->respuesta_text != $this->seguridad3) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 36) {
                if ($respuesta->respuesta_text != $this->manejosilecios1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 37) {
                if ($respuesta->respuesta_text != $this->manejosilecios2) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 38) {
                if ($respuesta->respuesta_text != $this->manejosilecios3) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 39) {
                if ($respuesta->respuesta_text != $this->manejosilecios4) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 40) {
                if ($respuesta->respuesta_text != $this->aseguramiento1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 41) {
                if ($respuesta->respuesta_text != $this->aseguramiento2) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 42) {
                if ($respuesta->respuesta_text != $this->aseguramiento3) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 43) {
                if ($respuesta->respuesta_text != $this->ofrecimiento1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 44) {
                if ($respuesta->respuesta_text != $this->ofrecimiento2) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 45) {
                if ($respuesta->respuesta_text != $this->ofrecimiento3) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 46) {
                if ($respuesta->respuesta_text != $this->ofrecimiento4) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 47) {
                if ($respuesta->respuesta_text != $this->ofrecimiento5) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 48) {
                if ($respuesta->respuesta_text != $this->motivo) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 49) {
                if ($respuesta->respuesta_text != $this->gestion1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 50) {
                if ($respuesta->respuesta_text != $this->gestion2) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 51) {
                if ($respuesta->respuesta_text != $this->gestion3) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 52) {
                if ($respuesta->respuesta_text != $this->deteccion1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 53) {
                if ($respuesta->respuesta_text != $this->deteccion2) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 54) {
                if ($respuesta->respuesta_text != $this->deteccion3) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 55) {
                if ($respuesta->respuesta_text != $this->deteccion4) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 56) {
                if ($respuesta->respuesta_text != $this->infocorrecta1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 57) {
                if ($respuesta->respuesta_text != $this->infocorrecta2) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 58) {
                if ($respuesta->respuesta_text != $this->infocorrecta3) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 59) {
                if ($respuesta->respuesta_text != $this->infocorrecta4) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 60) {
                if ($respuesta->respuesta_text != $this->procedimiento1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 61) {
                if ($respuesta->respuesta_text != $this->procedimiento2) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 62) {
                if ($respuesta->respuesta_text != $this->procedimiento3) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 63) {
                if ($respuesta->respuesta_text != $this->procedimiento4) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 64) {
                if ($respuesta->respuesta_text != $this->resolucion1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 65) {
                if ($respuesta->respuesta_text != $this->resolucion2) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 66) {
                if ($respuesta->respuesta_text != $this->resolucion3) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 67) {
                if ($respuesta->respuesta_text != $this->pecu_deteccion) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 68) {
                if ($respuesta->respuesta_text != $this->pecu_infocorrecta) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 69) {
                if ($respuesta->respuesta_text != $this->pecu_procedimiento) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 70) {
                if ($respuesta->respuesta_text != $this->pecu_pocoprofesional) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 71) {
                if ($respuesta->respuesta_text != $this->pecu_manipulacliente) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 73) {
                if ($respuesta->respuesta_text != $this->pecu_cierreinteraccion) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 74) {
                if ($respuesta->respuesta_text != $this->pecu_provocacierre) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 75) {
                if ($respuesta->respuesta_text != $this->pecn_beneficio) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 76) {
                if ($respuesta->respuesta_text != $this->pecn_fraude) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 77) {
                if ($respuesta->respuesta_text != $this->pecn_nosondea) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 78) {
                if ($respuesta->respuesta_text != $this->pecn_tipificacion) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 79) {
                if ($respuesta->respuesta_text != $this->pecn_factibilidad) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 80) {
                if ($respuesta->respuesta_text != $this->pecn_otragestion) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 81) {
                if ($respuesta->respuesta_text != $this->pecc_infoconfidencial) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 82) {
                if ($respuesta->respuesta_text != $this->pecc_novalidadatos) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 83) {
                if ($respuesta->respuesta_text != $this->pecc_cierre) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 84) {
                if ($respuesta->respuesta_text != $this->pecc_infoerronea) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 85) {
                if ($respuesta->respuesta_text != $this->asistentevirtual1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 86) {
                if ($respuesta->respuesta_text != $this->asistentevirtual2) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 87) {
                if ($respuesta->respuesta_text != $this->asistentevirtual3) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 88) {
                if ($respuesta->respuesta_text != $this->gestionesanteriores1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 89) {
                if ($respuesta->respuesta_text != $this->gestionesanteriores2) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 90) {
                if ($respuesta->respuesta_text != $this->gestionesanteriores3) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 91) {
                if ($respuesta->respuesta_text != $this->usuarios1) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 92) {
                if ($respuesta->respuesta_text != $this->usuarios2) {
                    $suma = $suma + 100;
                }
            }
            if ($respuesta->atributo_id == 93) {
                if ($respuesta->respuesta_text != $this->usuarios3) {
                    $suma = $suma + 100;
                }
            }
            $respuesta->origen_id = 2;
            $respuesta->save();
        }
        $evaluacion = Evaluacion::where('id',$this->evaluacionid)->first();
        $evaluacion->ici = $suma / 92;
        $evaluacion->user_ici = Auth::user()->id;
        $evaluacion->fecha_ici = now();//->format('d-m-Y H:i:s');
        $evaluacion->save();

        $this->save();
    }

    //Esta es la funcion con el problema

    public function resetici(){

        //Respuesta::where('evaluacion_id', $this->evaluacionid)->where('origen_id',1)->delete();

        $respuestas = Respuesta::where('evaluacion_id', $this->evaluacionid)->where('origen_id',1)->get();
        foreach ($respuestas as $respuesta){
            $respuesta->origen_id = 3;
            $respuesta->save();
        }

        $respuestas = Respuesta::where('evaluacion_id', $this->evaluacionid)->where('origen_id',2)->get();
        foreach ($respuestas as $respuesta){
            $respuesta->origen_id = 1;
            $respuesta->save();
        }

        $evaluacion = Evaluacion::where('id',$this->evaluacionid)->first();
        $evaluacion->ici = null;
        $evaluacion->user_ici = null;
        $evaluacion->fecha_ici = null;
        $evaluacion->save();

        return back()->with("status", "Se borro ICI correctamente");

    }


    public function guardarespuesta($atributoid, string $atributotext){

        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacionid)->where('atributo_id', $atributoid)->where('origen_id',1)->first();
        if($respuesta){
            $respuesta->respuesta_text = $atributotext;
            $respuesta->save();
        }else{
            Respuesta::create([
                'atributo_id' => $atributoid,
                'evaluacion_id' => $this->evaluacionid,
                'respuesta_text' => $atributotext,
                'origen_id' => 1,
            ]);
        }

    }

    public function guardarespuestapadre($atributoid, string $atributotext, $atributoint){

        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacionid)->where('atributo_id', $atributoid)->where('origen_id',1)->first();
        if($respuesta){
            $respuesta->respuesta_text = $atributotext;
            $respuesta->respuesta_int = $atributoint;
            $respuesta->save();
        }else{
            Respuesta::create([
                'atributo_id' => $atributoid,
                'evaluacion_id' => $this->evaluacionid,
                'respuesta_text' => $atributotext,
                'respuesta_int' => $atributoint,
                'origen_id' => 1,
            ]);
        }

    }


    public function save(){

        if(array_count_values($this->rules2)>1 and array_count_values($this->rules3)>1){
            $this->validate(array_merge($this->rules1, $this->rules2, $this->rules3));
        }elseif(array_count_values($this->rules2)>1){
            $this->validate( array_merge($this->rules1, $this->rules2));
        }else{
            $this->validate($this->rules1);
        }

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
        $this->guardarespuestapadre(6, $respuestapadretext, $respuestapadre);

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
        $this->guardarespuestapadre(11, $respuestapadretext, $respuestapadre);

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
        $this->guardarespuestapadre(16, $respuestapadretext, $respuestapadre);

        $this->guardarespuesta(17, $this->gestionplanillas1);
        $this->guardarespuesta(18, $this->gestionplanillas2);
        $this->guardarespuesta(19, $this->gestionplanillas3);
        $this->guardarespuesta(20, $this->gestionplanillas4);

        if($this->gestionplanillas1 == 'checked' or $this->gestionplanillas2 == 'checked' or $this->gestionplanillas3 == 'checked' or $this->gestionplanillas4 == 'checked'){
            $respuestapadre = 0;
            $respuestapadretext = "No";
        }else{
            $respuestapadre = 1;
            $respuestapadretext = "Si";
        }
        $this->guardarespuestapadre(21, $respuestapadretext, $respuestapadre);

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
        $this->guardarespuestapadre(28, $respuestapadretext, $respuestapadre);

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

        $this->guardarespuestapadre(32, $respuestapadretext, $respuestapadre);

        $this->guardarespuesta(33, $this->seguridad1);
        $this->guardarespuesta(34, $this->seguridad2);

        if($this->seguridad1 == 'checked' or $this->seguridad2 == 'checked'){
            $respuestapadre = 0;
            $respuestapadretext = "No";
        }else{
            $respuestapadre = 1;
            $respuestapadretext = "Si";
        }
        $this->guardarespuestapadre(35, $respuestapadretext, $respuestapadre);

        $this->guardarespuesta(36, $this->manejosilecios1);
        $this->guardarespuesta(37, $this->manejosilecios2);
        $this->guardarespuesta(38, $this->manejosilecios3);

        if($this->manejosilecios1 == 'checked' or $this->manejosilecios2 == 'checked' or $this->manejosilecios3 == 'checked'){
            $respuestapadre = 0;
            $respuestapadretext = "No";
        }else{
            $respuestapadre = 1;
            $respuestapadretext = "Si";
        }
        $this->guardarespuestapadre(39, $respuestapadretext, $respuestapadre);

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

        $this->guardarespuestapadre(42, $respuestapadretext, $respuestapadre);

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

        $this->guardarespuestapadre(47, $respuestapadretext, $respuestapadre);

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

        $this->guardarespuestapadre(55, $respuestapadretext, $respuestapadre);

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

        $this->guardarespuestapadre(59, $respuestapadretext, $respuestapadre);

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

        $this->guardarespuestapadre(63, $respuestapadretext, $respuestapadre);

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


        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacionid)->where('atributo_id', 94)->where('origen_id',1)->first();
        if($respuesta){
            $respuesta->respuesta_memo = $this->comentario_interno;
            $respuesta->save();
        }else{
            Respuesta::create([
                'atributo_id' => 94,
                'evaluacion_id' => $this->evaluacionid,
                'respuesta_memo' => $this->comentario_interno,
                'origen_id' => 1,
            ]);
        }
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacionid)->where('atributo_id', 95)->where('origen_id',1)->first();
        if($respuesta){
            $respuesta->respuesta_memo = $this->retroalimentacion;
            $respuesta->save();
        }else{
            Respuesta::create([
                'atributo_id' => 95,
                'evaluacion_id' => $this->evaluacionid,
                'respuesta_memo' => $this->retroalimentacion,
                'origen_id' => 1,
            ]);
        }



        $penc = 0;
        $pecu = 100;
        $pecn = 100;
        $pecc = 100;
        $penctotal = 100;
        //Saludo
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacionid)->where('atributo_id', 6)->first();
        if($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Frases
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacionid)->where('atributo_id', 11)->first();
        if($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Cordialidad
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacionid)->where('atributo_id', 16)->first();
        if($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Gestion de Planillas e Info
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacionid)->where('atributo_id', 21)->first();
        if($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Ortografia
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacionid)->where('atributo_id', 28)->first();
        if($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Personalizacion
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacionid)->where('atributo_id', 32)->first();
        if($respuesta->respuesta_text == 'No Aplica'){
            $penctotal = $penctotal - 10;
        }elseif($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Seguridad
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacionid)->where('atributo_id', 35)->first();
        if($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Manejo de Silencios
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacionid)->where('atributo_id', 39)->first();
        if($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Aseguramiento
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacionid)->where('atributo_id', 42)->first();
        if($respuesta->respuesta_text == 'No Aplica'){
            $penctotal = $penctotal - 10;
        }elseif($respuesta->respuesta_text == 'Si'){
            $penc = $penc + 10;
        }
        //Ofrecimiento
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacionid)->where('atributo_id', 47)->first();
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



        $evaluacion = Evaluacion::where('id',$this->evaluacionid)->first();
        $evaluacion->penc = $pencfinal;
        $evaluacion->pecu = $pecu;
        $evaluacion->pecn = $pecn;
        $evaluacion->pecc = $pecc;
        if($evaluacion->estado_id = 1){
            $evaluacion->user_completa = Auth::user()->name;
            $evaluacion->fecha_completa = now();
        }
        if(is_null($evaluacion->user_id)){
            $evaluacion->user_id = Auth::user()->id;
        }
        if(Auth::user()->perfil == 1){
            $evaluacion->user_supervisor = Auth::user()->name;
            $evaluacion->fecha_supervision = now();
            $evaluacion->estado_id = 5;
        }else{
            $evaluacion->estado_id = 2;
        }
        $evaluacion->save();
        return redirect(route('evaluacions.index', ['evaluacionid' => $this->evaluacionid]));

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
