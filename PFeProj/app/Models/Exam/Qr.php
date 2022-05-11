<?php

namespace App\Models\Exam;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qr extends Model
{
    use HasFactory;
    public $fillable = ['enonce','file', 'nbr_point','quiz'];
    public function quizes(){
        return $this->belongsTo(Quizes::class );
    }
}
