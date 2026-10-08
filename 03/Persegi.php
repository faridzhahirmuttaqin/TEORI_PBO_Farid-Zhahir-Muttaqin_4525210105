<?php
declare(strict_types=1);

require_once __DIR__ . '/BangunDatar.php';

class Persegi extends BangunDatar
{
    public function __construct(private int $sisi)
    {
    }

    public function luas(): float
    {
        return (float) ($this->sisi * $this->sisi);
    }

    public function keliling(): float
    {
        return (float) ($this->sisi * 4);
    }
}
