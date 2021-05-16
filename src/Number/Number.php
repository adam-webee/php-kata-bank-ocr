<?php

declare(strict_types=1);

namespace WeBee\School\BankOcrKata\Number;

class Number implements NumberInterface
{
    public function __construct(private string $rawNumber)
    {
    }

    public function getRaw(): string
    {
        return $this->rawNumber;
    }
}
