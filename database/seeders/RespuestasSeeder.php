<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class RespuestasSeeder
 * @package Database\Seeders
 * @version 1
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
        DB::table('respuestas')->insert($this->respuestas);
    }

    /**
     * @var string[][] Respuestas actualmente existentes. (Usar Factory?)
     */
    private $respuestas = [
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 1],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 2],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 3],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 4],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 5],
        ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_memo' => 1, 'atributo_id' => NULL, 'evaluacion_id' => 6],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 7],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 8],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 9],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 10],
        ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_memo' => 1, 'atributo_id' => NULL, 'evaluacion_id' => 11],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 12],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 13],
        ['origen_id' => 1, 'respuesta_text' => 'checked', 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 14],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 15],
        ['origen_id' => 1, 'respuesta_text' => 'No', 'respuesta_memo' => 0, 'atributo_id' => NULL, 'evaluacion_id' => 16],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 17],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 18],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 19],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 20],
        ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_memo' => 1, 'atributo_id' => NULL, 'evaluacion_id' => 21],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 22],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 23],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 24],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 25],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 26],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 27],
        ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_memo' => 1, 'atributo_id' => NULL, 'evaluacion_id' => 28],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 29],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 30],
        ['origen_id' => 1, 'respuesta_text' => 'checked', 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 31],
        ['origen_id' => 1, 'respuesta_text' => 'No Aplica', 'respuesta_memo' => -1, 'atributo_id' => NULL, 'evaluacion_id' => 32],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 33],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 34],
        ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_memo' => 1, 'atributo_id' => NULL, 'evaluacion_id' => 35],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 36],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 37],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 38],
        ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_memo' => 1, 'atributo_id' => NULL, 'evaluacion_id' => 39],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 40],
        ['origen_id' => 1, 'respuesta_text' => 'checked', 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 41],
        ['origen_id' => 1, 'respuesta_text' => 'No Aplica', 'respuesta_memo' => -1, 'atributo_id' => NULL, 'evaluacion_id' => 42],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 43],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 44],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 45],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 46],
        ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_memo' => 1, 'atributo_id' => NULL, 'evaluacion_id' => 47],
        ['origen_id' => 1, 'respuesta_text' => 'Reclamo', 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 48],
        ['origen_id' => 1, 'respuesta_text' => 'Cambio de Plan o Condiciones comerciales', 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 49],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 50],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 51],
        ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 52],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 53],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 54],
        ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_memo' => 1, 'atributo_id' => NULL, 'evaluacion_id' => 55],
        ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 56],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 57],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 58],
        ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_memo' => 1, 'atributo_id' => NULL, 'evaluacion_id' => 59],
        ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 60],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 61],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 62],
        ['origen_id' => 1, 'respuesta_text' => 'Si', 'respuesta_memo' => 1, 'atributo_id' => NULL, 'evaluacion_id' => 63],
        ['origen_id' => 1, 'respuesta_text' => 'No, por responsabilidad del Ejecutivo', 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 64],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 65],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 66],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 67],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 68],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 69],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 70],
        ['origen_id' => 1, 'respuesta_text' => 'checked', 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 71],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 73],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 74],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 75],
        ['origen_id' => 1, 'respuesta_text' => 'checked', 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 76],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 77],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 78],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 79],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 80],
        ['origen_id' => 1, 'respuesta_text' => 'checked', 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 81],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 82],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 83],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 84],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 85],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 86],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 87],
        ['origen_id' => 1, 'respuesta_text' => 'checked', 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 88],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 89],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 90],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 91],
        ['origen_id' => 1, 'respuesta_text' => NULL, 'respuesta_memo' => NULL, 'atributo_id' => NULL, 'evaluacion_id' => 92],
    ];
}
