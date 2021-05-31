<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

/**
 * Class PeriodosSeeder
 * @package Database\Seeders
 * @version 1
 */
class PeriodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodos')->insert($this->periodos);
    }

    /**
     * @var string[][] Periodos actualmente existentes.
     */
    private $periodos = [
        ['name' => "Febrero-2021", 'periodo_id' => '2102', 'periodo_fecha' => '2021-02-01', 'visible' => 1, 'status' => 1, 'web' => 1],
        ['name' => "Marzo-2021", 'periodo_id' => '2103', 'periodo_fecha' => '2021-03-01', 'visible' => 1, 'status' => 1, 'web' => 1],
        ['name' => "Abril-2021", 'periodo_id' => '2104', 'periodo_fecha' => '2021-04-01', 'visible' => 1, 'status' => 1, 'web' => 1],
        ['name' => "Mayo-2021", 'periodo_id' => '2105', 'periodo_fecha' => '2021-05-01', 'visible' => 1, 'status' => 1, 'web' => 1],
    ];

}
