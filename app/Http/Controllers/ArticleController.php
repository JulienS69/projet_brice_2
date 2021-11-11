<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
//        Permet de récuperer certaines informations des articles + jointure permettant de récupérer les noms des catégories associés aux articles.
        $article = Article::addSelect(['articles.id', 'titre', 'categorie_id', 'articles.created_at', 'categories.nom'])
        ->join('categories', 'categories.id', '=', 'articles.categorie_id')
        ->get();
        return view('article', compact("article"));
    }

    public function show($id)
    {

        $article = Article::find($id);

//        $id = Article::addSelect('id')
//            ->where('id', $idArticle)
//            ->get();

        return view('showArticle', compact("article"));
    }
}

