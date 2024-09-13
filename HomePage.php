<?php
class HomePage
{
    function tampil() : void {
        echo "Halaman Depan Guest";
    }
}


class HomePage
{
    function tampil() : void {
        echo "Halaman Depan Admin";
    }
}


$hp = new HomePage();
$hp->tampil();