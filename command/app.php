<?php
require_once './vendor/autoload.php';


//use Acme\Console\Command\GreetCommand;
use Symfony\Component\Console\Application;

$application = new Application('my app');
//$application->add(new GreetCommand);
$application->run();