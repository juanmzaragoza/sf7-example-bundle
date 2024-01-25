<?php
namespace App\ExpertSoul\ExampleBundle\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:print-something',
    hidden: false,
    aliases: ['app:show-something']
)]
class PrintSomethingCommand extends Command
{

    public function __construct() {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setName('app:print-something')
            ->setDescription('Example command');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln([
            'Hello World!',
            '============',
        ]);
        return Command::SUCCESS;
    }
}