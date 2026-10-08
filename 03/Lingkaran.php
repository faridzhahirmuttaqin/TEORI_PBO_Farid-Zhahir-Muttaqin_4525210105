<?php
declare(strict_types=1);

require_once __DIR__ . '/BangunDatar.php';

class Lingkaran extends BangunDatar
{
    public function __construct(private int $r)
    {
    }

    public function luas(): float
    {
        return M_PI * $this->r * $this->r;
    }

    public function keliling(): float
    {
        return 2 * M_PI * $this->r;
    }
}
