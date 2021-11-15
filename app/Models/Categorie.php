<?php

namespace App\Models;

use Articles;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = true;
    protected $table = 'categories';
    protected $guarded = [];


    // Fonction permettant de set le format de la date.
    public function setDateFormat($format)
    {
        $this->attributes['created_at'] = Carbon::createFromFormat('m/d/Y', $format)->format('d-m-Y');
    }

    //Relation Belongs to Many, car une categorie peut avoir plusieurs articles et un article peut avoir plusieurs catégories.
    public function articles():BelongsToMany
    {
        return $this->belongsToMany(Article::class, "categorie_article");
    }
}
