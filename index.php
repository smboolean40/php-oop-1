<?php
require __DIR__ . '/classes/Movie.php';
require __DIR__ . '/classes/Actor.php';

// Films

$matrix = new Movie("The Matrix", "Andy e Larry Wachowski", 1999, 136);
$via_col_vento = new Movie("Via col vento", "Victor Fleming", 1939, 238);

// Attori

$keanu = new Actor("Keanu", "Reeves", "02-09-1964", "Beirut");
$laurence = new Actor("Laurence", "Fishburne", "30-07-1961", "Augusta");

$matrix->setAttori($keanu);
$matrix->setAttori($laurence);

$via_col_vento->setAttori($keanu);

foreach($matrix->getAttori() as $attore) {
	echo "<h2>{$attore->getNome()} {$attore->getCognome()}</h2>";
}