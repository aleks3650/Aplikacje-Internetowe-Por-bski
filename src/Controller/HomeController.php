<?php

namespace MyApp\Controller;

use MyApp\Model\LoanCalculator;
use Smarty;

class HomeController {
    private $smarty;

    public function __construct(Smarty $smarty) {
        $this->smarty = $smarty;
    }

    public function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $calculator = new LoanCalculator();
            $result = $calculator->calculate($_POST['kwota'], $_POST['oprocentowanie'], $_POST['okres']);
            $this->smarty->assign('rata', round($result, 2));
        }
        $this->smarty->display('test.tpl');
    }
}

?>