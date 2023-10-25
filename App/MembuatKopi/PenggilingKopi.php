<?php

namespace App\MembuatKopi;

class PenggilingKopi{
    private $bijiKopi;

    public function __construct(BijiKopi $bijiKopi)
    {
        $this->bijiKopi = $bijiKopi;
    }

    public function gilingKopi($kehalusan){
        $this->bijiKopi->getJenisBiji() . "Sedang Menggiling dengan tingkat kehalusan : " . $this->bijiKopi->getTingkatKehalusan() . "menjadi " . $this->bijiKopi->setTingkatKehalusan($kehalusan);
    }
}