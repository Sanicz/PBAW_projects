<?php
require_once dirname(__FILE__).'/../config.php';
//pobranie parametrów



include _ROOT_PATH.'/app/security/check.php';
function  getParam(&$kwota,&$termin,&$procentowanie)
{
    $kwota = isset($_REQUEST ['kwota'])?$_REQUEST ['kwota']:null;
    $termin = isset($_REQUEST ['termin'])?$_REQUEST ['termin']:null;
    $procentowanie = isset($_REQUEST ['procentowanie'])?$_REQUEST ['procentowanie']:null;

}

function validate(&$kwota,&$termin,&$procentowanie,&$messages)
{
    if ( ! (isset($kwota) && isset($procentowanie) && isset($termin))) {
        return false;
    }

    if ( $kwota == "") {
        $messages [] = 'Nie podano Kwoty';
    }
    if ( $termin == "") {
        $messages [] = 'Nie podano Terminu';
    }
    if ( $procentowanie == "") {
        $messages [] = 'Nie podano Procentowania';
    }
    if (count($messages) != 0) return false;
    //wedlug informacji dotyczacej limitow kredytowych znalazlem iz minimalny termin wynosi 1 miesiac a maksymalny okolo 420
    //procentowanie naprzyklad dla nowych uzytkownikow banku wynosi 0%
    if (! is_numeric( $kwota )) {
        $messages [] = 'Kwota nie jest liczbą całkowitą';
    }
    elseif ($kwota<1000||$kwota>5000000){
        $messages []= 'Bledna kwota';
    }

    if (! is_numeric( $termin )) {
        $messages [] = 'Termin nie jest liczbą całkowitą';
    }
    elseif ($termin<1||$termin>420){
        $messages []= 'Bledny termin';
    }
    if (! is_numeric( $procentowanie )) {
        $messages [] = 'Procentowanie nie jest liczbą';
    }
    elseif ($procentowanie<0||$procentowanie>700){
        $messages []= 'Bledne procentowanie';
    }
    if(count($messages) != 0) return false;
    else return true;
}
function role_valid(&$kwota,&$termin,&$procentowanie,&$messages)
{
    global $role;
    if($role!='admin'&&$kwota>=100000){
        $messages [] = 'Only admin can borrow more than 100000 PLN';

    }
    if($role!='admin'&&$termin>=100){
        $messages [] = 'Only admin can borrow for more than 100 month';

    }
    if($role!='admin'&&$procentowanie>=100){
        $messages [] = 'Only admin can borrow more than 100%';

    }
    if(count($messages) != 0) return false;
}
function process(&$kwota,&$termin,&$procentowanie,&$messages,&$mies_kwot)
{
    global $role;
    if (empty ( $messages )) { // gdy brak błędów

        //konwersja parametrów na int oraz float
        $kwota = intval($kwota);
        $termin = intval($termin);
        $procentowanie = floatval($procentowanie);
        //obliczenie miesiecznej kwoty wedlug wzoru ponizej, wynik operacji zostanie wyswietlony na ekran
        $proc_mies=$procentowanie/1200;
        $kwot_ogolem=$kwota*(1+$proc_mies*$termin);
        $mies_kwot = $kwot_ogolem/$termin;
    }

}

$kwota= null;
$termin= null;
$procentowanie= null;
$messages = array();
$mies_kwota = null;


getParam($kwota,$termin,$procentowanie);

if (validate($kwota,$termin,$procentowanie,$messages)) {
    role_valid($kwota,$termin,$procentowanie,$messages);
    process($kwota,$termin,$procentowanie,$messages,$mies_kwot);
}

include 'calc_view.php';