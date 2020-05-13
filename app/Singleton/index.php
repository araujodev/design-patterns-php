<?php
require_once '../../vendor/autoload.php';

/**
 *
 * singleton Usage.
 *
 */

use DesignPatterns\Singleton\LoteriaFederal;

$governoLoteria = LoteriaFederal::getInstance();
$proximoSorteio = $governoLoteria->getDataProximoSorteio();
$governoLoteria->gerarDezenasSorteio();
echo LoteriaFederal::LOTERIA_FEDERAL_LABEL . ", proximo sorteio: " . $proximoSorteio. ". Dezenas: " . $governoLoteria->dezenasToArray();