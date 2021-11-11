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

        $logs = Log::all();
        return view('logs', compact("logs"));
    }
}
