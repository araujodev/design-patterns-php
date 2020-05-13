<?php


namespace DesignPatterns\Adapter;

class AdaptadorUm implements IMetodos
{

    /**
     * @var BibliotecaAntiga
     */
    private $adaptado;

    public function __construct(BibliotecaAntiga $objeto)
    {
        $this->adaptado = $objeto;
    }

    public function metodo1()
    {
        $this->adaptado->salvarNoBanco();
    }

    public function metodo2($name)
    {
        $this->adaptado->gerarRelatorioTxt($name);
    }
}