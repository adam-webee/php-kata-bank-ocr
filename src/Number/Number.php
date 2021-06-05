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
        $lines = explode("\n", $this->rawNumber);
        $lines = array_slice($lines, 0, 3);
        $digits = [];

        foreach ($lines as $line) {
            $line = str_pad($line, 27, ' ');
            $lineBlocks = str_split($line, 3);
            $index = 0;
            foreach ($lineBlocks as $lineBlock) {
                if (!isset($digits[$index])) {
                    $digits[$index] = '';
                }
                $digits[$index++] .= "$lineBlock\n";
            }
        }

        $this->parsed = '';

        foreach ($digits as $rawDigit) {
            $digit = new Digit($rawDigit);
            $this->parsed .= $digit->get();
        }
    }
}
