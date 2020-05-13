<?php

namespace DesignPatterns\Factory;

interface ComidaFactory
{
    public function criarComida(int $id): Comida;
}