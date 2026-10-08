<?php
declare(strict_types=1);

require_once __DIR__ . '/MahasiswaInternational.php';

$mahasiswa1 = new MahasiswaInternational();
$mahasiswa1->setNama('Paolo Dicanio');
$mahasiswa1->setNim('INT12345');
$mahasiswa1->setUmur(21);
$mahasiswa1->setNegaraAsal('Italy');
$mahasiswa1->tampilkanInfo();

echo "\n";

$mahasiswa2 = new MahasiswaInternational('Sarah', 'INT67890', 'Australia');
$mahasiswa2->setUmur(22);
$mahasiswa2->tampilkanInfo();

echo "\n";

$mahasiswa3 = new MahasiswaInternational('David', 'INT54321', 23, 'UK');
$mahasiswa3->tampilkanInfo();
