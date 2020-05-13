<?php

namespace DesignPatterns\Adapter;

class ClienteAlternativoHeranca
{

    private $biblioteca;

    public function __construct()
    {
        $this->biblioteca = new AdaptadorDois();
    }

    public function principal()
    {
        $this->biblioteca->metodo1();
        $this->biblioteca->metodo2("LeandroFile2");
    }

}