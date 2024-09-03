<?php

require_once __DIR__ . '/../Models/Movie.php';

$movies = [
    new Movie(
        "Spider-Man",
        "https://mr.comingsoon.it/imgdb/locandine/235x336/1058.jpg",
        "Sam Raimi", 
        121, 
        2002, 
        ["Tobey Maguire", "Willem Dafoe", "Kirsten Dunst", "James Franco", "J.K. Simmons", "Rosemary Harris", "Cliff Robertson", "Michael Papajohn", "Randy Savage", "Joe Manganiello", "Ted Raimi", "Bill Nunn"], 
        ["Action"]
    ),
    new Movie(
        "Ex Machina",
        "https://mr.comingsoon.it/imgdb/locandine/235x336/50898.jpg",
        "Alex Garland",
        108,
        2015,
        ["Domhnall Gleeson", "Oscar Isaac", "Alicia Vikander", "Chelsea Li", "Evie Wray", "Sonoya Mizuno", "Corey Johnson"],
        ["Drammatico", "Fantascienza"]
    ),
];
