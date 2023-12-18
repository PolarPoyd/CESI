<?php 

class Fruit 
{
    private $name;
    private $weight;
    private $price;

    public function __construct($name, $weight, $price) {
        $this->name = $name;
        $this->weight = $weight;
        $this->price = $price;
    }

    public function __toString() {
        return $this->name . " - Weight: " . $this->weight . "g, Price: " . $this->price . "€";
    }
}