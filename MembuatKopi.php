<?php

require "App/initKopi.php";
use App\MembuatKopi\Air;
use App\MembuatKopi\Kopi;
use App\MembuatKopi\BijiKopi;
use App\MembuatKopi\Gelas;
use App\MembuatKopi\Orang;
use App\MembuatKopi\PenggilingKopi;

$air1 = new Air(100, 200);

$bijikopi1 = new BijiKopi("Arabika", "Smooth");

$penggilingKopi1 = new PenggilingKopi($bijikopi1);

$kopi1 = new Kopi($bijikopi1, $air1);

$gelas1 = new Gelas("cangkir mini", $kopi1);

$orang1 = new Orang("Asep", $gelas1, $air1, $penggilingKopi1, $kopi1, $bijikopi1);
echo $orang1->minumKopi();