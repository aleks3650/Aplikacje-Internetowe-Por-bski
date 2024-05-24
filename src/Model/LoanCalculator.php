<?php
namespace MyApp\Model;

class LoanCalculator {
    public function calculate($kwota, $oprocentowanie, $okres) {
        $kwota = (float) $kwota;
        $oprocentowanie = (float) $oprocentowanie / 100;
        $okres = (int) $okres;
        if($kwota != 0 && $okres != 0 && $oprocentowanie != 0 ){
            $miesieczneOprocentowanie = $oprocentowanie / 12;
            $liczbaRat = $okres * 12;
            $rata = $kwota * ($miesieczneOprocentowanie * pow(1 + $miesieczneOprocentowanie, $liczbaRat)) / (pow(1 + $miesieczneOprocentowanie, $liczbaRat) - 1);
            return $rata;
        }
        return 0;
    }
}
?>