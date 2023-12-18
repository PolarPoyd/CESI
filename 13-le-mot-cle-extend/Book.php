<?php 

class Book 
{
    public string $title;
    public string $author;
    public int $price;

    public function __construct(string $title,
    string $author,
    int $price,
    ) 
    {
        $this->title=$title;
        $this->author=$author;
        $this->price=$price;
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

    // Maintenant cette méthode est commune au deux classes
    // Elle est transmise par le principe d'héritage et 
    // grâce au mot clé extends
    public function getPriceAsCurrency() {
        return "$".$this->getPrice()/100;
    }

}


