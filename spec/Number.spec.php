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
    }
);
