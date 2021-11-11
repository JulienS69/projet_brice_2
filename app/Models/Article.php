<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'articles';
    protected $guarded = [];

    protected $fillable = [
        'id',
        'titre',
        'libelle',
        'categorie_id',
        'created_at',
    ];


}
