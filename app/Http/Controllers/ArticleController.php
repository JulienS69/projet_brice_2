<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Catégorie;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::addSelect('id', 'titre')
            ->get();
        return view('article', compact("article"));
    }

    public function show(Request $request)
    {
        $idArticle = $request->input('idArticle');
        $showArticle = Article::addSelect('titre', 'date', 'libelle', 'image_article')
//            ->where('id', $idArticle)
            ->get();

//        $id = Article::addSelect('id')
//            ->where('id', $idArticle)
//            ->get();

        return view('showArticle', compact("showArticle"));
    }
}

