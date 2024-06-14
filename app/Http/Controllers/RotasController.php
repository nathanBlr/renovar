<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class RotasController extends Controller
{
        public function index(String $nome)
        {   
    
            if($nome == 'noticias'){
                    $noticias = Noticia::get();
                    return view('rotas.noticias', ['noticias' => $noticias]);
            }
            if($nome == 'inicio'){
                $noticia1 = Noticia::latest()->first();
                $noticia2 = Noticia::oldest()->first();
                return view('rotas.inicio',['noticia1'=>$noticia1, 'noticia2'=>$noticia2]);
            }
            return view('rotas.'.$nome);
        }
}
