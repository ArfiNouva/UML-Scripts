<?php

namespace App\MembuatKopi;

class Gelas {
    private $jenisGelas,
            $volume;

    public function __construct($jenisGelas, Kopi $volume)
    {
        $this->jenisGelas = $jenisGelas;
        $this->volume = $volume;
    }

    public function getInfoGelas(){
        return $this->jenisGelas . $this->volume->getInfoKopi();
    }

    public function getVolumeGelas(){
        return $this->volume;
    }
}