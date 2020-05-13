<?php

namespace DesignPatterns\Facade;

class CompraFacade
{

    public static function checkout
    (
        int $productId,
        string $address,
        int $zipCode,
        string $shippingCompany,
        int $paymentMethod): void
    {
        $productPrice = Estoque::getProductPriceById($productId);
        $shipping = new Entrega();
        $shipping->address = $address;
        $shipping->zipCode = $zipCode;
        $shipping->shippingCompany = $shippingCompany;
        $shippingPrice = $shipping->shippingPrice();
        $totalAmount = $productPrice + $shippingPrice;

        if ($paymentMethod === 1) {
            echo Pagamento::payWithCreditCard($totalAmount);
        } else {
            echo Pagamento::payWithBillet($totalAmount);
        }
    }

}