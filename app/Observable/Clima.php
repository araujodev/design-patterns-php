<?php

namespace DesignPatterns\Observable;

use DesignPatterns\Observable\Helpers\Observable;

class Clima extends Observable
{

    private $temperatura;

    public function __construct(float $temp)
    {
        $this->temperatura = $temp;
    }

    public function atualizarTemperatura(float $temperatura): void
    {
        $this->temperatura = $temperatura;
        $this->notifyObservers();
    }

    public function getTemperatura()
    {
        return $this->temperatura;
    }

}