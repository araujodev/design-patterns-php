<?php

namespace DesignPatterns\Adapter;

class Cliente
{

    private $biblioteca;

    public function __construct()
    {
        $this->biblioteca = new AdaptadorUm(new BibliotecaAntiga());
    }

    public function principal()
    {
        $this->biblioteca->metodo1();
        $this->biblioteca->metodo2("LeandroFile");
    }

}