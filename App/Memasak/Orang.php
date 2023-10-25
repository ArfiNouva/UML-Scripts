<?php

namespace App\Memasak;

class Orang {
    private $nama,
            $alatMasak,
            $bahanMasak,
            $isMemasak;
    
    public function __construct($nama, Alat $alatMasak , Bahan $bahanMasak, $isMemasak)
    {
        $this->nama = $nama;
        $this->alatMasak = $alatMasak;
        $this->bahanMasak = $bahanMasak;
        $this->isMemasak = $isMemasak;
    }

    public function mulaiMasak(){
        $this->isMemasak = true;
    }

    public function getDetail(){
        return "{$this->nama} sedang memasak {$this->bahanMasak->getNamaBahan()} dengan alat {$this->alatMasak->getNamaAlat()}";
    }

    public function berhentiMasak(){
        $this->isMemasak = false;
    }
}