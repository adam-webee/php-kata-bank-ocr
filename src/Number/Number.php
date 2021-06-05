<?php

declare(strict_types=1);

namespace WeBee\School\BankOcrKata\Number;

class Number implements NumberInterface
{
    private const EXPECTED_LINE_LENGTH = 27;

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
        $lines = $this->parseLines();
        $digits = [];

        foreach ($lines as $lineBlocks) {
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

    private function parseLines(): array
    {
        $parsedLines = array_slice(explode("\n", $this->rawNumber), 0, 3);

        foreach ($parsedLines as &$line) {
            $line = str_split(str_pad($line, self::EXPECTED_LINE_LENGTH, ' '), 3);
        }

        return $parsedLines;
    }
}
