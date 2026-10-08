<?php
declare(strict_types=1);

class Pasien
{
    public function __construct(private string $nama)
    {
    }

    public function getNama(): string
    {
        return $this->nama;
    }
}
