<?php 

// les différents types : 
// boolean
// integer
// float
// string 
// object
// resource 
// array 
// null 

// Permet les types stricts, exemple un int ne sera pas 
// interprété en string 

declare(strict_types=1);
require_once 'Song.php';

$song = new Song("Ma chanson", 2436);
var_dump($song);
print $song->name;