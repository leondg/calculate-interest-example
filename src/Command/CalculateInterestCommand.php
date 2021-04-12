<?php

namespace App\Command;

use App\Service\Calculate;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CalculateInterestCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('app:interest:calculate')
            ->addArgument('contribution', InputArgument::REQUIRED)
            ->addArgument('interest', InputArgument::REQUIRED)
            ->addArgument('years', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $contribution = $input->getArgument('contribution');
        $interest = $input->getArgument('interest');
        $years = $input->getArgument('years');
        if (
            ctype_digit($contribution) === false ||
            ctype_digit($interest) === false ||
            ctype_digit($years) === false
        ) {
            $output->writeln('<error>One or multiple arguments are not a number!</error>');
            return Command::FAILURE;
        }

        $output->writeln('<comment>- Calculating with the following arguments:</comment>');
        $output->writeln('<comment>-- Contribution: '.$contribution.'</comment>');
        $output->writeln('<comment>-- Interest Rate: '.$interest.'</comment>');
        $output->writeln('<comment>-- Years: '.$years.'</comment>');

        $result = Calculate::calculateInterestOverTime($contribution, $interest, $years);
        foreach ($result as $year => $contribution) {
            $output->writeln('<info>[</info> Year: '.$year.' <info>-</info> Amount: '.number_format($contribution,2).' <info>]</info>');
        }

        return Command::SUCCESS;
    }
}