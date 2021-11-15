<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddCategorieController
{
    public function index()
    {
        $id = Auth::user()->id;
        return view('addCateg');
    }

    public function store(Request $request)
    {
//      Permet de récuperer le nom de la catégorie
        $test = Categorie::addSelect('nom')->get();
//      Permet d'afficher un message d'erreur en cas de validation avec l'input vide.
        if ($request->input('nom') == '') {
            return back()->with('fail', 'Veuillez saisir du texte !');
        }
//      Voir pour ajouter une exeption en cas de doublon pour la création d'une catégorie.
        else if ($request->input('nom') == $test){
            return back()->with('fail', 'Cette catégorie existe déjà !');
        }
//      Création de la catégorie.
        else {
            Categorie::create(['nom' => $request->nom, "user_id" => Auth::user()->id]);
            Log::create([
                "user_id" => Auth::user()->getAuthIdentifier(),
                "description" => " [CREATE] " .Auth::user()->nom. " a cree un article s'intitulant : ". $request->nom,
            ]);
        }
//      Redirection vers la page des catégories.
        return redirect('/categorie');
    }
}
