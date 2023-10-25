<?php

require "App/initTV.php";
use App\MenontonTV\Orang;
use App\MenontonTV\RemoteTV;
use App\MenontonTV\TV;

$tv1 = new TV(true);
$tv2 = new TV(false);

$remote1 = new RemoteTV($tv1, "Remote Biji");

$orang1 = new Orang("Ujang", $remote1, $tv1);
$orang2 = new Orang("Kasep", $remote1, $tv2);

echo $orang1->getNama() . " " . $tv1->matikanTV();
echo "<br>";
echo "<br>Status : {$tv1->getStatus()}";
echo "<br>";
echo $orang2->getNama() . " " . $tv2->tvMenyala();
echo "<br>";
echo "<br>Status : {$tv2->getStatus()}";
echo "<br>";
echo $remote1->matikanTV();
