<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Etudiant;
class devoir extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'contenu',
        'date_limite',
        'titre',
        'id_prof',
        'file_path',
        'id_cours',
        
    ];
    public function cour(){
        return $this->belongsTo(Cour::class,'id_cours');
    }
    public function etudiants(){
        return $this->belongsToMany(Etudiant::class,'devoir_etudiants','id_devoir','id_etudiant')->withPivot('file_path')->withPivot('etat')->withTimestamps();;
    }
}
