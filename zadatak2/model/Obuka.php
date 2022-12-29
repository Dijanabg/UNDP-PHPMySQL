<?php



class Obuka
{
    use Obrada;
    protected $naziv;
    protected $sifra;
    protected $kategorijaObuke;
    protected $spisakKandidata;
    protected $spisakPredavaca;


    public function __construct($naziv, $sifra, $kategorijaObuke)
    {
        $this->naziv = $naziv;
        $this->sifra = $sifra;
        $this->kategorijaObuke = $kategorijaObuke;
        $this->spisakKandidata = array();
        $this->spisakPredavaca = array();
    }


    public function getNaziv()
    {
        return $this->naziv;
    }

    public function setNaziv($naziv)
    {
        $this->naziv = $naziv;
    }

    public function getSifra()
    {
        return $this->sifra;
    }

    public function setSifra($sifra)
    {
        $this->sifra = $sifra;
    }

    public function getKategorijaObuke()
    {
        return $this->kategorijaObuke;
    }

    public function setKategorijaObuke($kategorijaObuke)
    {
        $this->kategorijaObuke = $kategorijaObuke;
    }

    public function setSpisakKandidata($spisakKandidata)
    {
        $this->spisakKandidata = $spisakKandidata;
    }

    public function getSpisakKandidata()
    {
        return $this->spisakKandidata;
    }

    public function setSpisakPredavaca($spisakPredavaca)
    {
        $this->spisakPredavaca = $spisakPredavaca;
    }

    public function getSpisakPredavaca()
    {
        return $this->spisakPredavaca;
    }
}
