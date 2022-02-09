<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class SayHello extends Command
{
    protected static $defaultName = 'say_hello';
    protected static $defaultDescription = 'command say hello';

    protected function configure(): void
    {
        $this
            ->addArgument('word', InputArgument::REQUIRED)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Hello ' . $input->getArgument('word'));
        return Command::SUCCESS;
    }
}