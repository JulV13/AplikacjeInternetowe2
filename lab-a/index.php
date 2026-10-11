<?php
require_once __DIR__ . "/vendor/autoload.php";

$ds = DIRECTORY_SEPARATOR;
$log = new \Monolog\Logger("my log");
$log->pushHandler(new \Monolog\Handler\StreamHandler(__DIR__ . $ds . 'monolog.log', \Monolog\Level::Debug));
$log->error("error");
$log->warning("warning");

$duck = new \Jvrtiska\LabComposer\Duck($log);
$duck->quack();
$duck->quack();
$duck->quack();