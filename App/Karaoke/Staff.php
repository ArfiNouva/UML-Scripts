<?php

namespace App\Karaoke;

class Staff {
    private $namaStaff,
            $ruangan;

    public function __construct($namaStaff, $ruangan)
    {
        $this->namaStaff = $namaStaff;
        $this->ruangan = $ruangan;
    }

    public function getInfoStaff(){
        return "{$this->namaStaff}";
    }

    public function getInfoRuangan(){
        return "{$this->ruangan}";
    }
}