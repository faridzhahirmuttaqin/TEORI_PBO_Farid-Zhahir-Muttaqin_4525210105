<?php
declare(strict_types=1);

class Handphone
{
    public function __construct(protected string $merk, protected string $model)
    {
    }

    public function nyalakan(): void
    {
        echo "Handphone dinyalakan.\n";
    }

    public function matikan(): void
    {
        echo "Handphone dimatikan.\n";
    }

    public function telepon(string $nomor): void
    {
        echo "Memanggil nomor {$nomor}\n";
    }
}
