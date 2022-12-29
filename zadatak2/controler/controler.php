<?php



class Kontroler
{

    public static function ulogujKorisnika(Korisnik $korisnik)
    {
        echo "<br>Ulogovan korisnik: " . $korisnik->getIme() . " " . $korisnik->getPrezime();
    }

    public static function prikaziKandidate(Kandidat ...$listakandidata)
    {
        foreach ($listakandidata as $lk) :
            echo "Obuka kandidata: " . $lk->getStatus();
        endforeach;
    }

    public static function prikaziTabelu($objekti, $nazivi_atributa)
    {
        $headertabele =
            "<thead>
                <tr>";
        foreach ($nazivi_atributa as $th) {
            $headertabele .= "<th>$th</th>";
        }
        $headertabele .=
            " </tr>
            </thead>";

        $reduTabeli =
            "<tbody>";
        //za svakog kandidata u listi kandidata
        foreach ($objekti as $objekat) {
            $reduTabeli .=
                "<tr>";
            foreach ($objekat->konvertujUNiz() as $naziv => $vrednost) {
                if (gettype($vrednost) != "array") {
                    // echo "<br>".$naziv.": ".$vrednost;
                    $reduTabeli .= "<td>" . $vrednost . "</td>";
                }
            }
            $reduTabeli .=
                "</tr>";
        }
        $reduTabeli .=
            "</tbody>";
        $tabela = "<table border='1'>" . $headertabele . " " . $reduTabeli . "</table>";

        echo $tabela;
    }
}
