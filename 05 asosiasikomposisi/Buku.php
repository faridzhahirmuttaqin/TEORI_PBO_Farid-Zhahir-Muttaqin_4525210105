<?php
declare(strict_types=1);

require_once __DIR__ . '/Bab.php';

class Buku
{
    private array $daftarBab;

    public function __construct(private string $judulBuku)
    {
        $this->daftarBab = [
            new Bab('Pendahuluan'),
            new Bab('Isi'),
            new Bab('Penutup'),
        ];
    }

    public function tampilkanBab(): void
    {
        echo "Buku {$this->judulBuku} memiliki bab:\n";
        foreach ($this->daftarBab as $bab) {
            echo '- ' . $bab->getJudulBab() . "\n";
        }
    }
}
