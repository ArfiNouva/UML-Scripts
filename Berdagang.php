<?php

require "App/initDagang.php";
use App\Berdagang\Pedagang;
use App\Berdagang\Pembeli;
use App\Berdagang\Produk;

$produk1 = new Produk("Chitato", 2000);
echo $produk1->getNamaProduk();
echo "<hr>";

$pembeli1 = new Pembeli("Sableng", $produk1);
echo $pembeli1->beliProduk();
echo "<hr>";

$pedagang1 = new Pedagang("Arthur", $produk1, $pembeli1);
echo $pedagang1->jualProduk();