<?php

namespace Database\Seeders;

use App\Models\Agente;
use App\Models\Asignacion;
use App\Models\Periodo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class AsignacionsSeeder
 * @package Database\Seeders
 * @version 5
 */
class AsignacionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $agentes = Agente::where('id' ,'>' ,0)->pluck('id')->toArray();
//        $periodos =Periodo::where('id' ,'>' ,0)->pluck('id')->toArray();
//        foreach ($periodos as $periodo) {
//            foreach ($agentes as $agente) {
//                Asignacion::factory()->digital()->create([
//                    'periodo_id' => $periodo,
//                    'agente_id'  => $agente,
//                ]);
//            }
//        }
        $periodos = Periodo::all();

        DB::table('asignacions')->insert($this->asignacions);
    }

    /*
     * TODO: Utilizar factory
     */
    private $asignacions = [
        ['n_asignacion' => 20, 'agente_id' => 1, 'periodo_id' => 1, 'estudio_id' => 1],
        ['n_asignacion' => 34, 'agente_id' => 2, 'periodo_id' => 1, 'estudio_id' => 1],
        ['n_asignacion' => 80, 'agente_id' => 3, 'periodo_id' => 1, 'estudio_id' => 1],
        ['n_asignacion' => 30, 'agente_id' => 4, 'periodo_id' => 1, 'estudio_id' => 1],
        ['n_asignacion' => 40, 'agente_id' => 5, 'periodo_id' => 1, 'estudio_id' => 1],
        ['n_asignacion' => 130, 'agente_id' => 6, 'periodo_id' => 1, 'estudio_id' => 1],
        ['n_asignacion' => 142, 'agente_id' => 7, 'periodo_id' => 1, 'estudio_id' => 1],
        ['n_asignacion' => 120, 'agente_id' => 9, 'periodo_id' => 1, 'estudio_id' => 1],
        ['n_asignacion' => 30, 'agente_id' => 10, 'periodo_id' => 1, 'estudio_id' => 1],
        ['n_asignacion' => 99010, 'agente_id' => 12, 'periodo_id' => 1, 'estudio_id' => 1],
        ['n_asignacion' => 20, 'agente_id' => 1, 'periodo_id' => 2, 'estudio_id' => 1],
        ['n_asignacion' => 34, 'agente_id' => 2, 'periodo_id' => 2, 'estudio_id' => 1],
        ['n_asignacion' => 80, 'agente_id' => 3, 'periodo_id' => 2, 'estudio_id' => 1],
        ['n_asignacion' => 30, 'agente_id' => 4, 'periodo_id' => 2, 'estudio_id' => 1],
        ['n_asignacion' => 40, 'agente_id' => 5, 'periodo_id' => 2, 'estudio_id' => 1],
        ['n_asignacion' => 130, 'agente_id' => 6, 'periodo_id' => 2, 'estudio_id' => 1],
        ['n_asignacion' => 142, 'agente_id' => 7, 'periodo_id' => 2, 'estudio_id' => 1],
        ['n_asignacion' => 120, 'agente_id' => 9, 'periodo_id' => 2, 'estudio_id' => 1],
        ['n_asignacion' => 30, 'agente_id' => 10, 'periodo_id' => 2, 'estudio_id' => 1],
        ['n_asignacion' => 20, 'agente_id' => 1, 'periodo_id' => 3, 'estudio_id' => 1],
        ['n_asignacion' => 34, 'agente_id' => 2, 'periodo_id' => 3, 'estudio_id' => 1],
        ['n_asignacion' => 80, 'agente_id' => 3, 'periodo_id' => 3, 'estudio_id' => 1],
        ['n_asignacion' => 30, 'agente_id' => 4, 'periodo_id' => 3, 'estudio_id' => 1],
        ['n_asignacion' => 40, 'agente_id' => 5, 'periodo_id' => 3, 'estudio_id' => 1],
        ['n_asignacion' => 130, 'agente_id' => 6, 'periodo_id' => 3, 'estudio_id' => 1],
        ['n_asignacion' => 142, 'agente_id' => 7, 'periodo_id' => 3, 'estudio_id' => 1],
        ['n_asignacion' => 120, 'agente_id' => 9, 'periodo_id' => 3, 'estudio_id' => 1],
        ['n_asignacion' => 30, 'agente_id' => 10, 'periodo_id' => 3, 'estudio_id' => 1],
        ['n_asignacion' => 20, 'agente_id' => 1, 'periodo_id' => 4, 'estudio_id' => 1],
        ['n_asignacion' => 34, 'agente_id' => 2, 'periodo_id' => 4, 'estudio_id' => 1],
        ['n_asignacion' => 80, 'agente_id' => 3, 'periodo_id' => 4, 'estudio_id' => 1],
        ['n_asignacion' => 30, 'agente_id' => 4, 'periodo_id' => 4, 'estudio_id' => 1],
        ['n_asignacion' => 40, 'agente_id' => 5, 'periodo_id' => 4, 'estudio_id' => 1],
        ['n_asignacion' => 130, 'agente_id' => 6, 'periodo_id' => 4, 'estudio_id' => 1],
        ['n_asignacion' => 142, 'agente_id' => 7, 'periodo_id' => 4, 'estudio_id' => 1],
        ['n_asignacion' => 120, 'agente_id' => 9, 'periodo_id' => 4, 'estudio_id' => 1],
        ['n_asignacion' => 30, 'agente_id' => 10, 'periodo_id' => 4, 'estudio_id' => 1],
        ['n_asignacion' => 20, 'agente_id' => 1, 'periodo_id' => 5, 'estudio_id' => 1],
        ['n_asignacion' => 34, 'agente_id' => 2, 'periodo_id' => 5, 'estudio_id' => 1],
        ['n_asignacion' => 80, 'agente_id' => 3, 'periodo_id' => 5, 'estudio_id' => 1],
        ['n_asignacion' => 30, 'agente_id' => 4, 'periodo_id' => 5, 'estudio_id' => 1],
        ['n_asignacion' => 40, 'agente_id' => 5, 'periodo_id' => 5, 'estudio_id' => 1],
        ['n_asignacion' => 130, 'agente_id' => 6, 'periodo_id' => 5, 'estudio_id' => 1],
        ['n_asignacion' => 142, 'agente_id' => 7, 'periodo_id' => 5, 'estudio_id' => 1],
        ['n_asignacion' => 120, 'agente_id' => 9, 'periodo_id' => 5, 'estudio_id' => 1],
        ['n_asignacion' => 30, 'agente_id' => 10, 'periodo_id' => 5, 'estudio_id' => 1],
        ['n_asignacion' => 20, 'agente_id' => 1, 'periodo_id' => 6, 'estudio_id' => 1],
        ['n_asignacion' => 34, 'agente_id' => 2, 'periodo_id' => 6, 'estudio_id' => 1],
        ['n_asignacion' => 80, 'agente_id' => 3, 'periodo_id' => 6, 'estudio_id' => 1],
        ['n_asignacion' => 30, 'agente_id' => 4, 'periodo_id' => 6, 'estudio_id' => 1],
        ['n_asignacion' => 40, 'agente_id' => 5, 'periodo_id' => 6, 'estudio_id' => 1],
        ['n_asignacion' => 130, 'agente_id' => 6, 'periodo_id' => 6, 'estudio_id' => 1],
        ['n_asignacion' => 142, 'agente_id' => 7, 'periodo_id' => 6, 'estudio_id' => 1],
        ['n_asignacion' => 120, 'agente_id' => 9, 'periodo_id' => 6, 'estudio_id' => 1],
        ['n_asignacion' => 30, 'agente_id' => 10, 'periodo_id' => 6, 'estudio_id' => 1],
        ['n_asignacion' => 20, 'agente_id' => 1, 'periodo_id' => 1, 'estudio_id' => 2],
        ['n_asignacion' => 34, 'agente_id' => 2, 'periodo_id' => 1, 'estudio_id' => 2],
        ['n_asignacion' => 80, 'agente_id' => 3, 'periodo_id' => 1, 'estudio_id' => 2],
        ['n_asignacion' => 30, 'agente_id' => 4, 'periodo_id' => 1, 'estudio_id' => 2],
        ['n_asignacion' => 40, 'agente_id' => 5, 'periodo_id' => 1, 'estudio_id' => 2],
        ['n_asignacion' => 130, 'agente_id' => 6, 'periodo_id' => 1, 'estudio_id' => 2],
        ['n_asignacion' => 142, 'agente_id' => 7, 'periodo_id' => 1, 'estudio_id' => 2],
        ['n_asignacion' => 120, 'agente_id' => 9, 'periodo_id' => 1, 'estudio_id' => 2],
        ['n_asignacion' => 30, 'agente_id' => 10, 'periodo_id' => 1, 'estudio_id' => 2],
        ['n_asignacion' => 99010, 'agente_id' => 12, 'periodo_id' => 1, 'estudio_id' => 2],
        ['n_asignacion' => 20, 'agente_id' => 1, 'periodo_id' => 2, 'estudio_id' => 2],
        ['n_asignacion' => 34, 'agente_id' => 2, 'periodo_id' => 2, 'estudio_id' => 2],
        ['n_asignacion' => 80, 'agente_id' => 3, 'periodo_id' => 2, 'estudio_id' => 2],
        ['n_asignacion' => 30, 'agente_id' => 4, 'periodo_id' => 2, 'estudio_id' => 2],
        ['n_asignacion' => 40, 'agente_id' => 5, 'periodo_id' => 2, 'estudio_id' => 2],
        ['n_asignacion' => 130, 'agente_id' => 6, 'periodo_id' => 2, 'estudio_id' => 2],
        ['n_asignacion' => 142, 'agente_id' => 7, 'periodo_id' => 2, 'estudio_id' => 2],
        ['n_asignacion' => 120, 'agente_id' => 9, 'periodo_id' => 2, 'estudio_id' => 2],
        ['n_asignacion' => 30, 'agente_id' => 10, 'periodo_id' => 2, 'estudio_id' => 2],
        ['n_asignacion' => 20, 'agente_id' => 1, 'periodo_id' => 3, 'estudio_id' => 2],
        ['n_asignacion' => 34, 'agente_id' => 2, 'periodo_id' => 3, 'estudio_id' => 2],
        ['n_asignacion' => 80, 'agente_id' => 3, 'periodo_id' => 3, 'estudio_id' => 2],
        ['n_asignacion' => 30, 'agente_id' => 4, 'periodo_id' => 3, 'estudio_id' => 2],
        ['n_asignacion' => 40, 'agente_id' => 5, 'periodo_id' => 3, 'estudio_id' => 2],
        ['n_asignacion' => 130, 'agente_id' => 6, 'periodo_id' => 3, 'estudio_id' => 2],
        ['n_asignacion' => 142, 'agente_id' => 7, 'periodo_id' => 3, 'estudio_id' => 2],
        ['n_asignacion' => 120, 'agente_id' => 9, 'periodo_id' => 3, 'estudio_id' => 2],
        ['n_asignacion' => 30, 'agente_id' => 10, 'periodo_id' => 3, 'estudio_id' => 2],
        ['n_asignacion' => 20, 'agente_id' => 1, 'periodo_id' => 4, 'estudio_id' => 2],
        ['n_asignacion' => 34, 'agente_id' => 2, 'periodo_id' => 4, 'estudio_id' => 2],
        ['n_asignacion' => 80, 'agente_id' => 3, 'periodo_id' => 4, 'estudio_id' => 2],
        ['n_asignacion' => 30, 'agente_id' => 4, 'periodo_id' => 4, 'estudio_id' => 2],
        ['n_asignacion' => 40, 'agente_id' => 5, 'periodo_id' => 4, 'estudio_id' => 2],
        ['n_asignacion' => 130, 'agente_id' => 6, 'periodo_id' => 4, 'estudio_id' => 2],
        ['n_asignacion' => 142, 'agente_id' => 7, 'periodo_id' => 4, 'estudio_id' => 2],
        ['n_asignacion' => 120, 'agente_id' => 9, 'periodo_id' => 4, 'estudio_id' => 2],
        ['n_asignacion' => 30, 'agente_id' => 10, 'periodo_id' => 4, 'estudio_id' => 2],
        ['n_asignacion' => 20, 'agente_id' => 1, 'periodo_id' => 5, 'estudio_id' => 2],
        ['n_asignacion' => 34, 'agente_id' => 2, 'periodo_id' => 5, 'estudio_id' => 2],
        ['n_asignacion' => 80, 'agente_id' => 3, 'periodo_id' => 5, 'estudio_id' => 2],
        ['n_asignacion' => 30, 'agente_id' => 4, 'periodo_id' => 5, 'estudio_id' => 2],
        ['n_asignacion' => 40, 'agente_id' => 5, 'periodo_id' => 5, 'estudio_id' => 2],
        ['n_asignacion' => 130, 'agente_id' => 6, 'periodo_id' => 5, 'estudio_id' => 2],
        ['n_asignacion' => 142, 'agente_id' => 7, 'periodo_id' => 5, 'estudio_id' => 2],
        ['n_asignacion' => 120, 'agente_id' => 9, 'periodo_id' => 5, 'estudio_id' => 2],
        ['n_asignacion' => 30, 'agente_id' => 10, 'periodo_id' => 5, 'estudio_id' => 2],
        ['n_asignacion' => 20, 'agente_id' => 1, 'periodo_id' => 6, 'estudio_id' => 2],
        ['n_asignacion' => 34, 'agente_id' => 2, 'periodo_id' => 6, 'estudio_id' => 2],
        ['n_asignacion' => 80, 'agente_id' => 3, 'periodo_id' => 6, 'estudio_id' => 2],
        ['n_asignacion' => 30, 'agente_id' => 4, 'periodo_id' => 6, 'estudio_id' => 2],
        ['n_asignacion' => 40, 'agente_id' => 5, 'periodo_id' => 6, 'estudio_id' => 2],
        ['n_asignacion' => 130, 'agente_id' => 6, 'periodo_id' => 6, 'estudio_id' => 2],
        ['n_asignacion' => 142, 'agente_id' => 7, 'periodo_id' => 6, 'estudio_id' => 2],
        ['n_asignacion' => 120, 'agente_id' => 9, 'periodo_id' => 6, 'estudio_id' => 2],
        ['n_asignacion' => 30, 'agente_id' => 10, 'periodo_id' => 6, 'estudio_id' => 2],
    ];

}
