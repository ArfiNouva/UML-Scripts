<?php

require "App/initOjek.php";

use App\UML_OJEK\Order;
use App\UML_OJEK\Pengemudi;
use App\UML_OJEK\Penumpang;

$order1 = new Order("Jalan Cimuncang","Jalan Cikutra", 1, 10000);
echo "<h1>Ini adalah detail order</h1>";
echo $order1->getDetailOrder();
echo "<hr>";

$penumpang1 = new Penumpang("Ihsan", 816628232, $order1);
echo "<h1>INI ADALAH IDENTITAS PENUMPANG</h1>";
echo $penumpang1->getPenumpang();
echo "<hr>";

$pengemudi1 = new Pengemudi($penumpang1, $order1);
$pengemudi1->setPengemudi("Muhammad Arpi", "0816628323");
echo "<h1> Ini adalah Identitas Drivermu </h1>";
echo $pengemudi1->getPengemudi();
echo "<hr>";

echo "<h1>Sedang Mengantar...</h1>";
echo $pengemudi1->mengantar();