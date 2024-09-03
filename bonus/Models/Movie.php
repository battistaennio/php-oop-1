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
