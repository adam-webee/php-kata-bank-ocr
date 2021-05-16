<?php

declare(strict_types=1);

namespace WeBee\School\BankOcrKata\Number;

class Digit implements DigitInterface
{
    public function __construct(private string $rawDigit)
    {
    }

    public function getRaw(): string
    {
        return $this->rawDigit;
    }
}
