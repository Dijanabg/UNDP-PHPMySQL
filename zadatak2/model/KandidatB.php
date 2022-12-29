<?php



class KandidatB extends Korisnik implements Kandidat
{
    private $status = "B";
    private $id;

    public function __construct($ime, $prezime, $email, $sifra, $telefon, $kategorijaKorisnika, $id)
    {
        parent::__construct($ime, $prezime, $email, $sifra, $telefon, $kategorijaKorisnika);
        $this->id = $id;
    }

    public function getIme()
    {
        return $this->ime;
    }

    public function setIme($imekorisnika)
    {
        $this->ime = $imekorisnika;
    }

    public function getPrezime()
    {
        return $this->prezime;
    }

    public function setPrezime($prezimekorisnika)
    {
        $this->prezime = $prezimekorisnika;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($emailkorisnika)
    {
        $this->email = $emailkorisnika;
    }

    public function getSifra()
    {
        return $this->sifra;
    }

    public function setSifra($sifrakorisnika)
    {
        $this->sifra = $sifrakorisnika;
    }

    public function getTelefon()
    {
        return $this->telefon;
    }

    public function setTelefon($telefonkorisnika)
    {
        $this->telefon = $telefonkorisnika;
    }

    public function getKategorijaKorisnika()
    {
        return $this->kategorijaKorisnika;
    }

    public function setKategorijaKorisnika($kategorijaKorisnika)
    {
        $this->kategorijaKorisnika = $kategorijaKorisnika;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}
