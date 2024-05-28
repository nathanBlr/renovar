<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RotasController extends Controller
{
      public function index(String $nome)
    {
            return view('rotas.'.$nome);
    }
}
