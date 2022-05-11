<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use Illuminate\Http\Request;
use App\Models\Professeur;
use App\Models\Admin\Section;

use Illuminate\Support\Facades\Auth;
class travailDController extends Controller
{
    public function newCours(Request $r,$id){
        $p =Professeur::find($id);
       
        $newCours = new Cour();
        $newCours->name =$r->name;
        $newCours->type ="td";
        $newCours->classe=$r->classe;
        $p=$p->cours()->save($newCours);

        $newCours->sections()->attach($r->sections);
        return redirect()->back();   
       
    }
  
}
