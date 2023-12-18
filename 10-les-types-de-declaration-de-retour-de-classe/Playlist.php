<?php 

class Playlist 
{
    public $songs = [];

    public function addSong(Song $song): void
    {
        $this->songs[] = $song;
    }

    public function getLenght(): int
    {
        return count($this->songs);
    }
}