<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Admin\Etudiant;
use App\Models\Admin\Groupe;
use App\Models\Admin\Section;
use App\Models\Professeur;
use app\Models\Admin\Filiere;
use App\Models\Cour;
use App\Models\devoir;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
class CustomAuthController extends Controller
{    
    //***********************User*************************************
 
    public function user($idE){
        $id_section=Etudiant::where('id',$idE)->value('id_section');
        $id_groupe=Etudiant::where('id',$idE)->value('id_groupe');
        $results= Section::find($id_section);
 
        $select = Cour::with('groupe')->with('professeur')->where('id_groupe',$id_groupe)->where('type','tp')->get();
        return view('user.site')->with('td',$results)->with('tp',$select);
    }
    public function login()
    {
        return view('user.login');
    }
  
    public function handleLogin(Request $req)
    {
           
        $user = Etudiant::where('email_etud', $req->email)
        ->where('mdp_etud',$req->password)
        ->first();

    if($user) {


        Auth::guard('web')->login($user);

            return redirect()->route('user.home',[$user->id]);
        }

        return redirect()->back()->withErrors(
            [
                'email' => 'Veuillez verifier votre adresse éléctronique et votre mot de passe.'
            ]);
    }
    public function coursUser($id){
        $select=Post::with('comments')->where('id_cours',$id)->get();
        // $s=DB::SELECT('SELECT name,section,groupe FROM cours,professeurs WHERE cours.id_prof=professeurs.id and cours.id=:id ', ['id' => $id]);
        $s=Cour::with('professeur')->where('id',$id)->get();
        $all=devoir::where('id_cours',$id)->get();

        // Auth::guard('webprof')->id();
        return view('user.cours')->with('td',$s)->with('post',$select)->with('id',$id)->with('dev',$all);
     }
    
    public function coursTpUser($id){
        $selectTp=DB::table('t_pratiques')->where('id', $id)->first();
        return view('user.coursTp')->with('tp',$selectTp);
    }
    public function rendre($id){
        $s=Cour::with('professeur')->where('id',$id)->get();
        $d=devoir::with('cour')->where('id',$id)->get();
        $t=DB::table('devoir_etudiants')
        ->where('id_devoir',$id)
        ->where('id_etudiant',Auth::guard('web')->id())
        ->get()->first();
       
        return view('user.devoir')->with('td',$s)->with('id',$id)->with('devoir',$d)->with('remis',$t);
   
    }

    //***********************ADMIN*************************************
    public function admin(){
        return view('components.admindashboard');
    }

    public function loginAdmin()
    {
        return view('admin.login');
    }

    public function handleLoginAdmin(Request $req)
    {   $user = Admin::where('email', $req->email)
        ->where('password', $req->password)
        ->first();

        if($user) {
            Auth::guard('webadmin')->login($user);

            return redirect()->route('admin.home');
        }

        return redirect()->back()->withErrors(
            [
                'email' => 'Veuillez verifier votre adresse éléctronique et votre mot de passe.'
            ]);
    }

    //***********************Prof*************************************
    public function homeProf($id){
        // $select =  DB::select('SELECT * FROM cour_professeur,cours,professeurs WHERE   cour_professeur.id_cours=cours.id and cour_professeur.id_prof=professeurs.id and professeurs.id=:id and type="td"', ['id' => $id]);
        $select = Cour::with('sections')->where('id_prof',$id)->where('type' ,'td')->get();
        $selectTp = Cour::with('groupe')->where('id_prof',$id)->where('type' ,'tp')->get();
        $filieres = Professeur::with('filieres')->where('id',$id)->get();
     
        return view('prof.home')->with('td',$select)->with('tp',$selectTp)->with('profFil',$filieres)->with('id',$id);
    }


    public function loginProf()
    {
        return view('prof.login');
    }

    public function handleLoginProf(Request $req)
    {   $user = Professeur::where('email', $req->email)
        ->where('password', $req->password)
        ->first();

        if($user) {
            Auth::guard('webprof')->login($user);

            return redirect()->route('prof.home',[$user->id]);
        }

        return redirect()->back()->withErrors(
            [
                'email' => 'Veuillez verifier votre adresse éléctronique et votre mot de passe.'
            ]);
    }
    // we need to modify this we don't have many to many
    public function cours($id){ 
        $select=Post::with('comments')->where('id_cours',$id)->get();
        // $s=DB::SELECT('SELECT name,section,groupe FROM cours,professeurs WHERE cours.id_prof=professeurs.id and cours.id=:id ', ['id' => $id]);
        $s=Cour::with('professeur')->where('id',$id)->get();
  
        return view('prof.cours')->with('td',$s)->with('post',$select)->with('id',$id);
    }
    public function archive($id){ 
        $select=Post::with('comments')->where('id_cours',$id)->get();
        // $s=DB::SELECT('SELECT name,section,groupe FROM cours,professeurs WHERE cours.id_prof=professeurs.id and cours.id=:id ', ['id' => $id]);
        $s=Cour::with('professeur')->where('id',$id)->get();
  
        return view('prof.archive')->with('td',$s)->with('post',$select)->with('id',$id);
    }
    public function list($id){
        $s=Cour::with('professeur')->with('sections')->where('id',$id)->get();
  
        return view('prof.list')->with('td',$s)->with('t',$s)->with('id',$id);
   
    }
    public function suivie($id){
        $d=devoir::with('etudiants')->where('id',$id)->get()->first();
        $id_cours=devoir::where('id',$id)->value('id_cours');
        $cour=Cour::with('sections')->where('id',$id_cours)->get();
        $all=devoir::with('cour')->with('etudiants')->where('id_cours',$id_cours)->get();
        $rem=DB::table('devoir_etudiants')
        ->where('id_devoir',$id)
        ->where('etat',1)
        ->get();
        $nrem=DB::table('devoir_etudiants')
        ->where('id_devoir',$id)
        ->where('etat',0)
        ->get();
        $nret=DB::table('devoir_etudiants')
        ->where('id_devoir',$id)
        ->where('etat',2)
        ->get();
 
        $rem=$rem->count();
        $nrem=$nrem->count();

        $nret=$nret->count();
        return view('prof.devoir.suivie')->with('id',$id)->with('id_cours',$id_cours)->with('dev',$all)->with('d',$d)->with('cour',$cour)->with('rem',$rem)->with('nrem',$nrem)->with('nret',$nret);
   
    }
  
    public function remis($id,$ids){
        $s=Etudiant::where('id',$ids)->get()->first();
        $t=devoir::where('id',$id)->get()->first();
        $id_cours=devoir::where('id',$id)->value('id_cours');

        $d=DB::table('devoir_etudiants')
        ->where('id_devoir',$id)
        ->where('id_etudiant',$ids)
        ->get()->first();
       
        return view('prof.devoir.remis')->with('dat',$d)->with('id_cours',$id_cours)->with('dev',$t)->with('e',$s)->with('idd',$id);;
   
    }
    public function coursTp($id){
        $selectTp=DB::table('t_pratiques')->where('id', $id)->first();
        return view('prof.coursTp')->with('tp',$selectTp);
    }
    
}
