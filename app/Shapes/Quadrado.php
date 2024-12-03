<?php

namespace App\Shapes;

class Quadrado implements FormaGeometrica
{
    public function desenhar(): string
    {
        return '<div style="width: 100px; height: 100px; background-color: blue;"></div>';
    }
}
