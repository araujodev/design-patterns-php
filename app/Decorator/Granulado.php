<?php

namespace DesignPatterns\Decorator;

class Granulado implements ISorvete
{
    private $objetoDecorado;

    public function __construct(ISorvete $objetoDecorado)
    {
        $this->objetoDecorado = $objetoDecorado;
    }


    public function preco(): float
    {
        return $this->objetoDecorado->preco() + 0.75;
    }
}