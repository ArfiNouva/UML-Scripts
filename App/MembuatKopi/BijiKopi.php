<?php

namespace App\MembuatKopi;

class BijiKopi{
    private $jenisBiji,
            $tingkatKehalusan;

    public function __construct($jenisBiji, $tingkatKehalusan)
    {
        $this->jenisBiji =$jenisBiji;
        $this->tingkatKehalusan = $tingkatKehalusan;
    }

    public function getInfoBiji(){
        return $this->jenisBiji . $this->tingkatKehalusan;
    }

    public function getJenisBiji(){
        return $this->jenisBiji;
    }

    public function getTingkatKehalusan(){
        return $this->tingkatKehalusan;
    }

    public function setTingkatKehalusan($kehalusan){
        $this->tingkatKehalusan = $kehalusan;
    }
}