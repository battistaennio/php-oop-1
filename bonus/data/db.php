<?php

require_once __DIR__ . '/../Models/Movie.php';

$movies = [
    new Movie(
        "Spider-Man", 
        "Sam Raimi", 
        121, 
        2002, 
        ["Tobey Maguire", "Willem Dafoe", "Kirsten Dunst", "James Franco", "J.K. Simmons", "Rosemary Harris", "Cliff Robertson", "Michael Papajohn", "Randy Savage", "Joe Manganiello", "Ted Raimi", "Bill Nunn"], 
        ["action"]
    ),
    new Movie(
        "Ex Machina",
        "Alex Garland",
        108,
        2015,
        ["Domhnall Gleeson", "Oscar Isaac", "Alicia Vikander", "Chelsea Li", "Evie Wray", "Sonoya Mizuno", "Corey Johnson"],
        ["Drammatico", "Fantascienza"]
    ),
];
