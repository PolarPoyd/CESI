<?php 

class Book 
{
    public string $title;
    public string $author;
    public int $price;
    public string $type;
    public int $weight;
    public int $fileSize;

    public function __construct(string $title,
    string $author,
    int $price,
    string $type,
    int $weight=0,
    int $fileSize=0,
    ) 
    {
        $this->title=$title;
        $this->author=$author;
        $this->price=$price;
        $this->type=$type;
        $this->weight=$weight;
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
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Get the value of fileSize
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    // Ici nous avons géré la différence entre livre physique et digital
    // mais on se rend bien compte que cela sera difficile à maintenant et 
    // à faire évoluer

    public function printBook(): string 
    {
        $string ="{$this->title}, {$this->author}, ";
        if($this->type ==='physical'){
            $string .="Weight : {$this->getWeight()}";

        }elseif ($this->type === 'digital'){
            $string .="FileSize : {$this->getFileSize()}";
        }
        return print $string;
    }
}


