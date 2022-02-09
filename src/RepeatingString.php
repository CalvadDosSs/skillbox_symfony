<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class RepeatingString extends Command
{
    protected static $defaultName = 'repeat';
    protected static $defaultDescription = 'command repeats the string';

    protected function configure(): void
    {
        $this
            ->addArgument('string', InputArgument::REQUIRED)
        ;
        $this
            ->addArgument('times', InputArgument::OPTIONAL)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
    	if (empty($input->getArgument('times'))) {
    		$times = 2;
    	} else {
    		$times = $input->getArgument('times');
    	}

    	for ($i = 0; $i < $times; $i++) {
    		$output->writeln($input->getArgument('string'));
    	}
        return Command::SUCCESS;
    }
}