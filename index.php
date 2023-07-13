<?php

class Movie {
    public $title;
    public $genre;
    public $year;
    public $director;
    public $leadActor;
    public $rating;
    public static $movieType = 'Feature film';

    function __construct(String $movieTitle, String $movieGenre, Int $movieYear, String $movieDirector, String $movieLeadActor, String $movieRating ){
        $this->title = $movieTitle;
        $this->genre = $movieGenre;
        $this->year = $movieYear;
        $this->director = $movieDirector;
        $this->leadActor = $movieLeadActor;
        $this->rating = $movieRating;

    }

    public function getLeadActor(){
        return $this->leadActor;
    }
}

$sharknado = new Movie ('Sharknado', 'Comedy', 2013, 'Anthony Ferrante', 'Ian Ziering', 'none');
echo $sharknado->getLeadActor();
print_r($sharknado);

$sharktopus = new Movie ('Sharktopus vs. Pteracuda', 'Comedy', 2014, 'Kevin O\'Neill', 'The Sharktopus', 'none');
print_r($sharktopus);