<?php

use Dzawadzki\LabComposer\Duck;

require_once __DIR__ . '/vendor/autoload.php';

$ds = DIRECTORY_SEPARATOR;
$log = new \Monolog\Logger("Kłodziaż");
$log->pushHandler(new \Monolog\Handler\StreamHandler(__DIR__ . $ds . 'monolog.log',
    \Monolog\Level::Debug));
$log->error("error.");
$log->warning("warning.");



$duck = new \Dzawadzki\LabComposer\Duck($log);
$duck->quack();
$duck->quack();
$duck->quack();