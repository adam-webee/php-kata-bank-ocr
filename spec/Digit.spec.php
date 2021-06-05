<?php

declare(strict_types=1);

namespace WeBee\School\BankOcrKata\Spec;

use WeBee\School\BankOcrKata\Number\Digit;

describe(
    'Digit',
    function () {
        it(
            'can be instantiated',
            function () {
                $d = new Digit('');

                expect($d)->toBeAnInstanceOf('WeBee\School\BankOcrKata\Number\Digit');
                expect($d)->toBeAnInstanceOf('WeBee\School\BankOcrKata\Number\DigitInterface');
            }
        );

        it(
            'can return raw digit in unchanged form',
            function () {
                $d = new Digit('aaa');

                expect($d->getRaw())->toBe('aaa');
            }
        );

        given(
            'digitExamples',
            function () {
                return [
                    0 => " _ \n| |\n|_|",
                    1 => '     |  |',
                    2 => ' _ # _|#|_ ',
                    3 => " _ \n _|\n _|",
                    4 => '   A|_|B  |',
                    5 => " _ \n|_ \n _|",
                    6 => " _ \n|_ \n|_|",
                    7 => " _ \n  |\n  |",
                    8 => " _ \n|_|\n|_|",
                    9 => " _ \n|_|\n _|",
                ];
            }
        );

        it(
            'can return parsed digit',
            function () {
                foreach ($this->digitExamples as $expected => $given) {
                    $d = new Digit($given);

                    expect($d->get())->toBeAn('integer');
                    expect($d->get())->toBe($expected);
                }
            }
        );

        it(
            'can return null for not recognized digit',
            function () {
                $d = new Digit("___\n___\n___");

                expect($d->get())->toBe(null);
            }
        );
    }
);
