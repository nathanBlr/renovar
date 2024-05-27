<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Post;
use Illuminate\Http\Request;

class RotasController extends Controller
{
    public function index(String $nome)
    {
        if($nome=='noticias'){
            $posts = Post::all(); 
        return view('rotas.'.$nome, ['posts' => $posts]);
        }
        if($nome=='galeria'){
            $photos = Photo::get();
         return view('rotas.'.$nome, ['photos' => $photos]);
        }
        else{
            return view('rotas.'.$nome);
        }
    }
}
