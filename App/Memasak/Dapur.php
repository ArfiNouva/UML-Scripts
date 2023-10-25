<?php

namespace App\Memasak;

class Dapur{
    private $komporMenyala;

    public function __construct($komporMenyala)
    {
        $this->komporMenyala = $komporMenyala;
    }

    public function getStatusKompor(){
        return $this->komporMenyala;
    }

    public function nyalakanKompor(){
        $this->komporMenyala = true;
        return "kompor telah dinyalakan";
    }

    public function matikanKompor(){
        $this->komporMenyala = false;
        return "kompor telah dimatikan";
    }
}