<?php

namespace App\Http\Controllers;

use App\Models\Catégorie;
use Illuminate\Http\Request;

class AddCategorieController
{

    public function index()
    {
        return view('addCateg');
    }

    public function store(Request $request){
        Catégorie::create(['nom'=>$request->nom]);
        return redirect('/categorie');
    }

}
