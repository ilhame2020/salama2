<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cour;

class Groupe extends Model
{
    use HasFactory;
    public $fillable = ['nom_groupe', 'id_section','annee_universitaire'];

    // public function section(){
    //     return $this->belongsTo(Section::class,'id_section');
    // }
    // public function filiere(){
    //     return $this->belongsTo(Filiere::class,'id_filiere');
    // }
    public function section(){
        return $this->belongsTo(Section::class,'id_section');
    }
     
    public function cours(){
        return $this->hasMany(Cour::class);
    }
}
