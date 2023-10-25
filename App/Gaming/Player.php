<?php

namespace App\Gaming;

class Player{
    private $namaPlayer,
            $hero;

    public function __construct($namaPlayer, Hero $hero)
    {
        $this->namaPlayer = $namaPlayer;
        $this->hero = $hero;
    }

    public function pilihHero(){
        return "{$this->namaPlayer} telah memilih {$this->hero->getNamaHero()} sebagai jagoannya!";
    }

    public function getInfoPlayer(){
        return "Nama Player : {$this->namaPlayer} <br> Hero Yang dipilih : {$this->hero->getInfoHero()}";
    }

}