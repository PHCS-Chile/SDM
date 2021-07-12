<?php

namespace Database\Seeders;

use App\Models\Evaluacion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class RespuestasSeeder
 * @package Database\Seeders
 * @version 2
 */
class RespuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $evaluaciones = Evaluacion::where('estado_id','>',1)->where('estado_id','<',6)->get();
        foreach($evaluaciones as $evaluacion){
            $this->crearespuestas($evaluacion->id);
            DB::table('respuestas')->insert($this->respuestas);
        }
    }

    /**
     * @var string[][] Respuestas actualmente existentes. (Usar Factory?)
     */

    public $respuestas = [];

    public function crearespuestas($evaluacionid){
        $this->respuestas = [
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 1, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 2, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 3, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 4, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 5, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_int' => 1, 'respuesta_memo' => NULL, 'atributo_id' => 6, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 7, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 8, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 9, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 10, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_int' => 1, 'respuesta_memo' => NULL, 'atributo_id' => 11, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 12, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 13, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'checked', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 14, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 15, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'No', 'respuesta_int' => 0, 'respuesta_memo' => NULL, 'atributo_id' => 16, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 17, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 18, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 19, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 20, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_int' => 1, 'respuesta_memo' => NULL, 'atributo_id' => 21, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 22, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 23, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 24, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 25, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 26, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 27, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_int' => 1, 'respuesta_memo' => NULL, 'atributo_id' => 28, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 29, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 30, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'checked', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 31, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'No Aplica', 'respuesta_int' => -1, 'respuesta_memo' => NULL, 'atributo_id' => 32, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 33, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 34, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_int' => 1, 'respuesta_memo' => NULL, 'atributo_id' => 35, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 36, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 37, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 38, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_int' => 1, 'respuesta_memo' => NULL, 'atributo_id' => 39, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 40, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'checked', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 41, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'No Aplica', 'respuesta_int' => -1, 'respuesta_memo' => NULL, 'atributo_id' => 42, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 43, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 44, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 45, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 46, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_int' => 1, 'respuesta_memo' => NULL, 'atributo_id' => 47, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'Reclamo', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 48, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'Cambio de Plan o Condiciones comerciales', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 49, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 50, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 51, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 52, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 53, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 54, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_int' => 1, 'respuesta_memo' => NULL, 'atributo_id' => 55, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 56, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 57, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 58, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_int' => 1, 'respuesta_memo' => NULL, 'atributo_id' => 59, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 60, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 61, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 62, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_int' => 1, 'respuesta_memo' => NULL, 'atributo_id' => 63, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'No, por responsabilidad del Ejecutivo', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 64, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 65, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 66, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 67, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 68, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 69, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 70, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'checked', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 71, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 73, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 74, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 75, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'checked', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 76, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 77, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 78, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 79, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 80, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'checked', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 81, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 82, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 83, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 84, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 85, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 86, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 87, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => 'checked', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 88, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 89, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 90, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 91, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 92, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => 93, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => 'Comentario interno de prueba', 'atributo_id' => 94, 'evaluacion_id' => $evaluacionid],
            ['origen_id' => 1, 'respuesta_text' => '', 'respuesta_int' => NULL, 'respuesta_memo' => 'Retroalimentacion de prueba', 'atributo_id' => 95, 'evaluacion_id' => $evaluacionid],
        ];
    }


}
