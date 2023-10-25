<?php

namespace App\OnlineShop;

class Produk {
    private $namaProduk,
            $harga;

    public function __construct($namaProduk, $harga)
    {
        $this->namaProduk = $namaProduk;
        $this->harga = $harga;
    }

    public function getInfoProduk(){
        return "{$this->namaProduk} dengan harga {$this->harga}";
    }

}