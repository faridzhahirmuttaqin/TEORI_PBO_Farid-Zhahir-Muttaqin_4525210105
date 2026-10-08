<?php
declare(strict_types=1);

require_once __DIR__ . '/BangunDatar.php';

class Segitiga extends BangunDatar
{
    public function __construct(private int $alas, private int $tinggi)
    {
    }

    public function luas(): float
    {
        return ($this->alas * $this->tinggi) / 2;
    }
}
