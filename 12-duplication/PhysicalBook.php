<?php 

class PhysicalBook
{
    public string $title;
    public string $author;
    public int $price;
    public int $weight;

    public function __construct(string $title,
    string $author,
    int $price,
    int $weight=0,
    ) 
    {
        $this->title=$title;
        $this->author=$author;
        $this->price=$price;
        $this->weight=$weight;
    }


    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
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

    // Ici on se rend bien compte que l'on duplique 
    // cette méthode dans nos deux classes et qu'à 
    // chaque changement il faudra faire dans les deux classes
    public function getPriceAsCurrency() {
        return "$".$this->getPrice()/100;
    }
}