<?php

namespace App\Models\Exam;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QcmChoix extends Model
{
    use HasFactory;
    public $fillable = ['option1','option2','option3','option4','reponse', 'id_qcm'];
    public function qcms(){
        return $this->belongsTo(Qcms::class  );
    }
}
