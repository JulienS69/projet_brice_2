<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class NoteArticle extends Model
{
    use HasFactory,SoftDeletes;
    public $timestamps = true;
    //Nom de table en bdds
    protected $table = 'notesArticle';
    protected $guarded = [];


    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, "notes");
    }
    protected $fillable = [
        //Champs de bdd
        'id',
        'note',
        'article_id',
        'user_id'
    ];
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
