<?php

// ! Proprietà
class Movie
{
    public $title;
    public $plot;
    public $actors;
    public $genre;
    public $rating;


    // ? Costruttore
    function __construct($_title, $_plot, $_actors, $_genre, $_rating)
    {
        $this->title = $_title;
        $this->plot = $_plot;
        $this->actors = $_actors;
        $this->genre = $_genre;
        $this->rating = $_rating;
    }

   


}





