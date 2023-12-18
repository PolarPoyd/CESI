<?php

class House 
{
    public $name = "Pavillon";
    public $price;

    public function getDollarPrice($currencySymbol = '$'){
        // Nous avons donné une valeur par défaut à $currencySympol
        return $this->price *1.08.$currencySymbol;
    }
}

$house = new House();
$house->price = 500000;
$dollarHousePrice = $house->getDollarPrice();
var_dump($dollarHousePrice).PHP_EOL;
// ici on écrase la veleur par défaut 
$dollarHousePrice = $house->getDollarPrice(currencySymbol:'£');
var_dump($dollarHousePrice).PHP_EOL;