<?php 

class Panier
{
    private $fruits;

    public function __construct() {
        $this->fruits = array();
    }

    public function addFruit($fruit) {
        $this->fruits[] = $fruit;
    }

    public function showPanier() {
        foreach ($this->fruits as $fruit) {
            echo $fruit . "\n";
        }
    }
}