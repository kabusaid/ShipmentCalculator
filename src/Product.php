<?php

class Product implements ShipInterface {

    private $id;
    private $title;
    private $price;
    private $weight;

    /**
     * Implement the weight function of ShipInterface
     */

    public function weight(){
        return $this->weight;
    }

    /**
     * Setter and Getter Functions
     */

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setId($id)    {
        $this->id = $id;
    }

    public function getId()    {
        return $this->id;
    }

    public function setTitle($title)    {
        $this->title = $title;
    }

    public function getTitle()    {
        return $this->title;
    }

    public function setPrice($price)    {
        $this->price = $price;
    }

    public function getPrice()    {
        return $this->price;
    }

}
