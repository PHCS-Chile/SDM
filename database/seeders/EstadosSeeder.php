<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

/**
 * Class EstadosSeeder
 * @package Database\Seeders
 * @version 2
 */
class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert($this->estados);
    }

    /**
     * @var array[] Estados actualmente utilizados
     */
    private $estados = [
        ['name' => 'En Blanco', 'visible' => 1, 'tipo' => 1],
        ['name' => 'Completa', 'visible' => 1, 'tipo' => 1],
        ['name' => 'Enviada a Revision', 'visible' => 1, 'tipo' => 1],
        ['name' => 'Para enviar EC', 'visible' => 1, 'tipo' => 1],
        ['name' => 'Completa y Revisada', 'visible' => 1, 'tipo' => 1],
        ['name' => 'Descartada', 'visible' => 1, 'tipo' => 1],
        ['name' => 'Con Grabacion', 'visible' => 1, 'tipo' => 2],
        ['name' => 'Sin Grabación', 'visible' => 1, 'tipo' => 2],
        ['name' => 'Grabación no Evaluable', 'visible' => 1, 'tipo' => 2],
    ];

}
