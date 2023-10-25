<?php

namespace App\Perpustakaan;

class RakBuku{
    private $buku,
            $pengunjung;

    public function __construct(Buku $buku, Pengunjung $pengunjung){
        $this->buku = $buku;
        $this->pengunjung = $pengunjung;
    }

    public function getDetailRak(){
        if($this->pengunjung->pinjamBuku()){
            return "Rak Buku : {$this->buku->getJudul()} <br>";
        } else {
            return "Rak Buku : {$this->buku->getJudul()} <br>";
        }
    }
}