<?php

namespace App\Karaoke;

class Musik {
    private $judulLagu;

    public function __construct($judulLagu)
    {
        $this->judulLagu = $judulLagu;
    }

    public function getInfoMusik(){
        return "{$this->judulLagu}";
    }
}