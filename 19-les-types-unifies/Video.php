<?php 

class Video
{
    public string $name;
    public int $numberOfPlays;

    /**
     * Undocumented variable
     *
     * @var float|integer
     */
    private float|int $rating;

    public function __construct(string $name, int $numberOfPlays)
    {
        $this->name=$name;
        $this->numberOfPlays=$numberOfPlays;
    }

    public function getRating(): float|int
    {
        return $this->rating;
    }

    /**
     * Set the value of rating
     *
     * @param float|int $rating
     *
     * @return self
     */
    public function setRating(float|int $rating): void
    {
        //si plus petit que 0, set à 0
        $rating = max(0, $rating);
        //si plus grand que 5 on set à 5
        $this->rating = min(5, $rating);
    }
}