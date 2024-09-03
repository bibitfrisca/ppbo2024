<?php


function luasLingkaran($jari) : float 
{
    $luas = 3.14*$jari*$jari;
    return $luas;
}

function kelilingLingkaran($jari) : float
{
    $keliling = 3.14*$jari*2;
    return $keliling;
}

function volumeBola($jari) : float
{
    $volume_bola = 4/3*3.14*$jari**3;
    return $volume_bola;
}

function volumeTabung($jari, $tinggi) : float
{
    $volume_tabung = luasLingkaran($jari)*$tinggi;
    return $volume_tabung;
}

function volumeKerucut($jari, $tinggi) : float
{
    $volume_kerucut = 1/3 * luasLingkaran($jari) * $tinggi;
    return $volume_kerucut;
}

$jari = readline("Masukkan jari-jari : ");
$tinggi = readline(("Masukkan tinggi : "));

$luas_lingkaran = luasLingkaran($jari);
echo "Luas Lingkaran tersebut adalah {$luas_lingkaran}\n";

$keliling_lingkaran = kelilingLingkaran($jari);
echo "Keliling Lingkaran tersebut adalah {$keliling_lingkaran}\n";

$volume_bola = volumeBola($jari);
echo "Volume Bola tersebut adalah {$volume_bola}\n";

$volume_tabung = volumeTabung($jari, $tinggi);
echo "Volume Tabung tersebut adalah {$volume_tabung}\n";

$volume_kerucut = volumeKerucut($jari, $tinggi);
echo "Volume Kerucut tersebut adalah {$volume_kerucut}\n";