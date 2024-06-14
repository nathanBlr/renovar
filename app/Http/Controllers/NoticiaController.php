<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function show(String $slug)
    {
        $noticia = Noticia::where('slug',$slug)->first();
        return view('noticias.show',['noticia' => $noticia]);
    }
}
