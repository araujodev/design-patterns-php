<?php

namespace DesignPatterns\Adapter;

class BibliotecaAntiga
{

    public function salvarNoBanco()
    {
        echo "Dado salvo no banco de dados <br>";
    }

    public function gerarRelatorioTxt($name)
    {
        echo "Relatorio Gerado: " . $name . ".txt";
    }

}