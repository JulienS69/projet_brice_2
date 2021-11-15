<?php

namespace App\Http\Controllers;
use App\Models\Log;

class LogsController extends Controller
{
    public function index()
    {
        // Nous avons fait en sorte d'utiliser une jointure de la sorte pour savoir comment elles fonctionnait sur Laravel.
        $logs = Log::addSelect(['user_id', 'users.nom', 'users.prenom', 'logs.created_at', 'description'])
            ->join('users', 'users.id', '=', 'logs.user_id')
            ->get();
        return view('logs', compact("logs"));
    }
}
