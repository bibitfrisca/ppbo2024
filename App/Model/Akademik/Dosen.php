<?php

use App\Model\Akademik\Pegawai;

class Dosen extends Pegawai{
    public string $nidn;

    public function mengajar(): void{
        echo "{$this->nama} sedang mengajar perkuliahan";
    }
}