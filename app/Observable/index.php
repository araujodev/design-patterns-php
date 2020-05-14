<?php
require_once '../../vendor/autoload.php';

use DesignPatterns\Observable\Clima;
use DesignPatterns\Observable\PrintarNaTela;

/**
 *
 * observable Usage.
 *
 */

$campoGandeClima = new Clima(27.5);
$cliente = new PrintarNaTela($campoGandeClima);

$campoGandeClima->atualizarTemperatura(30.0);
$campoGandeClima->atualizarTemperatura(32.5);