<?php

namespace Acme\Console\Command;


use Symfony\Component\Console\Command\Command;
//use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

//use Symfony\Component\Process\Process;

//use Symfony\Component\Filesystem\Filesystem;
//use Symfony\Component\Filesystem\Exception\IOException;

//class GreetCommand extends ContainerAwareCommand
class GreetCommand extends Command
{
    protected function configure()
    {
        $this 

            ->setName('my:greet')
            ->setDescription('my:greet greets can greet on the command line')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
		$output->writeln('<info>hello world</info>');
	
    }
}