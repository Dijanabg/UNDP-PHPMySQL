<?php


//echo "<br> sadrzaj za kandidata";

$obuka = $_SESSION["obuka"];
$mojaObuka = [];

foreach ($obuka as $mo) {
    if ($mo->getKategorijaObuke() == $korisnik->getStatus()) {
        array_push($mojaObuka, $mo);
    }
}

// foreach($mojipredmeti as $pred){
//     print_r($pred->konvertujUNiz());

// };

Kontroler::prikaziTabelu($mojaObuka, ["naziv", "sifra", "kategorijaObuke"]);
