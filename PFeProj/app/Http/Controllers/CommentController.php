<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Auth;
use App\Models\Professeur;
use App\Models\Comment;
use App\Models\Admin\Etudiant;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function createComment(Request $r,$id){
        $p =Post::find($id);
        $c= new Comment();
        
        $c->body=$r->body;
        $c->id_prof=Auth::guard('webprof')->id();
      
        $c->id_etud=Auth::guard('web')->id();
        $p=$p->comments()->save($c);
        return redirect()->back(); 
    }
}
