<?php

require "App/initMasak.php";
use App\Memasak\Alat;
use App\Memasak\Bahan;
use App\Memasak\Dapur;
use App\Memasak\Orang;

$alat1 = new Alat("Wajan");

$bahan1 = new Bahan("Nugget");

$dapur1 = new Dapur(false);

$orang1 = new Orang("Ihsan", $alat1, $bahan1, false);
$orang1->mulaiMasak();
echo $orang1->getDetail();