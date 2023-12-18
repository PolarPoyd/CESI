<?php 

require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';

$physicalBook = new PhysicalBook("First book", "John Doe", 25, 5);
$digitalBook = new DigitalBook("Second book", "Jane Doe", 15, 1048);

// Ici, on utilise la méthode getAuthor du parent Book
print $physicalBook->getAuthor().PHP_EOL;
print $digitalBook->getAuthor().PHP_EOL;

$physicalBook->printPhysicalBook().PHP_EOL;
$digitalBook->printDigitalBook().PHP_EOL;