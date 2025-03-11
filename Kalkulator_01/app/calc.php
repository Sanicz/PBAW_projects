<?php
require_once dirname(__FILE__).'/../config.php';
//pobranie parametrów
$kwota = $_REQUEST ['kwota'];
$termin = $_REQUEST ['termin'];
$procentowanie = $_REQUEST ['procentowanie'];


// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($kwota) && isset($procentowanie) && isset($termin))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}


// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $kwota == "") {
	$messages [] = 'Nie podano Kwoty';
}
if ( $termin == "") {
	$messages [] = 'Nie podano Terminu';
}
if ( $procentowanie == "") {
    $messages [] = 'Nie podano Procentowania';
}


if(is_numeric($kwota)&&($kwota<1000||$kwota>5000000)){
    $messages []= 'Bledna kwota';
}
if(is_numeric($termin)&&($termin<1||$termin>420)){
    $messages []= 'Bledny termin';
}
if(is_numeric($procentowanie)&&($procentowanie<0||$procentowanie>700)){
    $messages []= 'Bledne wprowadzone procentowanie';
}

if (empty( $messages )) {

//wedlug informacji dotyczacej limitow kredytowych znalazlem iz minimalny termin wynosi 1 miesiac a maksymalny okolo 420
    //procentowanie naprzyklad dla nowych uzytkownikow banku wynosi 0%
	if (! is_numeric( $kwota )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $termin )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}
    if (! is_numeric( $procentowanie )) {
        $messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
    }

}


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
include 'calc_view.php';