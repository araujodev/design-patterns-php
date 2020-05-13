<?php

use DesignPatterns\Adapter\Cliente;
use DesignPatterns\Adapter\ClienteAlternativoHeranca;

require_once '../../vendor/autoload.php';

/**
 *
 * adapter Usage.
 *
 */

$cliente = new Cliente();
$cliente->principal();

echo "<hr>";

$clienteAlternativo = new ClienteAlternativoHeranca();
$clienteAlternativo->principal();