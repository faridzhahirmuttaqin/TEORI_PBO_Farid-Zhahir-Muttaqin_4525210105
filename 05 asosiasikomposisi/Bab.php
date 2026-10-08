<?php
declare(strict_types=1);

class Bab
{
    public function __construct(private string $judulBab)
    {
    }

    public function getJudulBab(): string
    {
        return $this->judulBab;
    }
}
