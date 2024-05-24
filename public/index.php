<?php

require(__DIR__.'/../libs/Smarty.class.php');
require(__DIR__.'/../src/Router.php');
require(__DIR__.'/../src/Controller/HomeController.php');
require(__DIR__.'/../src/Model/LoanCalculator.php');

use MyApp\Router;
use MyApp\Controller\HomeController;

// Initialize Smarty
$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__.'/../templates');
$smarty->setCompileDir(__DIR__.'/../templates_c');
$smarty->setCacheDir(__DIR__.'/../cache');
$smarty->setConfigDir(__DIR__.'/../configs');

// Initialize Controller
$homeController = new HomeController($smarty);

// Initialize Router
$router = new Router();
$router->add('/', [$homeController, 'index']);

// Dispatch route based on current URL
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->dispatch($path);

?>
