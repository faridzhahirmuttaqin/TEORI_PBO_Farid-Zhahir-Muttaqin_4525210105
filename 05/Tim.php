<?php
declare(strict_types=1);

require_once __DIR__ . '/Pemain.php';

class Tim
{
    public function __construct(private string $namaTim, private array $daftarPemain)
    {
    }

    public function tampilkanPemain(): void
    {
        echo "Tim {$this->namaTim} memiliki pemain:\n";
        foreach ($this->daftarPemain as $pemain) {
            echo '- ' . $pemain->getNama() . "\n";
        }
    }
}
