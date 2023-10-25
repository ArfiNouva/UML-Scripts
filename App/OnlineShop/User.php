<?php

namespace App\OnlineShop;

abstract class User{
    protected $nama;

    abstract public function getProduk() ;
}