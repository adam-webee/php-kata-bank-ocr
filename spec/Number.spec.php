<?php

declare(strict_types=1);

namespace WeBee\School\BankOcrKata\Spec;

use WeBee\School\BankOcrKata\Number\Number;

describe(
    'Number',
    function () {
        it(
            'can be instantiated',
            function () {
                $n = new Number('');

                expect($n)->toBeAnInstanceOf('WeBee\School\BankOcrKata\Number\Number');
                expect($n)->toBeAnInstanceOf('WeBee\School\BankOcrKAta\Number\NumberInterface');
            }
        );

        it(
            'can receive and return unparsed number',
            function () {
                $n = new Number('aaa');

                expect($n->getRaw())->toBeA('string');
                expect($n->getRaw())->toBe('aaa');
            }
        );

        given(
            'testNumbers',
            function () {
                return [
                    '000000000' => file_get_contents(__DIR__.'//test_files//Numbers//000000000.txt'),
                ];
            }
        );

        it(
            'can correctly parse numbers',
            function () {
                foreach ($this->testNumbers as $expect => $given) {
                    $n = new Number($given);

                    expect($n->get())->toBeA('string');
                    expect($n->get())->toBe((string) $expect);
                }
            }
        );
    }
);
