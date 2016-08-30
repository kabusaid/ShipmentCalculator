<?php

class ShipmentCalculator {

    private $minmumPricePerShipment = 10;
    private $shipmentRatePer1Kg = 2;

    /**
     * calculate the Shipment Price of any Shipment Type.
     */

    public function calculate(ShipInterface $ship)
    {
        $weight = $ship->weight();
        $shipmentPrice = $weight * $this->shipmentRatePer1Kg;

        if ($shipmentPrice > 10)
            return $shipmentPrice;
        else
            return $this->minmumPricePerShipment;
    }

    /**
     * Setter and Getter Functions
     */

    public function setMinmumPricePerShipment(int $minmumPricePerShipment)    {
        $this->minmumPricePerShipment = $minmumPricePerShipment;
    }

    public function getMinmumPricePerShipment()    {
        return $this->minmumPricePerShipment;
    }

    public function setShipmentRatePer1Kg(int $shipmentRatePer1Kg)    {
        $this->shipmentRatePer1Kg = $shipmentRatePer1Kg;
    }

    public function getShipmentRatePer1Kg()    {
        return $this->shipmentRatePer1Kg;
    }

}
