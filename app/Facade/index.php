<?php
require_once '../../vendor/autoload.php';

/**
 *
 * facade Usage.
 *
 */

\DesignPatterns\Facade\CompraFacade::checkout(
    10,
    "Rua teste, 432",
    79080600,
    "FedEx",
    1
);