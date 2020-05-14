<?php

namespace DesignPatterns\Observable\Helpers;

abstract class Observable
{

    private $observers = [];

    public function addObservers(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update();
        }
    }

}