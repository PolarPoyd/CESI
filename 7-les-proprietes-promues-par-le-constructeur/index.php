<?php

class Phone
{
    // Depuis php 8 on peut écrire le constructeur comme suit :
    public function __construct(public $name, public $price)
    {
        
    }

    public function getPriceFromEuroToCurrency($coefficient, $currencySymbol = "$"){
        return $this->price*$coefficient.$currencySymbol;
    }
}

$phone = new Phone("Iphone", 1000);
print $phone->name.PHP_EOL;
print $phone->price.PHP_EOL;