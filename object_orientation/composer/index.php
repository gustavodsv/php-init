<?php
require 'vendor/autoload.php';

use \classes\matematica\Basica;

#monolog
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

#monolog
$log = new Logger('name');
$log->pushHandler(new StreamHandler('teste.log', Logger::WARNING));

#monolog
$log->warning('Foo');
$log->error('Bar');

$m = new Basica();
echo $m->somar(10,10);