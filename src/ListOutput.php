<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;

class ListOutput extends Command
{
    protected static $defaultName = 'list_output';
    protected static $defaultDescription = 'command output list';

	public function execute(InputInterface $input, OutputInterface $output)
	{
		$helper = $this->getHelper('question');
	    $question1 = new Question('Напишите свое имя: ', 'Неизвестно');
	    $name = $helper->ask($input, $output, $question1);

	    $question2 = new Question('Напишите свой возраст: ', 'Неизвестно');
	    $age = $helper->ask($input, $output, $question2);

	    $question3 = new ChoiceQuestion(
	        'Выберите свой пол: ',
	        ['м', 'ж'],
    	);
    	$gender = $helper->ask($input, $output, $question3);

	    $output->writeln('Здравствуйте, ' . $name . '. Ваш возраст: ' . $age . '. Ваш пол: ' . $gender);

	    return Command::SUCCESS;
	}
}