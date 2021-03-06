<?php

declare(strict_types=1);

namespace WeBee\School\BankOcrKata\Number;

interface NumberInterface
{
    public function getRaw(): string;

    public function get(): string;
}
