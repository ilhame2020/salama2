<?php

namespace App\Http\Controllers\Exam;

use App\Models\Cour;
use Barryvdh\DomPDF\PDF;
use App\Models\Exam\Qcms;
use App\Models\Exam\Quizes;
use App\Models\Exam\Qr;
use Illuminate\Http\Request;
use App\Models\Exam\QcmChoix;
use App\Http\Controllers\Controller;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ListAll($id){
        $quizes= Quizes::with('qcms')->get();
        $quizesqr= Quizes::with('qrs')->get();
        $qcms= Qcms::with('choixs')->get();
        $s=Cour::with('professeur')->where('id',$id)->get();
        return view('exam.quiz.list')->with('id',$id)->with('td',$s)->with('quizes',$quizes)->with('qcms',$qcms)->with('quizesqr',$quizesqr);
    
    }
    
    public function index()
    {
        $site_settings = [
            'title' => 'hi',
            'description' => 'hallo'
        ];

        return view('exam.quiz.create', [
            'site_settings' => $site_settings
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createForm($id)
    {  $s=Cour::with('professeur')->where('id',$id)->get();
        return view('exam.quiz.create')->with('id',$id)->with('td',$s);
    }
 public function QuizForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'quiz_name' => 'required',
            'description' => 'required',
            'duration'=>'required',
            'date_de_passage'=>'required',
         ]);
        //  Store data in database
        
        Quizes::create($request->all());
        // 
        return back()->with('success', 'Ajoutez des questions au quiz ici .');
    }
    public function SuppQuiz($id){
        //dd($id);
        $quiz=Quizes::findOrFail($id);
        $quiz->delete();
        return back()->with('success', 'Quiz bien supprimé !');
    }
    public function SuppQcm($id){
        //dd($id);
        $qcm=Qcms::findOrFail($id);
        //diminuer points dans quiz
        $quiz=Quizes::whereId($qcm->id_quiz)->first();
        $quiz->points=$quiz->points-$qcm->nbr_point;
        $quiz->save();
        //supprimer 
        $qcm->delete();
        return back()->with('success', 'Question  bien supprimé !');
    }
    public function SuppQr($id){
        $qr=Qr::findOrFail($id);
        //diminuer points dans quiz
        $quiz=Quizes::whereId($qr->id_quiz)->first();
        $quiz->points=$quiz->points-$qr->nbr_point;
        $quiz->save();
        //supprimer 
        $qr->delete();
        return back()->with('success', 'Question  bien supprimé !');
    }
    public function Download($id){
        $quiz=Quizes::whereId($id)->first();
        $quizesqr= Quizes::with('qrs')->get();
        $qcms= Qcms::with('choixs')->get();
        view()->share( 'quizesqr',$quizesqr, 'qcms',$qcms);
        $pdf= \PDF ::loadView('exam.quiz.quizpdf',['quizesqr => $quizesqr' , 'qcms => $qcms' ])->setOptions(['defaultFont' => 'sans-serif']);;
        return $pdf->download($quiz->quiz_name . '.pdf');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
