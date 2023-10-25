<?php

require "App/initPerpus.php";
use App\Perpustakaan\Buku;
use App\Perpustakaan\Pengunjung;
use App\Perpustakaan\RakBuku;
use App\Perpustakaan\Staff;

$buku1 = new Buku("Naruto", 100, "Masashi Kishimoto", 49000);
echo $buku1->getDetailBuku();
echo "<hr>";

$pengunjung1 = new Pengunjung("Asep", true, $buku1);
echo "<br>";
echo $pengunjung1->pinjamBuku();
echo "<hr>";

$rakBuku1 = new RakBuku($buku1, $pengunjung1);
echo $rakBuku1->getDetailRak();
echo "<hr>";

$staff1 = new Staff("Ujang", "Pustakawan", $pengunjung1, $buku1);
echo $staff1->pinjamkanBuku();
