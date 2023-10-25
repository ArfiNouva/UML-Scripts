<?php

namespace App\UML_OJEK;

class Pengemudi {
    private $namaPengendara,
            $noPengendara = 0,
            $penumpang,
            $order;

    public function setPengemudi($namaPengendara, $noPengendara){
        $this->namaPengendara = $namaPengendara;
        $this->noPengendara = $noPengendara;
    }

    public function __construct(Penumpang $penumpang, Order $order)
    {
        $this->penumpang = $penumpang;
        $this->order = $order;
    }

    public function getPengemudi(){
        $str = "Nama Pengemudi : {$this->namaPengendara}. <br>
                No.HP Pengemudi : {$this->noPengendara}. <br>
                ";
        return $str;
    }

    public function mengantar(){
        return "{$this->namaPengendara} sedang mengantar {$this->penumpang->getNama()} 
                ke {$this->order->getTitikAkhir()}
                sejauh {$this->order->getJarak()}
                dengan harga {$this->order->getHarga()}";
    }
}