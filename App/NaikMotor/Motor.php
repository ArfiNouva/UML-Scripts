<?php

namespace App\NaikMotor;

class Motor {
    private $mesinHidup,
            $namaMotor;

    public function __construct($mesinHidup = false, $namaMotor)
    {
        $this->mesinHidup = $mesinHidup;
        $this->namaMotor = $namaMotor;
    }

    public function isMesinHidup(){
        $this->mesinHidup;
    }

    public function getMotor(){
        return "Nama Motor : " . $this->namaMotor;
    }

    public function hidupkanMesin(){
        if(!$this->mesinHidup) {
            $this->mesinHidup = true;
            echo "Mesin Motor Telah Dihidupkan";
        } else {
            echo "Mesin Sudah Hidup..";
        }
    }

    public function matikanMesin(){
        if($this->mesinHidup) {
            $this->mesinHidup = false;
            echo "Mesin Motor telah dimatikan";
        } else {
            echo "Mesin Motor sudah mati...";
        }
    }
}