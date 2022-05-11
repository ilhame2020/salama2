<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'body',
        'id_prof',
        'file_path',
        'id_cours',
        
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class,'id_post');
    }
    public function professeur()
    {
        return $this->belongsTo(Professeur::class,'id_prof');
    }

}
