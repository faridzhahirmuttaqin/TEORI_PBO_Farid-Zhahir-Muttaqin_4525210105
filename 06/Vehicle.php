<?php
declare(strict_types=1);

abstract class Vehicle
{
    public function __construct(protected string $name)
    {
    }

    public function showInfo(): void
    {
        echo "Kendaraan: {$this->name}\n";
    }
}
