<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 

Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.

Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. -->


<?php

require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/data/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>

    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div id="wrapper">

      <div class="card">

        <img src="https://mr.comingsoon.it/imgdb/locandine/235x336/1058.jpg" alt="">

        <div class="card-details">

          <div class="details-section">
            <h2>Titolo</h2>
          </div>

          <div class="details-section">
            <h4>Regia:</h4>
            <span>regista</span>
          </div>
          
          <div class="details-section">
            <h4>durata:</h4>
            <span>minuti</span>
          </div>
          
          <div class="details-section">
            <h4>Anno di pubblicazione:</h4>
            <span>2024</span>
          </div>
          
          <div class="details-section">
            <h4>genere:</h4>
            <span>azione</span>
          </div>
          
          <div class="details-section">
            <h4>Cast:</h4>
            <p>cast</p>
          </div>
          
        </div>

      </div>

    </div>
</body>
</html>