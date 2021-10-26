<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'nom' => 'admin',
                'prenom' => 'admin1',
                'tel' => '0658595828',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'admin' => true,

            ]
        );
        DB::table('categories')->insert(
            [
                'nom' => 'Jeux-Video',
            ]
        );
    }
}
