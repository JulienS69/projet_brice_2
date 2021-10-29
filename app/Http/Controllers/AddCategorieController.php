<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class AddCategorieController
{

    public function index()
    {
        return view('addCateg');
    }

    public function store(Request $request){
        Categorie::create(['nom'=>$request->nom]);
        return redirect('/categorie');
    }

}
