<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaudacaoController extends Controller
{
    public function exibirMsg(){
        return "Olá Mundo do Controller! Que bom te ver aqui.";
    }
}
