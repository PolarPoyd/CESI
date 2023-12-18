<?php 

require_once "Video.php";
require_once "VideoPlaylist.php";

$youtubeVideos = new VideoPlaylist();
$video = new Video("Tuto", 3456);
$fakeVideo = "Ce n'est pas un objet vidéo";

// Ici le fait de privatiser la propriété et de na lrendre accessible que par 
// la méthide addVideo empeche d'enregistrer une video qui n'est pas un objet

$youtubeVideos->addVideo($fakeVideo); 
$youtubeVideos->addVideo(new Video("Astuces", 6743));

var_dump($youtubeVideos->getVideos());