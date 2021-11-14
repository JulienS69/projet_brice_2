<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatégorieController extends Controller
{
    public function index()
    {
        $catégories = Categorie::all();
        return view('categorie', compact("catégories"));
    }

    public function destroy($id){
        $task = Categorie::findOrFail($id);

        $nomCatef = Categorie::addSelect('nom')
        ->where('id', $task)
            ->first();
        $task->delete();


        Log::create([
            "user_id" => Auth::user()->getAuthIdentifier(),
            "description" => " [DELETE] " .Auth::user()->nom. " a supprimer la categorie : ". $id,
        ]);

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
        Log::create([
            "user_id" => Auth::user()->getAuthIdentifier(),
            "description" =>" [UPDATE] ". Auth::user()->nom. " a modifié la categorie ". $request->id. " par : ".$request->NomCateg,
        ]);
        return redirect(route("dashboard"));
    }

    public function showArticleFromCateg(Request $request, $id){
            $article = Categorie::find($id)->articles;
//            dd($article);
//            $article = Article::all()->where('categorie_id', $id);

            return view('article', compact("article"));
    }
}
