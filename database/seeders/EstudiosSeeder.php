<?php

namespace Database\Seeders;

use App\Models\Estudio;
use DB;
use Illuminate\Database\Seeder;

/**
 * Class EstudiosSeeder
 * @package Database\Seeders
 * @version 1 (21-06-02)
 */
class EstudiosSeeder extends Seeder
{
    /**
     * Ejecuta el seeder
     *
     * @return void
     */
    public function run()
    {
        Estudio::factory()->count(1)->create();
    }

}
