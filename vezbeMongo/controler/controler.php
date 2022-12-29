<?php

class Kontroler
{

    public static function login($email, $sifra,)
    {
        global $coll_korisnici;
        $doc = $coll_korisnici->findOne(['email' => $email, 'sifra' => $sifra]);
        return $doc;
    }

    public static function getAdministrator($obj)
    {
        return new Administrator($obj->ime, $obj->prezime, $obj->email, $obj->sifra, $obj->jmbg, $obj->telefon, $obj->tip);
    }

    public static function prikaziStudente(Student ...$listastudenata)
    {
        foreach ($listastudenata as $st) :
            echo "Status studenta: " . $st->getStatus();
        endforeach;
    }

    public static function prikaziTabelu($objekti, $nazivi_atributa)
    {
        $headertabele = "<thead><tr>";
        foreach ($nazivi_atributa as $th) {
            $headertabele .= "<th>$th</th>";
        }
        $headertabele .= " </tr></thead>";
        $reduTabeli = "<tbody>";
        foreach ($objekti as $objekat) { //za svakog studenta u listi studenata
            $reduTabeli .= "<tr>";
            foreach ($objekat->konvertujUNiz() as $naziv => $vrednost) {
                if (gettype($vrednost) != "array") {
                    // echo "<br>".$naziv.": ".$vrednost;
                    $reduTabeli .= "<td>" . $vrednost . "</td>";
                }
            }
            $reduTabeli .= "</tr>";
        }
        $reduTabeli .= "</tbody>";
        $tabela = "<table border='1'>" . $headertabele . " " . $reduTabeli . "</table>";

        echo $tabela;
    }
}
