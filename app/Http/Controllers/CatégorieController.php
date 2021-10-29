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

    public function edit($id){
        return view("editCateg");
    }
}
