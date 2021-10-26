<?php

namespace App\Http\Controllers;

use App\Models\Catégorie;
use App\Models\User;
use Illuminate\Http\Request;

class CatégorieController extends Controller
{
    public function index()
    {
         $catégorie = Catégorie::addSelect(['nom'])
            ->get();
        return view('categorie', compact("catégorie"));
    }
}
