<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatégorieController extends Controller
{
    public function index()
    {
        // Permet de récuperer les attributs de la table Catégorie afin de pouvoir les utiliser dans la vue.
        $catégories = Categorie::all();

        // Le compact permet l'utilisation de cette variable dans notre vue.
        return view('categorie', compact("catégories"));
    }

    public function destroy($id){
        // Stockage dans une variable l'id de la catégorie récupérer dans l'url
        $task = Categorie::findOrFail($id);

        // Permet de supprimer les articles lié à la catégorie supprimé
        foreach ($task->articles as $article){
            $article->delete();
        }

        Categorie::addSelect('nom')
        ->where('id', $task)
            ->first();
        $task->delete();

        // Log::create permet la création d'un log juste après le delete en récupérant le nom de l'utilisateur et l'id de la catégorie qui à été supprimée.
        Log::create([
            "user_id" => Auth::user()->getAuthIdentifier(),
            "description" => " [DELETE] " .Auth::user()->nom. " a supprimer la categorie portant l'id : ". $id,
        ]);

        return redirect("/categorie");
    }

    public function showCateg($id){
        $search= Categorie::find($id);
        return view("editCateg", compact("search"));
    }

    public function updateCateg($id, Request $request){
        //->update Permet de faire l'update de la catégorie portant l'id récupérer dans l'url.
        // On remplace son nom par le nom entrée dans l'input dans la vue.
        Categorie::findOrFail($id)->update([
            'nom'=>$request->NomCateg
        ]);

        // Création d'un log juste après l'update du nom de la catégorie en récupérant le nom de l'utilisateur et l'id de la catégorie qui à été update ainsi que son nom.
        Log::create([
            "user_id" => Auth::user()->getAuthIdentifier(),
            "description" =>" [UPDATE] ". Auth::user()->nom. " a modifié la categorie ". $request->id. " par : ".$request->NomCateg,
        ]);
        return redirect(route("dashboard"));
    }

    public function showArticleFromCateg(Request $request, $id){
        // La relation belongsToMany de article vers catégorie va nous permettre de pouvoir accéder aux attributs de la table article.
        // Cela permet aussi de gagner du temps, cela nous evite de faire des jointures, elles se font toutes seules grâce aux relations.
        // Cette fonction nous permet d'afficher tous les articles liées à une catégorie.
            $article = Categorie::find($id)->articles;
            return view('article', compact("article"));
    }
}
