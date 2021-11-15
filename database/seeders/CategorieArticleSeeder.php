<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategorieArticleSeeder extends Seeder
{
    /**
     * Ce seeder permet d'affecter aléatoirement des catégories aux articles envoyés dans la bdd.
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
