<?php

namespace App\Http\Controllers\Exam;

use App\Models\Exam\Qcms;
use App\Models\Exam\Quizes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Exam\Qr;
use App\Models\Exam\reponse_qr;

class PasserQuizController extends Controller
{
    public function passerForm(){
        $quiz=Quizes::whereId('64')->with('qcms')->get();
       
        $quizesqr= Quizes::whereId('64')->with('qrs')->get();
        $qcms= Qcms::with('choix')->get();
        return view('etudiant.passage',compact('quiz','quizesqr','qcms'));
    }
    public function StoreReponse(Request $request){
        $t=0;
        // les qrs 
        $reponse=collect($request['reponse']);
        foreach($reponse->keys() as $k){
            $rq=new reponse_qr();
            $rq->id_etudiant=2;
            $rq->id_qr=$k;
            $rq->reponse=$reponse[$k];
            if($reponse[$k]==null) { $rq->note=0; $t+=$rq->note; }
            $rq->save();
        }
        
        //$qid=$request['questions_id'];
        for($i=1; $i<=$request->index;$i++){ //boucle sur la requete
                  
             //$exam=new Exams;
               $question=Qcms::where('id',$request['questions_id'.$i])->get()->first();
                dd($question->enonce);
                /*if($question->answer==$data['ans'.$i])
                {
                    $result[$data['questions_id'.$i]]='Yes';
                    $exam->is_ans="yes";
                    $yes++;
                }else{
                    $result[$data['questions_id'.$i]]='No';
                    $exam->is_ans="No";
                    $no++;
                }
                 $exam->user_id= $userId;
                 $exam->quizes_id= $question->quizes_id;
                $exam->questions_id=$data['questions_id'.$i];
                $exam->ans=$data['ans'.$i];
                $exam->save();*/
              
            
        }

        $o1=collect($request['option1']);
        $o2=collect($request['option2']);
        $o3=collect($request['option3']);
        $o4=collect($request['option4']);
        foreach($o2->keys() as $k){
            //$rqcm=new reponse_qcm();
            //$rqcm->id_etudiant=2;
            //$rqcm->id_qr=$k;
            
            dd($o2[$k]);
        }

    }
    /*public function examPost(Request $request)
    {
     // $userId=Sentinel::getUser()->id; //id de letudiant 
      $date=date('Y-m-d'); //date de termination de quiz 
        $yes=0;
        $no=0;
       $data=$request->all(); //recupere tous le contenu de la requete 
      
       for($i=1; $i<=$request->index;$i++){ //boucle sur la requete
           if(isset($data['questions_id'.$i])){       
            $exam=new Exams;
               $question=Questions::where('id',$data['questions_id'.$i])->get()->first();
               if($question->answer==$data['ans'.$i])
               {
                   $result[$data['questions_id'.$i]]='Yes';
                   $exam->is_ans="yes";
                   $yes++;
               }else{
                   $result[$data['questions_id'.$i]]='No';
                   $exam->is_ans="No";
                   $no++;
               }
          $exam->user_id= $userId;
            $exam->quizes_id= $question->quizes_id;
               $exam->questions_id=$data['questions_id'.$i];
               $exam->ans=$data['ans'.$i];

               $exam->save();

           }
           
       }

       if($res=Results::where('user_id',$userId)->where('quizes_id',$request->quizes_id)->first()){

       }else{
        $res=new Results;
       }
       $res->user_id= $userId;
       $res->quizes_id= $request->quizes_id;
       $res->date= $date;
       $res->yes_ans=$yes;
       $res->no_ans=$no;
       
       $res->save();

       return redirect('/MyExamResult')->with('success','Thaks For Join This Exam');

    }*/

}
