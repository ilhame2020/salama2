<?php

namespace App\Models\Exam;

use App\Models\Exam\QcmChoix;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qcms extends Model
{
    use HasFactory;
    public $fillable = ['enonce','file', 'nbr_point','quiz'];
    public function quizes(){
        return $this->belongsTo(Quizes::class );
    }
    public function choixs(){
        return $this->hasMany(QcmChoix::class,'id_qcm');
    }
}
