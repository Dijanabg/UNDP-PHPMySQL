<?php

include "controler/controler.php";
include "data.php";


if (!isset($_SESSION["logovani_korisnik"])) {
    header("Location: view/login.php");
} else {
    $korisnik = $_SESSION["logovani_korisnik"];
    include "view/header.php";
    if ($korisnik->getKategorijaKorisnika() == "kandidat") {
        include "view/kandidatZ.php";
        exit();
    } else if ($korisnik->getKategorijaKorisnika() == "predavac") {
        include "view/predavacZ.php";
        exit();
    } else if ($korisnik->getKategorijaKorisnika() == "admin") {
        include "view/administrator.php";
        exit();
    } else {
        echo "404";
        exit();
    }
}
