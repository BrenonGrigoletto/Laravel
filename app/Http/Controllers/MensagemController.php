<?php

namespace App\Http\Controllers;



class MensagemController extends Controller
{
    public function mostrarMensagem($mensagem)
    {
        return view('mensagem', compact('mensagem'));
    }
}
