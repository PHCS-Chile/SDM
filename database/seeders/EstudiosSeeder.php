<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

/**
 * Class EstudiosSeeder
 * @package Database\Seeders
 * @version 1
 */
class EstudiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estudios')->insert($this->estudios);
    }

    /**
     * @var string[][] Estudios actualmente existentes. (Usar Factory?)
     */
    private $estudios = [
        ['name' => 'EPCS Call Center Canales Digitales'],
    ];

}
