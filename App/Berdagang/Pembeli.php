<?php

namespace App\Berdagang;

class Pembeli {
    private $nama,
            $produk;
    
    public function __construct($nama, Produk $produk)
    {
        $this->nama = $nama;
        $this->produk = $produk;
    }

    public function getNama(){
        return $this->nama;
    }

    public function beliProduk(){
        echo "{$this->nama} Membeli Produk {$this->produk->getNamaProduk()}";
    }
}