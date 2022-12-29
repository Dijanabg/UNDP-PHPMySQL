<?php



class Ocena
{
    protected Kandidat $kandidat;
    protected Obuka $obuka;
    protected Predavac $predavac;
    protected int $poeni;
    protected string $datum;

    public function __construct(Kandidat $kandidat, Obuka $obuka, Predavac $predavac, int $poeni, string $datum)
    {
        $this->kandidat = $kandidat;
        $this->obuka = $obuka;
        $this->predavac = $predavac;
        $this->poeni = $poeni;
        $this->datum = $datum;
    }

    public function setKandidat(Kandidat $kandidat): self
    {
        $this->kandidat = $kandidat;
        return $this;
    }

    public function getKandidat(): Kandidat
    {
        return $this->student;
    }

    public function setObuka(Obuka $obuka): self
    {
        $this->obuka = $obuka;
        return $this;
    }

    public function getObuka(): Obuka
    {
        return $this->predmet;
    }

    public function setPredavac(Predavac $predavac): self
    {
        $this->predavac = $predavac;
        return $this;
    }

    public function getPredavac(): Predavac
    {
        return $this->predavac;
    }

    public function setPoeni(int $poeni): self
    {
        $this->poeni = $poeni;
        return $this;
    }

    public function getPoeni(): int
    {
        return $this->ocena;
    }

    public function setDatum(string $datum): self
    {
        $this->datum = $datum;
        return $this;
    }

    public function getDatum(): string
    {
        return $this->datum;
    }
}
