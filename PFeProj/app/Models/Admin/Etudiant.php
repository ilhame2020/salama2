<?php

namespace App\Models\Admin;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\CanResetPassword;
use App\Models\Cour;
use App\Models\devoir;
class Etudiant extends Authenticatable
{
    use HasFactory;
    public $fillable = ['cne','nom_etudiant','prenom_etudiant','date_naiss_etud','adresse_etud','date_inscription_etud', 'id_filiere','id_section','id_groupe','email_etud'];
    // public function cours(){
    //     return $this->belongsToMany(Cour::class,'cour_user','id_etud','id_cours');
    // }
    public function section(){
        return $this->belongsTo(Section::class,'id_section');
    }
    
    public function groupe(){
        return $this->belongsTo(Groupe::class,'id_groupe');
    }
    public function devoirs(){
        return $this->belongsToMany(devoir::class,'devoir_etudiants','id_etudiant','id_devoir')->withPivot('file_path')->withPivot('etat')->withTimestamps();;
    }
}
