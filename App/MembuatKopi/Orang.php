<?php

namespace App\MembuatKopi;

class Orang {
    private $nama,
            $gelas,
            $air,
            $penggilingKopi,
            $kopi,
            $bijikopi;

    public function __construct($nama, Gelas $gelas, Air $air, PenggilingKopi $penggilingKopi, Kopi $kopi, BijiKopi $bijiKopi)
    {
        $this->nama = $nama;
        $this->gelas = $gelas;
        $this->air = $air;
        $this->penggilingKopi = $penggilingKopi;
        $this->kopi = $kopi;
        $this->bijikopi = $bijiKopi;
    }

    public function minumKopi(){
        return "{$this->nama} sedang meminum {$this->kopi->getInfoKopi()}";
    }
}