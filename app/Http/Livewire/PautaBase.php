<?php

namespace App\Http\Livewire;

use App\Models\Escala;
use App\Models\Evaluacion;
use App\Models\Respuesta;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;


/**
 * Class PautaBase
 *
 * Representa el comportamiento base de las pautas. Por ser abstracta, obliga al desarrollador a definir un
 * metodo "inicializar" y uno "guardar" (que se ejecutarán automáticamente en el "mount" y en el "save"
 * respectivamente, asegurando que se realicen además algunas operaciones de sincronizacion no opcionales.
 *
 * @package App\Http\Livewire
 * @version 3
 */
abstract class PautaBase extends Component
{

    /* Variables de instancia mínimas */
    public $evaluacion;
    public $rules1 = [];
    public $rules2 = [];
    public $rules3 = [];
    public $marca_ici = 0;

    public function cargarEvaluacion($evaluacionid=null)
    {
        if ($evaluacionid === null) {
            $evaluacionid = $this->evaluacion->id;
        }
        $this->evaluacion = Evaluacion::find($evaluacionid);
    }

    /**
     * Carga info de la base de datos en el controlador y luego llama a la función "inicializar", la que
     * debe ser implementada en las clases que extiendan de esta.
     *
     * @param $evaluacionid    int La id de la evaluación que se cargará
     */
    public function mount(int $evaluacionid){
        /* Obtener info desde la base de datos */
        $this->cargarEvaluacion($evaluacionid);
        if($this->evaluacion->fecha_ici){
            $this->marca_ici = 1;
        }

        /* Cargar información obtenida en el controlador */
        foreach ($this->evaluacion->respuestas as $respuesta){
            if ($respuesta->atributo->name_categoria == "Memo") {
                $this->{$respuesta->atributo->name_interno} = $respuesta->respuesta_memo;
            } else {
                $this->{$respuesta->atributo->name_interno} = $respuesta->respuesta_text;
            }
        }

        $this->inicializar();
    }


    /**
     * Método abstracto para ejecutar en el contexto del "mount".
     *
     * @return mixed
     */
    public abstract function inicializar();


