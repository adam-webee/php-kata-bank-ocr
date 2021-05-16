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
                $d = new Digit();

                expect($d)->toBeAnInstanceOf('WeBee\School\BankOcrKata\Number\Digit');
                expect($d)->toBeAnInstanceOf('WeBee\School\BankOcrKata\Number\DigitInterface');
            }
        );
    }
);
