<?php

class Cart implements ShipInterface {

    private $products = [];

    /**
     * Implement the weight function of ShipInterface
     */

    public function weight()    {
        $totalWeight = 0;
        foreach ($this->products as $product) {
            $totalWeight += $product->getWeight();
        }
        return $totalWeight;
    }

    /**
     * Add Product to Cart
     */

    public function addProduct($product)   {
        $this->products[] = $product;
    }

}
