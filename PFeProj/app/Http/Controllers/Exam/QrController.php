<?php

namespace App\Http\Controllers\Exam;

use App\Models\c;
use App\Models\Exam\Quizes;
use App\Models\Exam\Qr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Cour;
class QrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createFormQr($id)
    {
        $quizes= Quizes::get();
        $s=Cour::with('professeur')->where('id',$id)->get();
        return view('exam.quiz.create_qr',compact('quizes'))->with('id',$id)->with('td',$s);
    }
    public function createQr(Request $request) {
        // Form validation
        $this->validate($request, [
            'enonceq' => 'required',
            'nbr_point'=>'required',
            'quiz'=>'required',
        ]);
        $qr=new Qr();
        $qr->enonce=$request->enonceq;
        $qr->nbr_point=$request->nbr_point;
        
        $qr->id_quiz=$request->quiz;
        if($request->file){
            $filename=time() .'.'. $request->file->extension();
            //$name=Storage::disk('local')->put('fichiers',$request->file('file'));
           $path =$request->file->storeAs('fichiers',$filename, 'public');
           $qr->file=$path;
        }
        $qr->save();
        $quiz=Quizes::whereId($request->quiz)->first();
        $quiz->points=$quiz->points+$request->nbr_point;
        $quiz->save();
        // 
        return back()->with('success', 'Question ajoutée avec succés ! ');
        }
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    
}
