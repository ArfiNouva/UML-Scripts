<?php

namespace App\NaikMotor;

class Jalan{
    private $panjangJalan,
            $namaJalan;

    public function __construct($panjangJalan, $namaJalan)
    {
        $this->panjangJalan = $panjangJalan;
        $this->namaJalan = $namaJalan;
    }

    public function getDetailJalan(){
        return 'Jarak : ' . $this->panjangJalan . ' Km <br> Nama Jalan : ' . $this->namaJalan;
    }

    public function getJarak(){
        return $this->panjangJalan;
    }
}