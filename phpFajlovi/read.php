<?php


$fileName = "files/testFile.txt";
//r mod za citanje r+  r+w
//w pisanje w+ i citanje
//a dodavanje u fajl a+ i citanje
$fileResourse = fopen($fileName, 'r');

//echo ($fileResourse);

$fileSize = filesize($fileName);

//cita ceo fajl kao string
//$fileText = fread($fileResourse, $fileSize);

//cita fajl po liniju i smesta u niz

$fileText2 = file($fileName);

//citanje pomocu petlje

while (!feof($fileResourse)) {
    //echo fgets($fileResourse);
    echo str_replace("\r\n", "<br>", fgets($fileResourse));
}

fclose($fileResourse);

//print_r($fileText2);
