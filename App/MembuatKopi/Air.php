<?php

namespace App\MembuatKopi;

class Air{
    private $suhuAir,
            $ukuranAir;

    public function __construct($suhuAir, $ukuranAir)
    {
        $this->suhuAir = $suhuAir;
        $this->ukuranAir = $ukuranAir;
    }

    public function getInfoAir(){
        return "Suhu Air adalah : {$this->suhuAir} celcius dan Ukurannya {$this->ukuranAir}ml";
    }

    public function setSuhuAir($suhuAir){
        $this->suhuAir = $suhuAir;
    }

    public function setUkuranAir($ukuranAir){
        $this->ukuranAir = $ukuranAir;
    }
}