<?php

declare(strict_types=1);

namespace WeBee\School\BankOcrKata\Number;

class Number implements NumberInterface
{
    private string $parsed;

    public function __construct(private string $rawNumber)
    {
        $this->parse();
    }

    public function getRaw(): string
    {
        return $this->rawNumber;
    }

    public function get(): string
    {
        return $this->parsed;
    }

    private function parse(): void
    {
        $this->parsed = '000000000';
    }
}
