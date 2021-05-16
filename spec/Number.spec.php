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
                $n = new Number();

                expect($n)->toBeAnInstanceOf('WeBee\School\BankOcrKata\Number\Number');
                expect($n)->toBeAnInstanceOf('WeBee\School\BankOcrKAta\Number\NumberInterface');
            }
        );
    }
);
