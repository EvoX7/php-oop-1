<?php


class Movie
{

    // ! Fields
    protected $title;
    protected $plot;
    protected $actors;
    protected $genre;
    public $userRating;




    // ? Constructor
    function __construct($_title, $_plot, $_actors, $_genre, $_userRating)
    {
        $this->title = $_title;
        $this->plot = $_plot;
        $this->actors = $_actors;
        $this->genre = $_genre;
        $this->userRating = $_userRating;
    }

    // * Methods
    public function get_title($title)
    {
        return $this->$title;
    }

    public function get_plot($plot)
    {
        return $this->$plot;
    }

    public function get_actors($actors)
    {
        return $this->$actors;
    }

    public function get_genre($genre)
    {
        return $this->$genre;
    }
    
    public function get_rating($userRating)
    {
        return $this->$userRating;
    }
}
