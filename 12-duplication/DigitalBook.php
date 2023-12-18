<?php 

class DigitalBook
{
    public string $title;
    public string $author;
    public int $price;
    public int $fileSize;

    public function __construct(string $title,
    string $author,
    int $price,
    int $fileSize=0,
    ) 
    {
        $this->title=$title;
        $this->author=$author;
        $this->price=$price;
        $this->fileSize=$fileSize;
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
     * Get the value of fileSize
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Get the value of title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    public function printDigitalBook(): string
    {
        $string = "{$this->title}, {$this->author}, FileSize: {$this->getFileSize()}";
        return print $string;
    }

    // Ici on se rend bien compte que l'on duplique 
    // cette méthode dans nos deux classes et qu'à 
    // chaque changement il faudra faire dans les deux classes
    public function getPriceAsCurrency() {
        return "$".$this->getPrice()/100;
    }
}