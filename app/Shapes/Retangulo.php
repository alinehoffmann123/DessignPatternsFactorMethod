<?php

namespace App\Shapes;

class Retangulo implements FormaGeometrica
{
    public function desenhar(): string
    {
        return '<div style="width: 200px; height: 100px; background-color: green;"></div>';
    }
}
