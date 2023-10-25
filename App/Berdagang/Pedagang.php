<?php

namespace App\Berdagang;

class Pedagang{
    private $namaPedagang,
            $produk,
            $pembeli;
    
    public function __construct($namaPedagang, Produk $produk, Pembeli $pembeli)
    {
        $this->namaPedagang = $namaPedagang;
        $this->produk = $produk;
        $this->pembeli = $pembeli;
    }

    public function jualProduk(){
        return "{$this->namaPedagang} Menjual Produk {$this->produk->getNamaProduk()} Kepada {$this->pembeli->getNama()}";
    }
}