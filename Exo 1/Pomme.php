<?php 
require_once 'Fruit.php';

class Pomme extends Fruit
{
    public function __construct($weight, $price) {
        parent::__construct("Pomme", $weight, $price);
    }
}