<?php

namespace DesignPatterns\Decorator;

class Sorvete implements ISorvete
{

    public function preco(): float
    {
        return 1.00;
    }
}