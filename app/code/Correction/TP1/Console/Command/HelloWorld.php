<?php

namespace Correction\TP1\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorld extends Command
{
    public function configure()
    {
        $this->setName('correction:tp1:helloworld')
            ->setDescription('Say hello to the world.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>Hello world!</info>');
    }
}