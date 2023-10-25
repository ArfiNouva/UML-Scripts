<?php

namespace App\Perpustakaan;

class Buku{
    private $judul,
            $jmlHalaman,
            $penulis,
            $harga;

    public function __construct($judul, $jmlHalaman, $penulis, $harga)
    {
        $this->judul = $judul;
        $this->jmlHalaman = $jmlHalaman;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function getDetailBuku(){
        return "Judul Buku : {$this->judul} <br>
                Jumlah Halaman : {$this->jmlHalaman} <br>
                Nama Penulis : {$this->penulis} <br>
                Harga : {$this->harga}";
    }
}