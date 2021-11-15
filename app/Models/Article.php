<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use NotesArticle;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;
    protected $table = 'articles';
    protected $guarded = [];

    //Relation Belongs to Many, car une categorie peut avoir plusieurs articles et un article peut avoir plusieurs catégories.
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Categorie::class, "categorie_article");
    }
    //Relation Belongs to entre User et article
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //Relation Belongs to entre notes et article
    public function notes(): HasMany
    {
        return $this->hasMany(NotesArticle::class, "id");
    }
}
