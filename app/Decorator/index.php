<?php

use DesignPatterns\Decorator\Granulado;
use DesignPatterns\Decorator\SaborMorango;
use DesignPatterns\Decorator\Sorvete;

require_once '../../vendor/autoload.php';

/**
 *
 * decorator Usage.
 *
 */
$sorvete = new Sorvete();
echo "Preco Atual Sorvete: ". $sorvete->preco();

$saborMorango = new SaborMorango($sorvete);
echo "<br>Preco Atual Sorvete: ". $saborMorango->preco();

$granulado = new Granulado($saborMorango);
echo "<br>Preco Atual Sorvete: ". $granulado->preco();