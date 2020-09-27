<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function getServices(){

        $slogan = "Serviços personalizados sob medida. blabla pipipi popopo";

        $servicos = [[
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
        ]];

        return view('welcome', compact('slogan', 'servicos'));
    }
}
