<?php

$fileName = "files/testWrite.txt";

//w pisanje w+ i citanje

$fileResourse = fopen($fileName, 'w');

//alp ne postoji napravice novi fajl
//ako fajl postoji, obrisace sve iz njega i upisati nove vrednosti

$fileSize = filesize($fileName);

fwrite($fileResourse, " Neki teks koji zelim da upisem");


fclose($fileResourse);
