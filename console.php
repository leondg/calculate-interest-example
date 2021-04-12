#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use App\Command\CalculateInterestCommand;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new CalculateInterestCommand());

$application->run();