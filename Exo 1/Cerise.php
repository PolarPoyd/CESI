<?php
require_once 'Fruit.php';

class Cerise extends Fruit 
{
    public function __construct($weight, $price) {
        parent::__construct("Cerise", $weight, $price);
    }
}