<?php

namespace DesignPatterns\Facade;

class Estoque
{

    public static function getProductPriceById(int $productId): float
    {
        if($productId === 10)
        {
            return 1000;
        }
        return 0;
    }

}