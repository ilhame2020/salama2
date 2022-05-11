<?php

namespace App\Http\Controllers;
use App\Models\Cour;

use App\Models\Professeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Groupe;
class TravailPController extends Controller
{
    //
    public function newT_pratique(Request $r,$id){
        $p =Professeur::find($id);
   
        $newCours = new Cour();
        $newCours->name =$r->name;
        $newCours->type ="tp";
        $newCours->classe=$r->classe;
        $newCours->id_groupe=$r->groupe;
        $p=$p->cours()->save($newCours);
        return redirect()->back();   
    }
}
