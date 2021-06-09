<?php

declare(strict_types=1);

namespace WeBee\School\BankOcrKata\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ParseCommand extends Command
{
    private const FILE_ARGUMENT_NAME = 'file';

    protected static $defaultName = 'parse';

    protected function configure(): void
    {
        $this->addArgument(
            self::FILE_ARGUMENT_NAME,
            InputArgument::REQUIRED,
            'Path to file with statement'
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        return Command::SUCCESS;
    }
}
