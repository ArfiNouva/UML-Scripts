<?php

namespace App\Berdagang;

class Produk {
    private $namaProduk,
            $harga;

    public function __construct($namaProduk, $harga)
    {
        $this->namaProduk = $namaProduk;
        $this->harga = $harga;
    }

    public function getInfoProduk(){
        return "Nama Produk : " . $this->namaProduk . "<br> Harga Produk : " . $this->harga;
    }

    public function getNamaProduk(){
        return $this->namaProduk;   
    }
}