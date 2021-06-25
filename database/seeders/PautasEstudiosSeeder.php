<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class PautasEstudiosSeeder
 * @package Database\Seeders
 * @version 1 (25/06/2021)
 */
class PautasEstudiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pautas')->insert($this->pautas);
        DB::table('estudios')->insert($this->estudios);
    }

    /**
     * @var string[][] Pautas actualmente existentes. (Usar Factory?)
     */
    private $pautas = [
        ['name' => 'Whatsapp', 'descripcion' => 'pauta de whatsapp'],
        ['name' => 'Voz', 'descripcion' => 'pauta de voz'],
    ];

    /**
     * @var string[][] Estudios actualmente existentes. (Usar Factory?)
     */
    private $estudios = [
        ['name' => 'EPCS Call Center Canales Digitales', 'pauta_id' => 1],
        ['name' => 'Voz', 'pauta_id' => 2],
    ];

}
