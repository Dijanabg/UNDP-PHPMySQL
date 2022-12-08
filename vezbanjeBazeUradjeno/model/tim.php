<?php

class Tim
{
    public $timID;
    public $nazivTima;
    public $drzava;
    public $godinaOsnivanja;
    public $brojTitula;


    public function __construct($timID = null, $nazivTima = null, $drzava = null, $godinaOsnivanja = null, $brojTitula = null)
    {
        $this->timID = $timID;
        $this->nazivTima = $nazivTima;
        $this->drzava = $drzava;
        $this->godinaOsnivanja = $godinaOsnivanja;
        $this->brojTitula = $brojTitula;
    }

    public static function getAll(mysqli $conn)
    {
        $q = "SELECT * FROM tim";
        return $conn->query($q);
    }

    public static function getAllSort(mysqli $conn)
    {
        $q = "SELECT * FROM tim ORDER BY nazivTima ASC";
        return $conn->query($q);
    }

    public static function add($nazivTima, $drzava, $godinaOsnivanja, $brojTitula, $conn)
    {
        $q = "INSERT INTO tim(nazivTima, drzava, godinaOsnivanja, brojTitula) VALUES('$nazivTima', '$drzava', '$godinaOsnivanja', $brojTitula)";
        return $conn->query($q);
    }

    public static function update($timID, $nazivTima, $drzava, $godinaOsnivanja, $brojTitula, $conn)
    {
        $q = "UPDATE tim SET nazivTima='$nazivTima', drzava='$drzava', godinaOsnivanja='$godinaOsnivanja', brojTitula=$brojTitula WHERE timID=$timID";
        return $conn->query($q);
    }

    public static function deleteById($timID, mysqli $conn)
    {
        $q = "DELETE FROM tim WHERE timID=$timID";
        return $conn->query($q);
    }
}
