<?php

namespace App\Perpustakaan;

class Pengunjung{
    private $namaPengunjung,
            $kartuPerpustakaan,
            $buku;

    public function __construct($namaPengunjung, $kartuPerpustakaan = false, Buku $buku)
    {
        $this->namaPengunjung = $namaPengunjung;
        $this->kartuPerpustakaan = $kartuPerpustakaan;
        $this->buku = $buku;
    }

    public function validasiKartuPengunjung(){
        if($this->kartuPerpustakaan = false){
            return 'Pengunjung : ' . $this->namaPengunjung . 'Memiliki kartu? : ' . $this->kartuPerpustakaan;
        } else {
            return "Pengunjung : {$this->namaPengunjung} Memiliki kartu? : {$this->kartuPerpustakaan}";
        }
    }

    public function getPengunjung(){
        return "Nama Pengunjung : {$this->namaPengunjung} <br>
                Buku Yang dipinjam : {$this->buku->getJudul()}";
    }

    public function getNamaPengunjung(){
        return $this->namaPengunjung;
    }

    public function pinjamBuku(){
        if($this->kartuPerpustakaan = false){
            return "Kamu tidak bisa meminjam buku ini karena tidak memiliki kartu.";
        } else {
            return "{$this->namaPengunjung} telah meminjam buku {$this->buku->getJudul()}";
        }
    }
}