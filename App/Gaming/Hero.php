<?php

namespace App\Gaming;

class Hero{
    private $hpHero,
            $atkHero,
            $namaHero;

    public function __construct($hpHero, $atkHero, $namaHero){
        $this->hpHero = $hpHero;
        $this->atkHero = $atkHero;
        $this->namaHero = $namaHero;
    }

    public function getHP(){
        return $this->hpHero;
    }

    public function getNamaHero(){
        return $this->namaHero;
    }

    public function getInfoHero(){
        return $this->namaHero . " Hp : " . $this->hpHero . " Atk : " . $this->atkHero;
    }


    public function attack(Hero $target){
        $target->kurangiHP($this->atkHero);
    }

    public function kurangiHP($hero){
        return $this->hpHero - ($this->hpHero - $this->atkHero);
        if($this->hpHero < 0){
            $this->hpHero = 0;
        }
    }
    
}