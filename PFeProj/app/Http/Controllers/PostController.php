<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;
use App\Models\Professeur;
class PostController extends Controller
{
    public function postCreatePost($id=0,Request $r){

        $post =new Post();
        $post->body = $r->body;
        if ($r->hasFile('file')) {

            $r->validate([
                'image' => 'mimes:jpeg,bmp,png',
    
            ]);

        $r->file->store('fichiers', 'public');
        $post->file_path = $r->file->hashName();
            }
        $post->id_prof=Auth::guard('webprof')->id();
        $post->id_cours = $id;
      
        $post->save();
        return redirect()->back();     

    }

    }



