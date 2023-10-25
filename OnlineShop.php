<?php

require "App/initOLSHOP.php";
use App\OnlineShop\Admin;
use App\OnlineShop\Customer;
use App\OnlineShop\Produk;

$produk1 = new Produk("Milo", 2500);

$admin1 = new Admin("Yahwudi", $produk1);
echo $admin1->getProduk();
echo "<hr>";

$customer1 = new Customer("Norden", $produk1);
echo $customer1->getProduk();