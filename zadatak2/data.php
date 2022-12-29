<?php
include "utility/obrada.php";
include "model/Korisnik.php";
include "model/Kandidat.php";
include "model/KandidatB.php";
include "model/KandidatC.php";
include "model/KandidatD.php";
include "model/Predavac.php";
include "model/Admin.php";
include "model/Obuka.php";
include "model/Poeni.php";



session_start();

$kb = new KandidatB("Jelena", "Jovanovic", "jeka@gmail.com", "jeka", "064555666", "kandidat", 1);
$kc = new KandidatC("Marko", "Markovic", "mare@gmail.com", "mare", "064333666", "kandidat", 2);
$kd = new KandidatD("Petar", "Petrovic", "pele@gmail.com", "pele", "064777888", "kandidat", 3);
$pr = new Predavac("Jovan", "Jovanovic", "jole@gmail.com", "jole", "064111222", "predavac");
$pr1 = new Predavac("Jelen", "Jovanovic", "keka@gmail.com", "keka", "064552666", "predavac");
$pr2 = new Predavac("Uros", "Urosevic", "uki@gmail.com", "urke", "064999888", "predavac");
$pr3 = new Predavac("Milos", "Milosevic", "miske@gmail.com", "miske", "064999788", "predavac");
$ad = new Admin("admin", "admin", "admin@gmail.com", "admin", "061332152", "admin");

$nizKorisnika = [$kb, $kc, $ad, $kd, $pr, $pr1, $pr2, $pr3];
$nizPredavaca = [$pr, $pr1, $pr2, $pr3];

$oB = new Obuka("Znakovi upozorenja", "1222", "B");
$oB1 = new Obuka("Znakovi zabrane", "2212", "B");
$oB3 = new Obuka("Raskrsnice", "1122", "B");
$oC = new Obuka("Raskrsnice", "3333", "C");
$oD = new Obuka("D kategorija", "4444", "D");

$oB->setSpisakPredavaca([$pr]);
$oB1->setSpisakPredavaca([$pr]);
$oB3->setSpisakPredavaca([$pr]);
$oC->setSpisakPredavaca([$pr2]);
$oD->setSpisakPredavaca([$pr3]);

$nizObuka = [$oB, $oB1, $oB3, $oC, $oD];

$_SESSION["obuka"] = $nizObuka;
$_SESSION["users"] = $nizKorisnika;
