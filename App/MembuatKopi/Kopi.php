<?php

namespace App\MembuatKopi;

class Kopi {
    private $jenisKopi,
            $air;

    public function __construct(BijiKopi $jenisKopi, Air $air)
    {
        $this->jenisKopi = $jenisKopi;
        $this->air = $air;
    }

    public function getInfoKopi(){
        return "Jenis Kopi : {$this->jenisKopi->getJenisBiji()} <br> {$this->air->getInfoAir()}";
    }
}