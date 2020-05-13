<?php

namespace DesignPatterns\Facade;

class Entrega
{

    public $address;
    public $zipCode;
    public $shippingCompany;

    public function shippingPrice(): float
    {
        return 200;
    }

}