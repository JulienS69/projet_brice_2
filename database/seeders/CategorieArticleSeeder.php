<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategorieArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(Article::all() as $article){
            Categorie::find(rand(1,Categorie::all()->max("id")))->articles()->attach($article->id);
        }
    }
}
