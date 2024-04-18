<?php

require(__DIR__.'/../smarty/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir(__DIR__.'/../smarty/templates');
$smarty->setCompileDir(__DIR__.'/../smarty/templates_c');
$smarty->setCacheDir(__DIR__.'/../smarty/cache');
$smarty->setConfigDir(__DIR__.'/../smarty/configs');



// Loan Calculation Logic
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kwota = (float) $_POST['kwota'];
    $oprocentowanie = (float) $_POST['oprocentowanie'] / 100;
    $okres = (int) $_POST['okres'];

    $miesieczneOprocentowanie = $oprocentowanie / 12;
    $liczbaRat = $okres * 12;

    $rata = $kwota * ($miesieczneOprocentowanie * pow(1 + $miesieczneOprocentowanie, $liczbaRat)) / (pow(1 + $miesieczneOprocentowanie, $liczbaRat) - 1);
    $smarty->assign('rata', round($rata, 2));
}

$smarty->display('test.tpl');

?>