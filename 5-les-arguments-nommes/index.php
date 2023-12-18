<?php

class Computer 
{
    public $name = "MacBook";
    public $price;

    public function getPriceFromEuroToCurrency($coefficient, $currencySymbol = "$"){
        return $this->price * $coefficient.$currencySymbol;
    }
}
$computer = new Computer();
$computer->price = 500000;
// Nouvelle écriture depuis php 8
$dollarComputerPrice = $computer->getPriceFromEuroToCurrency(coefficient:1.08);
var_dump($dollarComputerPrice).PHP_EOL;
// ici n écrase a vakeur par défaut
$poundComputerPrice = $computer->getPriceFromEuroToCurrency(0.86, "£");
var_dump($poundComputerPrice).PHP_EOL;