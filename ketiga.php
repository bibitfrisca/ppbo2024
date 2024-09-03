<?php


class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;


    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }


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

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

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

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

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

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float 
    {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

$nasi_tumpeng = new Kerucut(4, 10);
echo "Volume nasi tumpeng tersebut adalah " . $nasi_tumpeng->volume();

//implementasi lingkaran
$lingkaran = new Lingkaran(4);
echo "\nLuas lingkaran tersebut adalah " . $lingkaran->luas();
echo "\nKeliling lingkaran tersebut adalah " . $lingkaran->keliling();

//implementasi bola
$bola = new Bola(4);
echo "\nVolume bola tersebut adalah " . $bola->volume();

//implementasi tabung
$tabung = new Tabung(4, 10);
echo "\nVolume tabung tersebut adalah " . $bola->volume();

#implementasi kerucut
$kerucut = new Kerucut(4, 10);
echo "\nVolume kerucut tersebut adalah " . $kerucut->volume();