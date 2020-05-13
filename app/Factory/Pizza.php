<?php

namespace DesignPatterns\Factory;

class Pizza extends Comida
{

    public $sabor1;
    public $sabor2;
    public $comPalmito;
    public $bordaComRecheio;

    public function pizzaToString(): string
    {
        $palmito = $this->comPalmito ? "tem palmito incluso" : "nao tem palmito incluso";
        $borda = $this->bordaComRecheio ? "possui borda com recheio" : "nao possui borda com recheio";

        return $this->nome . ", com os seguintes sabores: " . $this->sabor1 . " e " .
            $this->sabor2 . ", esta pizza " . $palmito . " e " . $borda . ". Obrigado pela preferencia.";
    }

}