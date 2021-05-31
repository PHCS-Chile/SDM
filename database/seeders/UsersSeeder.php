<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;

/**
 * Class UsersSeeder
 * @package Database\Seeders
 * @version 1
 */
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Usuarios actualmente existentes. (Usar datos dummy?)
         */
        $users = [
            ['name' => 'Jose Puebla', 'email' => 'jp@asd.com', 'password' => Hash::make('patata123'), 'perfil' => 1],
            ['name' => 'Ronald Guzman', 'email' => 'rg@asd.com', 'password' => Hash::make('patata123'), 'perfil' => 1],
            ['name' => 'Jose Pablo Diaz', 'email' => 'jpd@asd.com', 'password' => Hash::make('patata123'), 'perfil' => 1],
            ['name' => 'Karen Farias', 'email' => 'kf@asd.com', 'password' => Hash::make('patata123'), 'perfil' => 2],
            ['name' => 'Renato Espinoza', 'email' => 're@asd.com', 'password' => Hash::make('patata123'), 'perfil' => 2],
            ['name' => 'Carla Parra', 'email' => 'cp@asd.com', 'password' => Hash::make('patata123'), 'perfil' => 1],
        ];

        DB::table('users')->insert($users);
    }

}
