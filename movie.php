<?php
// è definita una classe ‘Movie’
    class Movie {
        // => all'interno della classe sono dichiarate delle variabili d'istanza
        public $title;
        public $director;
        public $genre;
        public $year;


        // => all'interno della classe è definito un costruttore
        public function __construct($title, $director, $genre, $year) {
            
            $this ->title = $title;
            $this->director = $director;
            $this->genre = $genre;
            $this->year = $year;
            
    }
        // => all'interno della classe è definito almeno un metodo
        public function getTitle(){
            return $this->title;
        }
       
    }


    // vengono istanziati almeno due oggetti ‘Movie’
    $movies=[
        new Movie('Interstellar', 'Christopher Nolan', 'science-fiction', 2014),
        new Movie('The Gift', 'Joel Edgerton', 'Psychological-thriller', 2015),
        new Movie('Spaceballs', 'Mel Brooks', 'Parodia', 1987),

    ];
    
    
    // $movieTitle = new Movie('Interstellar');
    // $plot = "In 2067, crop blights and dust storms threaten humanity's survival. Cooper, a widowed engineer and former NASA pilot turned farmer, lives with his father-in-law, Donald, teen son, Tom, and 10-year-old daughter, Murph. After a dust storm, patterns inexplicably appear in Murph's dust-covered bedroom floor. Murph believes a ghost created them, but Cooper deduces the patterns were made by gravity variations and represent geographic coordinates in binary code. Cooper follows the coordinates to a secret NASA facility headed by Professor John Brand, whom Cooper knows.";
    // $movieTitle1 = new Movie('The Gift');


    // e stampati a schermo i valori delle relative proprietà 
    // echo '<h1>Title: ' . $movieTitle->title . '</h1>';
    // echo '<h1>Plot: ' . $movieTitle->getPlot("A team of explorers travel through a wormhole in space in an attempt to ensure humanity's survival.

    // Earth's future has been riddled by disasters, famines, and droughts. There is only one way to ensure mankind's survival: Interstellar travel. A newly discovered wormhole in the far reaches of our solar system allows a team of astronauts to go where no man has gone before, a planet that may have the right environment to sustain human life.") . '</h1>';


?>
