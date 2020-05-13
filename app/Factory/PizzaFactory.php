<?php

namespace DesignPatterns\Factory;

class PizzaFactory implements ComidaFactory
{

    public function criarComida(int $id): Comida
    {
        $p = new Pizza();

        if ($id === 0) {
            $p->nome = "Pizza de Calabresa";
            $p->sabor1 = "Calabresa";
            $p->sabor2 = "Queijo";
            $p->comPalmito = false;
            $p->bordaComRecheio = false;

        } else if ($id === 1) {
            $p->nome = "Pizza de Frango";
            $p->sabor1 = "Frango";
            $p->sabor2 = "Queijo";
            $p->comPalmito = true;
            $p->bordaComRecheio = true;

        } else {
            $p->nome = "Pizza Mista";
            $p->sabor1 = "Presunto";
            $p->sabor2 = "Queijo";
            $p->comPalmito = false;
            $p->bordaComRecheio = true;

        }

        return $p;
    }
}