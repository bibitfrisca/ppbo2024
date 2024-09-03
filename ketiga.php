<?php


class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;


    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }


    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}



class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume() : float 
    {
        return (4/3)*self::PHI*pow($this->jari_jari, 3);
    }
}


class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float 
    {
        return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}


class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float 
    {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}


$nasi_tumpeng = new Kerucut();
$nasi_tumpeng->jari_jari = 4;
$nasi_tumpeng->tinggi = 10;
$hasil = $nasi_tumpeng->volume();
echo "Volume nasi tumpeng tersebut adalah {$hasil}\n";

// implementasi rumus lingkaran
$meja_bundar  = new Lingkaran();
$meja_bundar->jari_jari = 4;
$hasil = $meja_bundar->luas();
$hasil = $meja_bundar->keliling();
echo "Luas meja bundar tersebut adalah {$hasil}";
echo "Keliling meja bundar tersebut adalah {$hasil}\n";

// implementasi rumus bola
$bola_voli = new Bola();
$bola_voli->jari_jari = 4;
$hasil = $bola_voli->volume();
echo "Volume bola voli tersebut adalah {$hasil}\n";

// implementasi rumus tabung
$tabung_celengan = new Tabung();
$tabung_celengan->jari_jari = 4;
$tabung_celengan->tinggi = 10;
$hasil = $tabung_celengan->volume();
echo "Volume tabung celengan tersebut adalah {$hasil}\n";

// implementasi rumus kerucut
$topi_kerucut = new Kerucut();
$topi_kerucut->jari_jari = 4;
$topi_kerucut->tinggi = 10;
$hasil = $topi_kerucut->volume();
echo "Volume topi kerucut tersebut adalah {$hasil}\n";