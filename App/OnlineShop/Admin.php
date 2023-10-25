<?php

namespace App\OnlineShop;

class Admin extends User{
    private $produk;

    public function __construct($nama, Produk $produk)
    {
        $this->nama = $nama;
        $this->produk = $produk;
    }

    public function getAdminName(){
        echo $this->nama;
    }

    public function getProduk(){
        return "{$this->nama} memiliki produk {$this->produk->getInfoProduk()}";
    }
}