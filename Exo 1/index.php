<?php

require_once 'Pomme.php';
require_once 'Cerise.php';

$fruits = [
    new Pomme(150, 0.50),
    new Cerise(10, 0.20),
    new Pomme(200, 0.70),
    new Cerise(15, 0.25)
];

foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}