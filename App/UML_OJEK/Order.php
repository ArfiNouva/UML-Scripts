<?php

namespace App\UML_OJEK;

class Order{
    private $titikAwal,
            $titikAkhir,
            $jarak,
            $harga;

    public function __construct($titikAwal,$titikAkhir, $jarak, $harga)
    {
        $this->titikAwal = $titikAwal;
        $this->titikAkhir = $titikAkhir;
        $this->jarak = $jarak;
        $this->harga = $harga;
    }

    public function getDetailOrder(){
        return "Titik awal : {$this->titikAwal} <br> Titik Akhir : {$this->titikAkhir} <br> Jarak : {$this->jarak}Km <br> Harga : {$this->harga}";
               
    }

    public function getTitikAkhir(){
        return $this->titikAkhir;
    }

    public function getJarak(){
        return $this->jarak;
    }

    public function getHarga(){
        return $this->harga;
    }
}