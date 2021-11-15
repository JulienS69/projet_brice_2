<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NoteArticle extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = true;
    //Nom de table en bdds
    protected $table = 'notesArticle';

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
