<?php

namespace App\Perpustakaan;

class Staff{
    private $namaPetugas,
            $jabatan,
            $pengunjung,
            $buku;

    public function __construct($namaPetugas, $jabatan, Pengunjung $pengunjung, Buku $buku)
    {
        $this->namaPetugas = $namaPetugas;
        $this->jabatan = $jabatan;
        $this->pengunjung = $pengunjung;
        $this->buku = $buku;
    }

    public function pinjamkanBuku(){
            return "{$this->namaPetugas} Meminjamkan Buku {$this->buku->getJudul()} Kepada {$this->pengunjung->getNamaPengunjung()}";
    }
}