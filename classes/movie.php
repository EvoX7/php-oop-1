<?php


class Movie
{

    // ! Fields

    private $title;
    private $plot;
    private $protagonist;
    private $genre;
    public $userRating;




    // ? Constructor

    function __construct($_title, $_plot, $_protagonist, $_genre, $_userRating)
    {
        $this->title = $_title;
        $this->plot = $_plot;
        $this->protagonist = $_protagonist;
        $this->genre = $_genre;
        $this->userRating = $_userRating;
    }

    // * Methods

    public function getTitle()
    {
        return $this->title;
    }

    public function getPlot()
    {
        return $this->plot;
    }

    public function getProtagonist()
    {
        return $this->protagonist;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function getRating()
    {
        return $this->userRating;
    }

    public function setRating($numberCheck)
    {
        if (is_numeric($numberCheck))
            $this->numberCheck = $numberCheck;
    }
}
