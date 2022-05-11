<?php

namespace App\Http\Controllers;
use App\Models\Cour;
use Illuminate\Http\Request;
use App\Models\devoir;
use App\Models\Professeur;
use App\Models\Admin\Etudiant;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DevoirController extends Controller
{
    
    public function devoir($idc){
        $s=Cour::with('professeur')->where('id',$idc)->get();
        $all=devoir::where('id_cours',$idc)->get();
        return view("prof.devoir.dev")->with('td',$s)->with('id_cours',$idc)->with('dev',$all);
    }
  
    public function voir($id){
        $id_cours=devoir::where('id',$id)->value('id_cours');

        $d=devoir::with('cour')->with('etudiants')->where('id',$id)->get();
        return view('prof.devoir.dev')->with('dev',$d)->with('id_cours',$id_cours)->with('idd',$id);
    }
    public function create($id=0,Request $r){
    $et=Cour::with('sections')->where('id',$id)->get()->first();
    $devoir =new devoir();

    $devoir->titre = $r->titre;
    $devoir->contenu = $r->contenu;


    if ($r->hasFile('file')) {

        $r->validate([
            'image' => 'mimes:jpeg,bmp,png',

        ]);

    $r->file->store('fichiers', 'public');
    $devoir->file_path = $r->file->hashName();
        }
    $devoir->date_limite=$r->date_limite;    
    $devoir->id_prof=Auth::guard('webprof')->id();
    $devoir->id_cours = $id;
    $devoir->save();
    foreach($et->sections as $a){
        foreach($a->etudiants as $p){
    $devoir->etudiants()->attach($p->id,['file_path' => 2],['etat' => 0]);}
    }
   
    return back()->with('success', 'Devoir bien crée !');  
    }
    
    public function modifier($id=0,Request $r){
        $devoir =devoir::find($id);
    
        $devoir->titre = $r->titre;
        $devoir->contenu = $r->contenu;
    
        if ($r->hasFile('file')) {
              
             
            $r->file->store('fichiers', 'public');
            $path = $r->file->hashName();
            $devoir->file_path = $path;
        }
        $devoir->date_limite=$r->date_limite;    
        $devoir->id_prof=Auth::guard('webprof')->id();
        $devoir->id_cours = $id;
        $devoir->save();
     
        return back()->with('success', 'Devoir bien modifié !');  
      
    }
    public function supprimer($id){
       
        $id_cours=devoir::where('id',$id)->value('id_cours');

        $d=devoir::with('cour')->with('etudiants')->where('id',$id)->get();
        $devoir =devoir::find($id);
        $devoir->delete(); 
        return redirect()->route('prof.cours.devoir.create', ['id' => $id_cours])->with('success', 'Devoir supprimé avec succés !');
    }
    public function remise($id=0,Request $r){
        $devoir =devoir::find($id);
        $date = Carbon::now();
       if ($r->hasFile('file')) {
            $r->file->store('fichiers', 'public');
            $path = $r->file->hashName();
        
        }
        $devoir->etudiants()->detach(Auth::guard('web')->id());

        if($devoir->date_limite>$date){
            $devoir->etudiants()->attach(Auth::guard('web')->id(), ['etat' =>1,'file_path' =>$path]);
        
        
          }else{
            $devoir->etudiants()->attach(Auth::guard('web')->id(), ['file_path' =>$path, 'etat' =>2]);
        }
        $devoir->save();
      
        $s=Cour::with('professeur')->where('id',$id)->get();
        $d=devoir::with('cour')->where('id',$id)->get()->first();
      
     
        return redirect()->route('user.cours', ['id' => $d->id_cours])->with('success', 'Remise réussie !');

    }
}