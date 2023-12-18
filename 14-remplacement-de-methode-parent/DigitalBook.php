<?php 
require_once "Book.php";

class DigitalBook extends Book
{
    public int $fileSize;

    public function __construct(
        string $title,
        string $author,
        int $price,
        int $fileSize=0) 
    {
        parent::__construct($title, $author, $price);
        $this->fileSize=$fileSize;
    }

    /**
     * Get the value of fileSize
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    public function printBook(): string
    {
        $string = "{$this->title}, {$this->author}, FileSize: {$this->getFileSize()}";
        return print $string;
    }
}