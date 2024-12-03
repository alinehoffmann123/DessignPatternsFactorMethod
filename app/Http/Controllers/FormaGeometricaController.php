<?php

namespace App\Http\Controllers;

use App\Factories\FormaGeometricaFactory;
use Illuminate\Http\Request;

class FormaGeometricaController extends Controller
{
    public function exibirForm()
    {
        // Exibir o formulário com a lista de opções
        return view('formas.form');
    }

    public function criarForma(Request $request)
    {
        $factory = new FormaGeometricaFactory();
        $tipoForma = $request->input('tipo', 'circulo'); 

        try {
            // Gerar o HTML da forma com base na escolha
            $formaHtml = $factory->criarForma($tipoForma);
            return view('formas.show', ['formaHtml' => $formaHtml]);
        } catch (\Exception $e) {
            return view('formas.error', ['erro' => $e->getMessage()]);
        }
    }
}
