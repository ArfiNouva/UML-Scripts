<?php

require "App/initGame.php";
use App\Gaming\Game;
use App\Gaming\Hero;
use App\Gaming\Player;

$hero1 = new Hero(200, 50, "Alucard");
$hero2 = new Hero(250, 30, "Dracula");

$player1 = new Player("Asep", $hero1);
$player2 = new Player("Kuningan", $hero2);

$game = new Game($player1, $player2, $hero1, $hero2);
echo $player1->getInfoPlayer() . "<br> Vs. <br>" . $player2->getInfoPlayer() . "<br>";