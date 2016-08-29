<?php

class ShipmentCalculator {

    public $minmumPricePerShipment = 10;
    public $shipmentRatePer1Kg = 2;

    public function calculateProduct(Product $product)
    {
        $weight = $product->getWeight();
        $shipmentPrice = $weight * $this->shipmentRatePer1Kg;

        if ($shipmentPrice > 10)
            return $shipmentPrice;
        else
            return $this->minmumPricePerShipment;
    }

    public function calculateCart(Cart $cart)
    {
        $weight = $cart->getTotalWeight();
        $shipmentPrice = $weight * $this->shipmentRatePer1Kg;

        if ($shipmentPrice > 10)
            return $shipmentPrice;
        else
            return $this->minmumPricePerShipment;
    }    

}
