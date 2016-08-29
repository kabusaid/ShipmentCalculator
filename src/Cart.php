<?php

class Cart {

    public  $products = [];

    public function addToCart($product)   {
        $this->products[] = $product;
    }

    public function getTotalWeight()   {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getWeight();
        }
        return $total;
    }

}
