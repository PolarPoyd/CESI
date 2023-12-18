<?php 

class VideoPlaylist
{
    private array $videos = [];

    /**
     * Undocumented function
     *
     * @param Video $video
     * @return void
     */
    public function addVideo(Video $video): void 
    {
        $this->videos[]=$video;
    }
    
    /**
     * Undocumented function
     *
     * @return array
     */
    public function getVideos(): array
    {
        return $this->videos;
    }
}