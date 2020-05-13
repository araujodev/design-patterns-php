<?php

use DesignPatterns\Factory\PizzaFactory;

require_once '../../vendor/autoload.php';

/**
 *
 * factory Usage.
 *
 */

$pizzaFactory = new PizzaFactory();
$calabresa = $pizzaFactory->criarComida(0);
echo $calabresa->pizzaToString();

echo "<br>";

$frango = $pizzaFactory->criarComida(1);
echo $frango->pizzaToString();