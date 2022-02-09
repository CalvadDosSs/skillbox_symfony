#!/usr/bin/env php

<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;

$app = new Application();

$app->add(new \App\SayHello());
$app->add(new \App\RepeatingString());
$app->add(new \App\ListOutput());

$app->run();
