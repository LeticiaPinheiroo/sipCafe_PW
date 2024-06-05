<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function mostraForm()
    {
        return view('contato'); 
    }

    public function enviarContato(Request $request)
    {
        // Captura a saída do var_dump
        ob_start();
        var_dump($request->all());
        $varDumpOutput = ob_get_clean();

        // Passa a saída para a view
        return view('contato', ['varDumpOutput' => $varDumpOutput]);
    }
}