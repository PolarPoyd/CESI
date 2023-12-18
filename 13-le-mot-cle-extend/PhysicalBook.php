<?php 
require_once "Book.php";

class PhysicalBook extends Book
{
    public int $weight;

    public function __construct(
    string $title,
    string $author,
    int $price,
    int $weight=0,
    ) 
    {
        parent::__construct($title, $author, $price);
        $this->weight=$weight;
    }

    /**
     * Get the value of weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    public function printPhysicalBook(): string
    {
        $string = "{$this->title}, {$this->author}, Weight: {$this->getWeight()}";
        return print $string;
    }

}