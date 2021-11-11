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

        DB::table('users')->insert(
            [
                'nom' => 'visiteur',
                'prenom' => 'visiteur',
                'tel' => '0658555828',
                'email' => 'visiteur@gmail.com',
                'password' => Hash::make('visiteur'),

            ]
        );
        DB::table('categories')->insert(
            [
                'nom' => 'Jeux-Video',
                'user_id' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                'nom' => 'Aventure',
                'user_id' => 1,
            ]
        );

        DB::table('articles')->insert(
            [
                'titre' => 'LeBron james en sueur',
                'image_article' => 'https://lasueur.com/wp-content/uploads/2018/10/LeBron-James-Lakers-Wolves.png',
                'libelle' => 'test',
                'user_id' => 1,
                'categorie_id' => 1,
            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'Un Panda sauvage',
                'image_article' => 'https://images.sudouest.fr/2015/03/01/57eb8dc766a4bd7760bde27e/golden/1-864-pandas-geants.jpg',
                'libelle' => 'sddsddddd',
                'user_id' => 1,
                'categorie_id' => 2,

            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'teedsfssdfdsfsde',
                'image_article' => 'https://images.sudouest.fr/2015/03/01/57eb8dc766a4bd7760bde27e/golden/1-864-pandas-geants.jpg',
                'libelle' => 'sddsddddd',
                'user_id' => 1,
                'categorie_id' => 2,

            ]
        );
    }
}
