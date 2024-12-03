<?php

namespace App\Shapes;

class Circulo implements FormaGeometrica
{
    public function desenhar(): string
    {
        return '<div style="width: 100px; height: 100px; background-color: red; border-radius: 50%;"></div>';
    }
}

