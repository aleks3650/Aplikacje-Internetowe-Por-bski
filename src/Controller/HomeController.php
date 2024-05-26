<?php

namespace MyApp\Controller;

use MyApp\Model\LoanCalculator;
use Smarty;
use Medoo\Medoo;

class HomeController {
    private $smarty;
    private $database;

    public function __construct(Smarty $smarty, Medoo $database) {
        $this->smarty = $smarty;
        $this->database = $database;
    }

    public function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $calculator = new LoanCalculator();
            $result = $calculator->calculate($_POST['kwota'], $_POST['oprocentowanie'], $_POST['okres']);
            $this->smarty->assign('rata', round($result, 2));

            $this->database->insert('loan_calculations', [
                'kwota' => $_POST['kwota'],
                'oprocentowanie' => $_POST['oprocentowanie'],
                'okres' => $_POST['okres'],
                'rata' => round($result, 2)
            ]);
        }
        $this->smarty->display('test.tpl');
    }
}
?>
