<?php

$data = [
    ['Simbol', 'Kompanija', 'Cena'],
    ['GOOG', 'Google', '800'],
    ['AAPL', 'Apple', '500'],
    ['YHOO', 'Yahoo!', '250'],
];

$fileName = 'files/stocks.csv';

$fileResourse = fopen($fileName, 'w');

if ($fileResourse === false) {
    die('Error open' . $fileName);
}
//upisujemo red po red

foreach ($data as $row) {
    fputcsv($fileResourse, $row);
}

//zatvaranje fajla

fclose($fileResourse);
