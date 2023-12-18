<?php 

class Phone 
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPriceFromEuroToCurrency($coefficient, $currencySymbol = "$"){
        return $this->price*$coefficient.$currencySymbol;
    }

}

$phone = new Phone("Iphone", 1000);
print $phone->name.PHP_EOL;
print $phone->price.PHP_EOL;
