<?php

require(__DIR__.'/../libs/Smarty.class.php');
require(__DIR__.'/../src/Controller/HomeController.php');
require(__DIR__.'/../src/Model/LoanCalculator.php');
require __DIR__.'/../vendor/autoload.php'; 

use Medoo\Medoo;

$config = require(__DIR__.'/../config/config.php');

$database = new Medoo($config);

$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__.'/../templates');
$smarty->setCompileDir(__DIR__.'/../templates_c');
$smarty->setCacheDir(__DIR__.'/../cache');
$smarty->setConfigDir(__DIR__.'/../configs');

$controller = new MyApp\Controller\HomeController($smarty, $database);
$controller->index();
?>
