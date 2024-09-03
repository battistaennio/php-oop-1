<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?php

class Movie{

    public $title;
    public $director;
    public $runningTime;
    public $releseYear;
    public $cast = [];
    public $genres = [];

    public function __construct($_title, $_director, $_runningTime, $_releseYear, $_cast, $_genres){
        $this->title = $_title;
        $this->director = $_director;
        $this->runningTime = $_runningTime;
        $this->releseYear = $_releseYear;
        $this->cast = $_cast;
        $this->genres = $_genres;
    }

    public function addActor($_actor){
        $this->cast[] = $_actor;
    }  
}

$spiderMan = new Movie(
    "Spider-Man", 
    "Sam Raimi", 
    121, 
    2002, 
    ["Tobey Maguire", "Willem Dafoe", "Kirsten Dunst", "James Franco", "J.K. Simmons", "Rosemary Harris", "Cliff Robertson", "Michael Papajohn", "Randy Savage", "Joe Manganiello", "Ted Raimi", "Bill Nunn"], 
    ["action"]
);

$spiderMan->addActor("Macy Gray");

var_dump($spiderMan)

?>