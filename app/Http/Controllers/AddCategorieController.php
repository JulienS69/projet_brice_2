<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Exception;

class AddCategorieController
{

    public function index()
    {
        $id = Auth::user()->id;
        return view('addCateg');
    }

    public function store(Request $request)
    {
        $test = Categorie::addSelect('nom')->get();
//      Permet d'afficher un message d'erreur en cas de validation avec l'input vide.
        if ($request->input('nom') == '') {
            return back()->with('fail', 'Veuillez saisir du texte !');
        }
//      Voir pour ajouter une exeption en cas de doublon pour la création d'une catégorie.
        else if ($request->input('nom') == $test){
            return back()->with('fail', 'Cette catégorie existe déjà !');
        }
//       Création de la catégorie.
        else {
            Categorie::create(['nom' => $request->nom, "user_id" => Auth::user()->id]);
        }
//       Redirection vers la page des catégories.
        return redirect('/categorie');
    }
}
