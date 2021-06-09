<?php

declare(strict_types=1);

namespace WeBee\School\BankOcrKata\Spec;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use WeBee\School\BankOcrKata\Command\ParseCommand;

describe(
    'Bank statement parse command',
    function () {
        given(
            'app',
            function () {
                $app = new Application('Bank OCR', '1.0');
                $app->setAutoExit(false);
                $app->add(new ParseCommand());

                return $app;
            }
        );

        given(
            'output',
            function () {
                return new BufferedOutput();
            }
        );

        given(
            'input',
            function () {
                return new ArrayInput(['command' => 'parse']);
            }
        );

        it(
            'can be executed',
            function () {
                $result = $this->app->run($this->input, $this->output);

                expect($this->output->fetch())->toBeEmpty();
                expect($result)->toBe(0);
            }
        );
    }
);
