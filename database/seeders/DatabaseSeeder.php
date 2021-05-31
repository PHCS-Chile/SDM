<?php

namespace Database\Seeders;

use App\Models\Evaluacion;
use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 * @package Database\Seeders
 * @version 1
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PeriodosSeeder::class,
            EstadosSeeder::class,
            UsersSeeder::class,
            EstudiosSeeder::class,
            ServiciosSeeder::class,
            AgentesSeeder::class,
            AsignacionsSeeder::class,
            PautasSeeder::class,
            AtributosSeeder::class,
        ]);
        Evaluacion::factory()->count(100)->create();
        $this->call([
            RespuestasSeeder::class,
            EscalasSeeder::class,
        ]);
    }
}
