<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'categories';
    protected $guarded = [];


    public function articles(){
        return $this->hasMany(Article::class);
    }

    public function setDateFormat($format)
    {
        $this->attributes['created_at'] = Carbon::createFromFormat('m/d/Y', $format)->format('d-m-Y');
    }
}
