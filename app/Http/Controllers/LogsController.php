<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function index()
    {

        $logs = Log::addSelect(['user_id', 'users.nom', 'users.prenom', 'logs.created_at', 'description'])
            ->join('users', 'users.id', '=', 'logs.user_id')
            ->get();
        return view('logs', compact("logs"));
    }
}
