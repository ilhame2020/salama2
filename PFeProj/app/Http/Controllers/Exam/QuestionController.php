<?php

namespace App\Http\Controllers\Exam;



use App\Models\Quizes;


use App\Models\Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ListAll(){
        $questions= Questions::get();
       // dd($quizes);
        return view("exam.quiz.list",compact('questions'));
    }
    public function createFormQ()
    {
        $quizes= Quizes::get();
      return view('Exam.Quiz.createquestion',compact('quizes'));
    }
    public function QuestionForm(Request $request) {
        // Form validation
        //dd($request->all());
       /* $request->validate( [
            'enonce' => 'required',
            'nbr_point' => 'required',
            'type'=>'required',
            'file'=>'required',
            'champ' => 'required',
            'choix' => 'required',
            'quiz' => 'required'
         ]);
         $query =DB::table('questions')->insert([
            'enonce' ->$request->input('enonce'),
            'nbr_point' ->$request->input('nbr_point'),
            'type'->$request->input('type'),
            'file'->$request->input('file'),
            'champ' ->implode(',', $request->input('champ')),
            'choix' ->implode(',' ,  $request->input('choix')),
            'quiz' ->implode(',' ,$request->input('quiz'))
         ]);
         if($query){
            return view("exam.quiz.list")->with('success', 'Ajoutez des questions au quiz ici .');
   
         }*/
        //  Store data in database
        Questions::create([
            'enonce' => $request->enonce,
            'nbr_point' => $request->nbr_point,
            'type'=>$request->type,
            'file'=>$request->file,
            'champ' => $request->champ,
            'choix' =>$request->choix,
            'quiz' =>$request->quiz,
        ]);
        return view("exam.quiz.list")->with('success', 'Ajoutez des questions au quiz ici .');
   
        // 
        }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

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
