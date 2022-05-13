<?php
// è definita una classe ‘Movie’
    class Movie {
        // => all'interno della classe sono dichiarate delle variabili d'istanza
        public $title;
        public $plot;

        // => all'interno della classe è definito un costruttore
        function __construct($title){
            $this->title = $title;
        
        }
        // => all'interno della classe è definito almeno un metodo
        public function getTitle(){
            return $this->title;
        }
        public function getPlot($plot){
            return $plot;
        }
       
    }


    // vengono istanziati almeno due oggetti ‘Movie’
    $movieTitle = new Movie('Interstellar');

    // e stampati a schermo i valori delle relative proprietà 
    echo '<h1>Titolo: ' . $movieTitle->title . '</h1>';
    echo '<h1>Titolo: ' . $movieTitle->getPlot("A team of explorers travel through a wormhole in space in an attempt to ensure humanity's survival.

    Earth's future has been riddled by disasters, famines, and droughts. There is only one way to ensure mankind's survival: Interstellar travel. A newly discovered wormhole in the far reaches of our solar system allows a team of astronauts to go where no man has gone before, a planet that may have the right environment to sustain human life.") . '</h1>';
?>
