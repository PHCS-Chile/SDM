<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class AsignacionsSeeder
 * @package Database\Seeders
 * @version 4
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
    ];

}
