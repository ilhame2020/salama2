<?php

namespace App\Models\Admin;
use App\Models\Cour;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    public $fillable = ['nom_section', 'id_filiere','annee_universitaire'];
   
    public function groupes(){
        return $this->hasMany(Groupe::class,'id_section');
    }
    public function Etudiants(){
        return $this->hasMany(Etudiant::class,'id_section');
    }
     
    public function cours(){
        return $this->belongsToMany(Cour::class,'cour_section', 'id_section', 'id_cours');
    }

    public function filiere(){
        return $this->belongsTo(Filiere::class,'id_filiere');
    }
    
  

}
