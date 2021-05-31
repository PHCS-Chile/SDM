<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class ServiciosSeeder
 * @package Database\Seeders
 * @version 1
 */
class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert($this->servicios);
    }

    /**
     * @var string[][] Servicios actualmente existentes. (Usar Factory?)
     */
    private $servicios = [
        ['name' => 'SCCP', 'status' => 1, 'estudio_id' => 1],
        ['name' => 'Konecta PE', 'status' => 1, 'estudio_id' => 1],
    ];

}
