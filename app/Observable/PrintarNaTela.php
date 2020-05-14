<?php


namespace DesignPatterns\Observable;


use DesignPatterns\Observable\Helpers\Observer;

class PrintarNaTela implements Observer
{

    private $climaObservable;

    public function __construct(Clima $climaObservable)
    {
        $this->climaObservable = $climaObservable;
        $this->climaObservable->addObservers($this);
    }

    public function update()
    {
        echo "Temperatura Atual: " . $this->climaObservable->getTemperatura() . "<br>";
    }
}