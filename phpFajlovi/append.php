<?php

$fileName = "files/testAppend.txt";

//w pisanje w+ i citanje

$fileResourse = fopen($fileName, 'a');

//alp ne postoji napravice novi fajl
//ako fajl postoji,  upisace nove vrednosti na kraj fajla

$fileSize = filesize($fileName);

fwrite($fileResourse, " Neki teks koji zelim da upisem");


fclose($fileResourse);
