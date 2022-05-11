<?php

namespace App\Models\Exam;




use App\Models\Exam\Qr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizes extends Model
{
    use HasFactory;
    public $fillable = ['quiz_name', 'description','duration', 'points','date_de_passage', 'statut',];
    public function qcms(){
        return $this->hasMany(Qcms::class, 'id_quiz' ,'id' );
    }public function qrs(){
        return $this->hasMany(Qr::class, 'id_quiz' ,'id' );
    }
    /*public function qrs(){
        return $this->hasMany(Qr::class);
    }*/
}
