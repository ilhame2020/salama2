<?php

namespace App\Http\Controllers\Admin;

use  App\Models\filiere_professeurs;
use App\Models\c;
use App\Models\Professeur;
use Illuminate\Http\Request;
use App\Models\Admin\Filiere;
use App\Models\Admin\Departement;
use App\Http\Controllers\Controller;
use App\Models\Admin\Etudiant;
use App\Models\Admin\Groupe;
use App\Models\Admin\Section;
use PHPUnit\TextUI\XmlConfiguration\Group;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function ListAllProf(){       
        $profs=Professeur::with('filieres')->get();
        $filieres=Filiere::with('sections')->get();
        $filieres2=Filiere::with('sections')->get();

        // dd($filieres);
        return view("admin.professeur",compact('profs','filieres','filieres2'));
    }
    public function SuppProf($id){
        //dd($id);
        $prof=Professeur::findOrFail($id);
        $prof->delete();
        return back()->with('success', 'Professeur bien supprimé !');;
    }
    public function CreateProf(Request $request) {
        // Form validation
       // dd($request->all());
        $this->validate($request, [
            'cin' => 'required ',
            'nom_prof' => 'required',
            'prenom_prof' => 'required',
            'email_connexion'=>'required',
            'email_personnel'=>'required',
            'tel'=>'required',
            'departement' => 'required',
         ]);
  
        $prof=new Professeur();
        $prof->cin=$request->cin;
         $prof->name_p=$request->nom_prof;
         $prof->prenom=$request->prenom_prof;
         $prof->email=$request->email_connexion;
         $prof->email_personnel=$request->email_personnel;
         $prof->tel=$request->tel;
         $prof->departement=$request->departement;
         $prof->password=$request->cin.''.$request->cin;
    
         $prof->save();
         $filiere =Filiere::find($request->filiere);
         $prof->filieres()->attach($filiere);
    
        return back()->with('success', 'Professeur bien ajouté !');
    }
    public function updateProf(Request $request, $id)
    {
        //dd($request->all());
        $this->validate($request,[
            'cin' => 'required ',
            'nom_prof' => 'required',
            'prenom_prof' => 'required',
            'email_connexion'=>'required',
            'email_personnel'=>'required',
            'tel'=>'required',
            'departement' => 'required',
        ]);
        $prof=Professeur::whereId($id)->first();
        $prof->cin=$request->cin;
         $prof->name_p=$request->nom_prof;
         $prof->prenom=$request->prenom_prof;
         $prof->email=$request->email_connexion;
         $prof->email_personnel=$request->email_personnel;
         $prof->tel=$request->tel;
         $prof->departement=$request->departement;         
        $prof->save();
        $prof->save();
         $filiere =Filiere::find($request->filiere);
         $prof->filieres()->attach($filiere);
        //Section::whereId($id)->update($validatedData);
    
        return back()->with('success', 'Professeur mis à jour avec succèss');
    }
    //etudiant fonctions 
    public function ListAllEtud(){       
        $etuds=Etudiant::get();
       
        $sections=Section::get();
        $groupes=Groupe::get();
        return view("admin.etudiant",compact('etuds','sections','groupes'));
    }
    public function SuppEtudiant($id){
        //dd($id);
        $etud=Etudiant::findOrFail($id);
        $etud->delete();
        return back()->with('success', 'Etudiant bien supprimé !');;
    }
    public function CreateEtudiant(Request $request) {
        // Form validation
       // dd($request->all());
        $this->validate($request, [
            'cne' => 'required ',
            'nom' => 'required',
            'prenom' => 'required',
            'adresse'=>'required',
            'date_inscription'=>'required',
            'date_de_naissance'=>'required',
            'email' => 'required',
            'section' => 'required',
            'groupe' => 'required',
         ]);
        //  Store data in database
        $etud=new Etudiant();
        $etud->cne=$request->cne;
         $etud->nom_etudiant=$request->nom;
         $etud->prenom_etudiant=$request->prenom;
         $etud->date_naiss_etud=$request->date_de_naissance;
         $etud->adresse_etud=$request->adresse;
         $etud->date_inscription_etud=$request->date_inscription;
         $etud->email_etud=$request->email;
         $etud->id_section=$request->section;
         $etud->id_groupe=$request->groupe;
         $etud->compte_etud=$request->cne .'.'. $request->nom . '@gmail.com';
         $etud->mdp_etud=$request->cne.''.$request->cne;
         
        $etud->save();
        //Etudiant::create($request->all());

        // 
        return back()->with('success', 'Etudiant bien ajouté !');
    }
    public function updateEtudiant(Request $request, $id)
    {
        //dd($request->all());
        $this->validate($request,[
            'cne' => 'required ',
            'nom' => 'required',
            'prenom' => 'required',
            'adresse'=>'required',
            'date_inscription'=>'required',
            'date_de_naissance'=>'required',
            'email' => 'required',
            'section' => 'required',
            'groupe' => 'required',
        ]);
        $etud=Etudiant::whereId($id)->first();
        $etud->cne=$request->cne;
         $etud->nom_etudiant=$request->nom;
         $etud->prenom_etudiant=$request->prenom;
         $etud->date_naiss_etud=$request->date_de_naissance;
         $etud->adresse_etud=$request->adresse;
         $etud->date_inscription_etud=$request->date_inscription;
         $etud->email_etud=$request->email;
         $etud->id_section=$request->section;
         $etud->id_groupe=$request->groupe;
        $etud->save();
        //Section::whereId($id)->update($validatedData);
    
        return back()->with('success', 'Etudiant mis à jour avec succèss');
    }

    //manipulation des sections 

    public function ListAllSect(){       
       $sections=Section::with('filiere')->get();
       $filieres= Filiere::all();
        
        // dd($sections);
       return view("admin.section",compact('sections','filieres'));
    }
    public function SuppSection($id){
        
        $section=Section::findOrFail($id);
        $section->delete();
        return back()->with('success', 'Section bien supprimé !');
    }
    public function CreateSection(Request $request) {
        // Form validation
       // dd($request->all());
        $this->validate($request, [
            'nom_section' => 'required ',
            'annee_universitaire' => 'required',
            'filiere' => 'required',
         ]);
        //  Store data in database
        $sect=new Section();
        $sect->nom_section=$request->nom_section;
         $sect->annee_universitaire=$request->annee_universitaire;
         $sect->id_filiere=$request->filiere;
         
        $sect->save();

        // 
        return back()->with('success', 'Section bien ajouté !');
    }

    public function updateSection(Request $request, $id)
{
    //dd($request->all());
    $this->validate($request,[
        'nom_section' => 'required',
        'annee_universitaire' => 'required',
        'filiere' => 'required'
    ]);
    $sect=Section::whereId($id)->first();
    $sect->nom_section=$request->nom_section;
    $sect->annee_universitaire=$request->annee_universitaire;
    $sect->id_filiere=$request->filiere;
    $sect->save();
    //Section::whereId($id)->update($validatedData);

    return back()->with('success', 'Section mise à jour avec succès');
}
    // fonction des groupes 

    public function ListAllGrp(){       
        $sections=Section::all();
        $groupes=Groupe::with('section')->get();
     
        return view("admin.groupe",compact('groupes','sections'));
    }
    public function SuppGroupe($id){
        //dd($id);
        $groupe=Groupe::findOrFail($id);
        $groupe->delete();
        return back()->with('success', 'Groupe bien supprimé !');
    }
    public function CreateGroupe(Request $request) {
        // Form validation
       // dd($request->all());
        $this->validate($request, [
            'nom_groupe' => 'required ',
            'annee_universitaire' => 'required',
            'section' => 'required',
         ]);
        //  Store data in database
        $grp=new Groupe();
        $grp->nom_groupe=$request->nom_groupe;
         $grp->annee_universitaire=$request->annee_universitaire;
         $grp->id_section=$request->section;
         
        $grp->save();

        // 
        return back()->with('success', 'Groupe bien ajouté !');
    }
    public function updateGroupe(Request $request, $id)
    {
        $this->validate($request,[
            'nom_groupe' => 'required',
            'annee_universitaire' => 'required',
            'section' => 'required'
        ]);
        $grp=Groupe::whereId($id)->first();
        $grp->nom_groupe=$request->nom_groupe;
        $grp->annee_universitaire=$request->annee_universitaire;
        $grp->id_section=$request->section;
        $grp->save();
        //Section::whereId($id)->update($validatedData);
    
        return back()->with('success', 'Groupe mis à jour avec succèss');
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
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }
}
