<?php

namespace App\Factories;

use App\Shapes\Circulo;
use App\Shapes\Quadrado;
use App\Shapes\Retangulo;

class FormaGeometricaFactory
{
    public function criarForma(string $tipo): string
    {
        switch ($tipo) {
            case 'circulo':
                return (new Circulo())->desenhar();
            case 'quadrado':
                return (new Quadrado())->desenhar();
            case 'retangulo':
                return (new Retangulo())->desenhar();
            default:
                throw new \Exception("Forma desconhecida.");
        }
    }
}
