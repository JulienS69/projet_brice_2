<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoteArticle extends Model
{
    use HasFactory;

    protected $table = 'notesArticle';

    protected $fillable = [
        'id',
        'libelle',
    ];
}
