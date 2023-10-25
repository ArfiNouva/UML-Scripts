<?php

namespace App\Memasak;

class Alat{
    private $namaAlat;

    public function __construct($namaAlat)
    {
        $this->namaAlat = $namaAlat;
    }

    public function getNamaAlat(){
        return $this->namaAlat;
    }
}