<?php

namespace App\Karaoke;

class Pengunjung {
    private $namaPengunjung,
            $musik,
            $ruangan;
    
    public function __construct($namaPengunjung, Musik $musik, Staff $ruangan)
    {
        $this->namaPengunjung = $namaPengunjung;
        $this->musik = $musik;
        $this->ruangan = $ruangan;
    }

    public function getInfoPengunjung(){
        return "{$this->namaPengunjung}";
    }

    public function bernyanyi(){
        return "{$this->namaPengunjung} sedang menyanyikan lagu {$this->musik->getInfoMusik()}";
    }

    public function sewaRuangan(){
        return "{$this->namaPengunjung} bertemu dengan staff {$this->ruangan->getInfoStaff()} untuk sewa ruangan {$this->ruangan->getInfoRuangan()} ";
    }
}