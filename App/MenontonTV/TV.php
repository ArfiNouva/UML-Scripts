<?php 

namespace App\MenontonTV;

class TV{
    private $statusTV;

    public function __construct($statusTV)
    {
        $this->statusTV = $statusTV;
    }

    public function getStatus(){
        return $this->statusTV;
    }

    public function tvMenyala(){
        $this->statusTV = true;
            return "TV telah dinyalakan";
    }

    public function matikanTV(){
        $this->statusTV = false;
            return "TV telah dimatikan";
        }
    }
