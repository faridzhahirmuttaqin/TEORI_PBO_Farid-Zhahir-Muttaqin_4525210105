<?php
declare(strict_types=1);

require_once __DIR__ . '/Pasien.php';

class Dokter
{
    public function __construct(private string $nama)
    {
    }

    public function merawat(Pasien $pasien): void
    {
        echo "Dokter {$this->nama} merawat pasien {$pasien->getNama()}\n";
    }
}
