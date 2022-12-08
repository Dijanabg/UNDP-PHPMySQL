<?php

function addRowCsv($simbol, $kompanija, $cena)
{

    $data = [$simbol, $kompanija, $cena];

    $fileName = 'files/stocks.csv';

    $fileResourse = fopen($fileName, 'a');

    if ($fileResourse === false) {
        die('Error open' . $fileName);
    }
    //upisujemo red u .csv fajl
    fputcsv($fileResourse, $data);

    //zatvaranje fajla

    fclose($fileResourse);
}
