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
                'libelle' => 'test',
                'user_id' => 1,
            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'Un Panda sauvage',
                'libelle' => 'sddsddddd',
                'user_id' => 1,
            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'teedsfssdfdsfsde',
                'libelle' => 'sddsddddd',
                'user_id' => 1,

            ]
        );
        DB::table('commentaires')->insert(
            [
                'contenu' => 'Un article pourri',
                'user_id' => 1,
                'article_id'=>3,
            ]
        );
        DB::table('notesarticle')->insert(
            [
                'note' => 9,
                'article_id'=>1,
                'user_id' => 1,
            ]
        );

        $this->call([CategorieArticleSeeder::class]);

    }
}
