<?php
declare(strict_types=1);

require_once __DIR__ . '/Mahasiswa.php';

class MahasiswaInternational extends Mahasiswa
{
    private const DEFAULT_TEXT = 'Belum Diisi';

    private string $negaraAsal;

    public function __construct(string $nama = self::DEFAULT_TEXT, string $nim = self::DEFAULT_TEXT, int|string $umur = 0, ?string $negaraAsal = null)
    {
        if (is_string($umur)) {
            $negaraAsal = $umur;
            $umur = 0;
        }

        parent::__construct($nama, $nim, $umur);
        $this->negaraAsal = $negaraAsal ?? self::DEFAULT_TEXT;
    }

    public function getNegaraAsal(): string
    {
        return $this->negaraAsal;
    }

    public function setNegaraAsal(string $negaraAsal): void
    {
        $this->negaraAsal = $negaraAsal;
    }

    public function tampilkanInfo(): void
    {
        parent::tampilkanInfo();
        echo "Negara Asal: {$this->negaraAsal}\n";
    }
}
