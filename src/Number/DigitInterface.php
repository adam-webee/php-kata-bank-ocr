<?php

declare(strict_types=1);

namespace WeBee\School\BankOcrKata\Number;

interface DigitInterface
{
    public function getRaw(): string;

    public function get(): ?int;
}
