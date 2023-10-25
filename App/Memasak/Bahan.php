<?php

namespace App\Memasak;

class Bahan {
    private $namaBahan;

    public function __construct($namaBahan)
    {
        $this->namaBahan = $namaBahan;
    }

    public function getNamaBahan(){
        return $this->namaBahan;
    }
}