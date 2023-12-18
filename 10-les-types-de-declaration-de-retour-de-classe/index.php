<?php 

declare(strict_types=1);
require_once 'Song.php';
require_once 'Playlist.php';

$playlist = new Playlist();
$song1 = new Song("Yesterday", 2443);
$song2 = new Song("Blackbird", 4532);
$playlist->addSong($song1);
$playlist->addSong($song2);
foreach($playlist->songs as $song){
    print $song->name.PHP_EOL;
}

$playlist->getLenght() <4? print "Croute playlist" : print "Playlist longue";