    /**
     * Efectúa un proceso de evaluación de calidad interna
     * TODO: esto requiere generalizacion
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
        $atributosNoMemo = count($respuestas->atributos->where('name_categoria', "<>", "Memo")->all());
        $this->evaluacion->ici = $suma / $atributosNoMemo; /* TOTAL ATRIBUTOS NO MEMO? */
        $this->evaluacion->user_ici = Auth::user()->id;
        $this->evaluacion->fecha_ici = now();//->format('d-m-Y H:i:s');
        $this->evaluacion->save();
        $this->save();
    }


    /**
     * Método abstracto para ejecutar en el contexto del "save".
     *
     * @return mixed
     */
    public abstract function guardar();


    /**
     * Método abstracto para ejecutar en el contexto del "save".
     *
     * @return mixed
     */
    public abstract function calcularPuntajes();


    /**
     * Determina si hay una casilla marcada en una familia, para los correlativos indicados
     *
     * @param $correlativos array Lista de correlativos a verificar
     * @param $familia string Nombre de la familia de atributos
     * @return bool True si hay algun atributo marcado, False si no
     */
    public function hayCasillaMarcada($correlativos, $familia)
    {
        foreach ($correlativos as $correlativo) {
            if ($this->{$familia . $correlativo} == "checked") {
                return true;
            }
        }
        return false;
    }


    /**
     * Realiza la validación completa de marcado de casillas en el formulario. Se debe indicar los correlativos
     * que sean de tipo "no aplica", los campos "normales" y el campo resumen (padre), así como la familia de
     * atributos. Por ejemplo, si tenemos los atributos: entrada1, entrada2, entrada3, entrada4, entrada5 y entrada6
     * Y definimos que el "entrada1" es el resumen, que "entrada 5" y "entrada6" son camplos "no aplica" (por lo que
     * "entrada2", "entrada3" y "entrada4" son campos normales), el llamado a la función quedaría:
     *      validarCamposNoAplica([5, 6], [2, 3, 4], 1, "entrada");
     *
     * @param $correlativosNoAplica array Lista de correlativos de tipo "No Aplica"
     * @param $correlativosNormales array Lista de correlativos "normales"
     * @param $correlativoPadre int Correlativo del atributo padre (resumen)
     * @param $familia string Nombre de la familia de atributos
     */
    public function validarCamposNoAplica($correlativosNoAplica, $correlativosNormales, $correlativoPadre, $familia)
    {
        if ($this->hayCasillaMarcada($correlativosNoAplica, $familia)) {
            foreach ($correlativosNormales as $correlativo) {
                $this->{$familia . $correlativo} = "";
            }
            $this->{$familia . $correlativoPadre} = "No Aplica";
        } else if ($this->hayCasillaMarcada($correlativosNormales, $familia)) {
            $this->{$familia . $correlativoPadre} = "No";
        } else {
            $this->{$familia . $correlativoPadre} = "Si";
        }
    }


    /**
     * Guarda el formulario verificando estado actualizado de la evaluación y las validaciones.
     */
    public function save()
    {
        $this->validate(array_merge($this->rules1, $this->rules2, $this->rules3));
        $this->cargarEvaluacion($this->evaluacion->id);
        $this->guardar();
        $this->cargarEvaluacion($this->evaluacion->id);
        $this->calcularPuntajes();
        return redirect(route('evaluacions.index', ['evaluacionid' => $this->evaluacion->id]));
    }


    /**
     * Guarda un batch de respuestas que comparten el mismo "nombre de familia". Los atributos en las pautas
     * se tienden a agrupar por temática indexada del 1 al n (donde n es la cantidad de atributos de la familia).
     * Permite además indicar si uno de los atributos es resumen o anula las demás respuestas (no aplica).
     * Por ejemplo, si se desea guardar los atributos con id 1, 5, 30 y 100, teniéndose como resumen el 5 y
     * como "no aplica" el 100, para la familia de atributos "atributo" se deberá llamar a la función de la
     * siguiente manera:
     *
     *      guardarRespuestas([1, 5, 30, 100], "atributo", 2, 4);
     *      // Donde 2 y 4 representan al correlativo de la familia (van desde 1 hasta n)
     *
     *
     * @param $idsAtributo  array Lista de atributos del grupo
     * @param $nombreFamilia string Nombre que comparten los atributos del grupo
     * @param $resumen bool|int Posición del atributo "resumen" (de 1 a n)
     * @param $noAplica bool|int Posición del atributo "no aplica" (de 1 a n)
     */
    public function guardarRespuestas(array $idsAtributo, string $nombreFamilia, $resumen=false, $noAplica=false)
    {
        /* Se carga en un arreglo auxiliar los atributos que no sean ni "resumen" ni "no aplica" */
        $atributosRegulares = [];
        for ($i = 0; $i < count($idsAtributo); ++$i) {
            if (($i + 1) !== $resumen && ($i + 1) !== $noAplica) {
                $atributosRegulares[$idsAtributo[$i]] = $nombreFamilia . ($i + 1);
            }
        }
        /* Se generan los booleanos de verificación para verificar la presencia de chequeados y de "no aplica" */
        $hayChequeados = false;
        $noAplicaMarcado = $noAplica !== false && $this->{$nombreFamilia . $noAplica} == "checked";

        /* Se guardan los atributos "regulares" (ni "resumen" ni "no aplica") */
        foreach ($atributosRegulares as $idAtributo => $nombreAtributo) {
            if (!$noAplicaMarcado) {
                $this->guardarRespuesta($idAtributo, ['text' => $this->{$nombreAtributo}]);
                if ($this->{$nombreAtributo} == "checked") {
                    $hayChequeados = true;
                }
            } else {
                $this->guardarRespuesta($idAtributo, []);
            }
        }
        /* Se resuelve el guardado del padre y no aplica, dependiendo del caso */
        if ($noAplica !== false) {
            $this->guardarRespuesta($idsAtributo[$noAplica - 1], ['text' => $this->{$nombreFamilia . $noAplica}]);
        }
        if ($resumen !== false) {
            if ($noAplicaMarcado) {
                $this->guardarRespuesta($idsAtributo[$resumen - 1], ['text' => 'No Aplica', 'int' => -1]);
            } elseif ($hayChequeados) {
                $this->guardarRespuesta($idsAtributo[$resumen - 1], ['text' => 'No', 'int' => 0]);
            } else {
                $this->guardarRespuesta($idsAtributo[$resumen - 1], ['text' => 'Si', 'int' => 1]);
            }
        }
    }

    /**
     * Guarda una única respuesta del formulario. Se debe indicar un arreglo con los valores a guardar, donde
     * los índices válidos son "text", "int" y "memo" (uno para cada tipo de dato de respuesta).
     *
     * @param $idAtributo int ID del atributo a guardar
     * @param $valores array Valores a guardar
     */
    public function guardarRespuesta(int $idAtributo, array $valores)
    {
        /* Se verifica la existencia del atributo. Si no existe, se crea. */
        $respuestasOrigen1 = $this->evaluacion->respuestas->where('origen_id', 1);
        $respuesta = $respuestasOrigen1->firstWhere('atributo_id', $idAtributo);
        if ($respuesta === null) {
            $respuesta = new Respuesta();
            $respuesta->atributo_id = $idAtributo;
            $respuesta->evaluacion_id = $this->evaluacion->id;
            $respuesta->origen_id = 1;
        }
        /* Se asigna valor al atributo, dependiendo de los índices que hayan sido entregados. */
        if (isset($valores['text']) && $valores['text'] != null) {
            $respuesta->respuesta_text = $valores['text'];
        } else {
            $respuesta->respuesta_text = "";
        }
        if (isset($valores['int'])) {
            $respuesta->respuesta_int = $valores['int'];
        }
        if (isset($valores['memo'])) {
            $respuesta->respuesta_memo = $valores['memo'];
        }
        $respuesta->save();
    }

}
