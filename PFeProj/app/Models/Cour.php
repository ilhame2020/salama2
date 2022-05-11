<?php

namespace App\Models;
use App\Models\Admin\Section;
use App\Models\Admin\Groupe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Professeur;
use App\Models\Etudiant;
class cour extends Model
{   protected $fillable = [
    'id',
    'name',

    'id_groupe',
    'id_prof',
    'classe',
    'nb_tps',
];
    use HasFactory;
    public function professeur(){
        return $this->belongsTo(Professeur::class,'id_prof');
    }//modifier la migration
    public function sections(){
        return $this->belongsToMany(Section::class, 'cour_section', 'id_cours', 'id_section');
    }
    // public function section(){
    //     return $this->belongsTo(Section::class,'id_section');
    // }
    public function groupe(){
        return $this->belongsTo(Groupe::class,'id_groupe');
    }
    // public function users(){
    //     return $this->belongsToMany(Etudiant::class,'cour_user','id_cours');
    // }
}
