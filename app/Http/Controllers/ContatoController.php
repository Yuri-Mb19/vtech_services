<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        return view('site.contato');
    }


    public function salvar(Request $request) {
        $regras =             [
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'email',
            'localizacao' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedback = [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',

            'email.email' => 'O email informado não é válido',

            'mensagem.max' => 'A mensagem deve ter no máximo 2000 caracteres',

            'required' => 'O campo :attribute deve ser preenchido'
        ];

        $request->validate($regras, $feedback);
        SiteContato::create($request->all());


        return redirect()->back()
        ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
