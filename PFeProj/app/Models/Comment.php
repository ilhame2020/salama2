<?php

namespace App\Models;
use App\Models\Admin\Etudiant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_post',
        'id_prof',
        'id_etud',
        'body',
      
    ];
    public function user()
    {
        return $this->belongsTo(Etudiant::class,'id_etud');
    }
    public function professeur()
    {
        return $this->belongsTo(Professeur::class,'id_prof');
    }
}
