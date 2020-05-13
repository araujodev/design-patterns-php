<?php

namespace DesignPatterns\Facade;

class Pagamento
{

    public static function payWithCreditCard(float $amount): string
    {
        return "O valor R$".$amount." foi pago com o cartao de credito.";
    }

    public static function payWithBillet(float $amount): string
    {
        return "O valor R$".$amount." foi pago por boleto.";
    }

}