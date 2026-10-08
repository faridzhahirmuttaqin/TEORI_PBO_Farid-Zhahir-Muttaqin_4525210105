<?php
declare(strict_types=1);

require_once __DIR__ . '/BangunDatar.php';
require_once __DIR__ . '/Lingkaran.php';
require_once __DIR__ . '/Persegi.php';
require_once __DIR__ . '/Segitiga.php';

$bangunDatar = new BangunDatar();
$bangunDatar->luas();
$bangunDatar->keliling();

$lingkaran = new Lingkaran(15);
echo 'Luas lingkaran: ' . $lingkaran->luas() . "\n";
echo 'keliling lingkaran: ' . $lingkaran->keliling() . "\n";

$persegi = new Persegi(10);
echo 'Luas Bujur Sangkar: ' . $persegi->luas() . "\n";
echo 'keliling Bujur Sangkar: ' . $persegi->keliling() . "\n";

$segitiga = new Segitiga(10, 8);
echo 'Luas Segitiga: ' . $segitiga->luas() . "\n";
$segitiga->keliling();
