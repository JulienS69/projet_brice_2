<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\User;
use Illuminate\Http\Request;

class CatégorieController extends Controller
{
    public function index()
    {
        $catégories = Categorie::all();
        return view('categorie', compact("catégories"));
    }

    public function destroy($id){
        $task = Categorie::findOrFail($id);
        $task->delete();
        return redirect("/categorie");
    }

    public function showCateg($id){
        $search= Categorie::find($id);
        return view("editCateg", compact("search"));
    }

    public function updateCateg($id, Request $request){
        Categorie::findOrFail($id)->update([
            'nom'=>$request->NomCateg
        ]);
        return redirect(route("dashboard"));

    }

    public function showArticleFromCateg($id, Request $request){
            $article = Article::all()->where('id', $id);
            return view('article', compact("article"));
    }
}
