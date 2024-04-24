<?php

require(__DIR__.'/../libs/Smarty.class.php');
require(__DIR__.'/../src/Controller/HomeController.php');
require(__DIR__.'/../src/Model/LoadCalculator.php');

$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__.'/../templates');
$smarty->setCompileDir(__DIR__.'/../templates_c');
$smarty->setCacheDir(__DIR__.'/../cache');
$smarty->setConfigDir(__DIR__.'/../configs');

$controller = new MyApp\Controller\HomeController($smarty);
$controller->index();
?>