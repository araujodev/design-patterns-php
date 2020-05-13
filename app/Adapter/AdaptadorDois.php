<?php


namespace DesignPatterns\Adapter;

class AdaptadorDois extends BibliotecaAntiga implements IMetodos
{

    public function metodo1()
    {
        $this->salvarNoBanco();
    }

    public function metodo2($name)
    {
        $this->gerarRelatorioTxt($name);
    }
}