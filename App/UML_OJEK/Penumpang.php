<?php

namespace App\UML_OJEK;

class Penumpang {
    private $namaPenumpang,
            $noHpPenumpang,
            $saldoEPay,
            $order;

    public function __construct($namaPenumpang, $noHpPenumpang, Order $order) {
                $this->namaPenumpang = $namaPenumpang;
                $this->noHpPenumpang = $noHpPenumpang;
                $this->order = $order;
    }
    
    public function setPenumpang($namaPenumpang, $noHpPenumpang, $saldoEPay){
        $this->namaPenumpang = $namaPenumpang;
        $this->noHpPenumpang = $noHpPenumpang;
        $this->saldoEPay = $saldoEPay;
    }

    public function getPenumpang(){
        $str = "Nama Penumpang : {$this->namaPenumpang} <br>
                No.HP          : {$this->noHpPenumpang} <br>
                Alamat Tujuan  : {$this->order->getTitikAkhir()}";
                
        return $str;
    }

    public function getNama(){
        return "{$this->namaPenumpang}";
    }

    public function membuatOrder(){
        $str = "Penumpang {$this->namaPenumpang} telah melakukan order";
    }
    
}