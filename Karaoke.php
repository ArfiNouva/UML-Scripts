<?php

require "App/initKaraoke.php";
use App\Karaoke\Musik;
use App\Karaoke\Pengunjung;
use App\Karaoke\Staff;

$staff1 = new Staff("Bujal", "Maternal");

$musik1 = new Musik("Tenda Biru");

$pengunjung1 = new Pengunjung("Asep Shotgun", $musik1, $staff1);
echo $pengunjung1->sewaRuangan();
echo "<br>";
echo $pengunjung1->bernyanyi();