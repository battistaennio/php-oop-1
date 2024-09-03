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
    new Movie(
        "Inception",
        "https://mr.comingsoon.it/imgdb/locandine/235x336/47397.jpg",
        "Christopher Nolan",
        148,
        2010,
        ["Leonardo DiCaprio", "Marion Cotillard", "Elliot Page", "Cillian Murphy", "Michael Caine", "Ken Watanabe", "Joseph Gordon-Levitt", "Tom Hardy", "Tom Berenger", "Lukas Haas", "Tohoru Masamune", "Claire Geare", "Johnathan Geare", "Carl Gilliard", "Daniel Girondeaud", "Mobin Khan", "Yuji Okumoto", "Nicole Pulliam", "Dileep Rao", "Talulah Riley"],
        ["Fantascienza", "Thriller", "Azione"]
    ),
    new Movie(
        "Avatar",
        "https://mr.comingsoon.it/imgdb/locandine/235x336/846.jpg",
        "James Cameron",
        166,
        2009,
        ["Sam Worthington", "Sigourney Weaver", "Giovanni Ribisi", "Michelle Rodriguez", "Zoe Saldana", "Joel David Moore", "Laz Alonzo", "Wes Studi", "Stephen Lang", "Peter Mensah", "CCH Pounder", "Dileep Rao", "Matt Gerald", "Scott Lawrence", "Jacob Tomuri"],
        ["Fantascienza", "Thriller", "Avventura", "Azione"]
    ),


];
