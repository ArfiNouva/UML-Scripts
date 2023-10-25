<?php

namespace App\NaikMotor;

class Pengendara {
    private $nama,
            $motor,
            $jalan;

    public function __construct($nama, Motor $motor, Jalan $jalan)
    {
        $this->nama = $nama;
        $this->motor = $motor;
        $this->jalan = $jalan;
    }

    public function kendaraMotor(){
        echo $this->nama . " Sedang Mengendarai " . $this->motor->getMotor() . " " . "Dengan Jarak : " . $this->jalan->getJarak() . " Km";
    }
}