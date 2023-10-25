<?php

namespace App\MenontonTV;

class RemoteTV {
    private $statusTV,
            $namaR;

    public function __construct(TV $statusTV, $namaR)
    {
        $this->statusTV = $statusTV;
        $this->namaR = $namaR;
    }

    public function getNamaR(){
        return "{$this->namaR}";
    }

    public function nyalakanTV(){
        $this->statusTV = true;
        return "Tv telah dinyalakan";
    }

    public function matikanTV(){
        $this->statusTV = false;
        return "tv telah dimatikan";
    }
}