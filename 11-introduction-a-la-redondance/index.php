<?php 
require_once 'Book.php';

$physicalBook = new Book("FirstBook", "John Doe", 25, "physical");
$digitalBook = new Book("SecondBook", "Jane Doe", 14, "digital");

print $physicalBook->getWeight().PHP_EOL;
print $digitalBook->getFileSize().PHP_EOL;

$physicalBook->printBook();
$digitalBook->printBook();