<?php

require "App/initMotor.php";
use App\NaikMotor\Jalan;
use App\NaikMotor\Motor;
use App\NaikMotor\Pengendara;

$motor1 = new Motor(true, "Nmek");
echo $motor1->getMotor();
echo "<hr>";

$jalan1 = new Jalan(4, "jl. Jalan");
echo $jalan1->getDetailJalan();
echo "<hr>";

$pengendara1 = new Pengendara("Bujal", $motor1, $jalan1);
$pengendara1->kendaraMotor();
echo "<hr>";