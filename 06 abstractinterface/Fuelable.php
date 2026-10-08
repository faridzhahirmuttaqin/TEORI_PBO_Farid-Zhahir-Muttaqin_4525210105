<?php
declare(strict_types=1);

interface Fuelable
{
    public function refuel(): void;
}

trait DefaultFuelable
{
    public function refuel(): void
    {
        echo "Mengisi bahan bakar umum.\n";
    }
}
