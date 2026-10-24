<?php

use Dzawadzki\LabComposer\Duck;

require_once __DIR__ . '/vendor/autoload.php';

$ds = DIRECTORY_SEPARATOR;
$log = new b\pogodynka\vendor\monolog\monolog\src\Monolog\Logger("Kłodziaż");
$log->pushHandler(new b\pogodynka\vendor\monolog\monolog\src\Monolog\Handler\StreamHandler(__DIR__ . $ds . 'monolog.log',
    b\pogodynka\vendor\monolog\monolog\src\Monolog\Level::Debug));
$log->error("error.");
$log->warning("warning.");



$duck = new \Dzawadzki\LabComposer\Duck($log);
$duck->quack();
$duck->quack();
$duck->quack();