<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class PautasSeeder
 * @package Database\Seeders
 * @version 1
 */
class PautasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pautas')->insert($this->pautas);
    }

    /**
     * @var string[][] Pautas actualmente existentes. (Usar Factory?)
     */
    private $pautas = [
        ['name' => 'Whatsapp', 'descripcion' => 'pauta de whatsapp'],
    ];

}
