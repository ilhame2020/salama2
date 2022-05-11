<?php

namespace App\Models\Admin;
use  App\Models\filiere_professeurs;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{

    use HasFactory;
    public $fillable = ['name','description','departement'];
    public function departements(){
        return $this->belongsTo(Departement::class);
    }
    public function sections(){
        return $this->hasMany(Section::class,'id_filiere');
    }
    public function groupes(){
        return $this->hasMany(Groupe::class,'id_filiere');
    }
    public function professeurs()
    {
        return $this->belongsToMany(Filiere::class,'filiere_professeurs','id_prof','id_filiere');
    }

}
