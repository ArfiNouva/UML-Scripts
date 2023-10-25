<?php

namespace App\OnlineShop;

class Customer extends User{
    private $produk;

    public function __construct($namaCustomer, Produk $produk)
    {
        $this->nama = $namaCustomer;
        $this->produk = $produk;
    }

    public function getProduk(){
        return "{$this->nama} membeli sebuah produk : {$this->produk->getInfoProduk()}";
    }
}