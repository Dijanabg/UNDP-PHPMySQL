<?php



abstract class Korisnik
{
    use Obrada;
    protected $ime;
    protected $prezime;
    protected $email;
    protected $telefon;
    protected $sifra;
    protected $kategorijaKorisnika;

    public function __construct($ime, $prezime, $email, $sifra, $tel, $kategorijaKorisnika)
    {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->email = $email;
        $this->tel = $tel;
        $this->sifra = $sifra;
        $this->kategorijaKorisnika = $kategorijaKorisnika;
    }
    abstract public function getIme();
    abstract public function setIme($imekorisnika);
    abstract public function getPrezime();
    abstract public function setPrezime($prezimekorisnika);
    abstract public function getEmail();
    abstract public function setEmail($emailkorisnika);
    abstract public function getSifra();
    abstract public function setSifra($sifrakorisnika);
    abstract public function getTelefon();
    abstract public function setTelefon($telefonkorisnika);
    abstract public function getKategorijaKorisnika();
    abstract public function setKategorijaKorisnika($kategorijaKorisnika);
}
