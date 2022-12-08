<?php

function getAllCsv()
{


    $data = [];

    $fileName = 'files/stocks.csv';

    $fileResourse = fopen($fileName, 'r');

    if ($fileResourse === false) {
        die('Error open' . $fileName);
    }
    //citamo red po red iz csv fajla

    while (($row = fgetcsv($fileResourse)) != false) {
        $data[] = $row;
    }
    //zatvaranje fajla

    fclose($fileResourse);

    //print_r($data);
    return $data;
}
