<?php

namespace App\Http\Controllers\Exam;


use App\Models\Exam\Qcms;
use App\Models\Exam\Quizes;
use Illuminate\Http\Request;
use App\Models\Exam\QcmChoix;
use App\Http\Controllers\Controller;
use App\Models\Cour;
class QcmsController extends Controller
{
    public function createFormQcm($id)
    {
        $quizes= Quizes::get();
        $s=Cour::with('professeur')->where('id',$id)->get();
        return view('exam.quiz.create_qcm',compact('quizes'))->with('id',$id)->with('td',$s);
    }
    //
    public function QcmForm(Request $request) {
        // Form validation
        $request->validate( [
            'enonceq' => 'required',
            'nbrq' => 'required',
            'optionselect'=>'required',
            'quiz' => 'required'
         ]);
        $qcm=new Qcms();
        $qcm->enonce=$request->enonceq;
        $qcm->nbr_point=$request->nbrq;
        $qcm->id_quiz=$request->quiz;
        //$qcm->file=null;
        if($request->file){
            $filename=time().'.'.$request->file->extension();
           $path =$request->file->storeAs('fichiers',$filename, 'public');
           $qcm->file=$path;
        }
        $quiz=Quizes::whereId($request->quiz)->first();
        $quiz->points=$quiz->points+$request->nbrq;
        $quiz->save();
        $qcm->save();
        $choix=new QcmChoix();
        $choix->option1=$request->option1;
        $choix->option2=$request->option2;
        $choix->option3 = $request->option3;
        $choix->option4=$request->option4;
        //$choix->reponse=$request->input($request->optionselect);
        $choix->reponse=$request->optionselect;
        $choix->id_qcm = $qcm->id;
        $choix->save();
        //$answer=$request->choix;
        //$champ=$request->champ;
        // ajout des points dans champ quizes.points
        //$choix=$request->choix;
       /* foreach($champ as $ch){
        $choix_t=new QcmChoix();
            $choix_t->enonce=$ch;
            $choix_t->statut="yes";
            $choix_t->id_qcm = $qcm->id;
            $choix_t->save();
        }*/
        //choix 
          
        return back()->with('success', 'Question bien crée !');
       
}
}
