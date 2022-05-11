<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\CanResetPassword;
use App\Models\Cours;
use App\Models\Comment;
use App\Models\Admin\Filiere;
class Professeur extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
 
    public $fillable = [
        'name_p',
        'email',
        'password',
    ];
    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function cours(){
        return $this->hasMany(Cour::class,'id_prof');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class,'id_post');
    }
    public function filieres()
    {
        return $this->belongsToMany(Filiere::class,'filiere_professeurs','id_prof','id_filiere');
    }
}
