<?php

namespace App\Gaming;

class Game{
    private $player1,
            $player2,
            $hero1,
            $winner = null,
            $hero2;

    public function __construct(Player $player1, Player $player2, Hero $hero1, Hero $hero2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
        $this->hero1= $hero1;
        $this->hero2 = $hero2;
    }

    public function mulaiGame(){
        while($this->hero1->getHP() > 0 && $this->hero2->getHP() > 0){
            $this->hero1->attack($this->hero2);
            $this->hero2->attack($this->hero1);
        }

        if ($this->hero1->getHP() <= 0) {
            $this->winner = $this->player2->getInfoPlayer();
        } else { // Jika HP hero 2 mencapai 0, player 1 dinyatakan sebagai pemenang
            $this->winner = $this->player1->getInfoPlayer();
        }
    }
}