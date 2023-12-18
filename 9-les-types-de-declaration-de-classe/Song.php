<?php 

class Song 
{
    public string $name;
    public int $numberOfPlays;

    /**
     * Undocumented function
     *
     * @param string $name
     * @param integer $numberOfPlays
     */
    public function __construct(string $name, int $numberOfPlays) {
        $this->name=$name;
        $this->numberOfPlays=$numberOfPlays;
    }
}