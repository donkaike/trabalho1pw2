<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sistema;

class ServicosController extends Controller
{
    public function getServices(){

        $slogan = "Sistemas personalizados sob medida. blabla pipipi popopo";

        $servicos = Sistema::all();

        //dd($servicos);

        /*$servicos = [[
            'servico' => 'Programação WEB',
            'valor' => 100,
            'unidade' => 'hora'
        ],[
            'servico' => 'Designer UI/UX',
            'valor' => 150,
            'unidade' => 'tela'
        ],[
            'servico' => 'Programação Android',
            'valor' => 100,
            'unidade' => 'hora'
        ]];*/

        return view('welcome', compact('slogan', 'servicos'));
    }

    public function addForm(){
        return view('form');
    }

    public function adicionar(Request $request){

        $request->validate([
            'nome' => 'bail|required|min:3|max:100',
            'cliente' => 'bail|required|min:3|max:100',
            'linguagem' => 'bail|required|min:3|max:100'
        ]);

        $servico = new Sistema();
        $servico->nome = $request->nome;
        $servico->cliente = $request->cliente;
        $servico->linguagem = $request->linguagem;

        $servico->save();

        return redirect()->route('servicos.listar');
    }
}
