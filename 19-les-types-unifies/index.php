<?php 

require_once "Video.php";
require_once "VideoPlaylist.php";

$videoTitles = ['Tuto', 'Astuces', 'Démo'];

// Ici on utilise l'index du tableau pour enregistrer la valeur 
// La propriété name etant public et on peut même écraser cette vleur à la volée 

// $video = new Video($videoTitles[0], 4335);
// $video->name=$videoTitles[1];

// Ici regardons ce qui se passe si on oublie de lui attrivue rla valeur de cete index 
// et que la proprieté name n'est pas typé

$video = new Video($videoTitles[0], 65766);
$video->name=$videoTitles;

var_dump($video->name);