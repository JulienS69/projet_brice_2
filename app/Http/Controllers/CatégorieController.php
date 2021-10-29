<?php

namespace App\Http\Controllers;

use App\Models\Catégorie;
use App\Models\User;
use Illuminate\Http\Request;

class CatégorieController extends Controller
{
    public function index()
    {
        $catégories = Catégorie::all();
        return view('categorie', compact("catégories"));
    }

    public function destroy($id){
        $task = Catégorie::findOrFail($id);
        $task->delete();
        return redirect("/categorie");
    }

    public function showCateg($id){
        $search= Catégorie::find($id);
        return view("editCateg", compact("search"));
    }

    public function updateCateg($id, Request $request){
        Catégorie::findOrFail($id)->update([
            'nom'=>$request->NomCateg
        ]);
        return redirect(route("dashboard"));

    }
}
