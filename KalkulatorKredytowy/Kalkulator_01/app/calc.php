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

//wedlug informacji dotyczacej limitow kredytowych znalazlem iz minimalny termin wynosi 1 miesiac a maksymalny okolo 420
//procentowanie naprzyklad dla nowych uzytkownikow banku wynosi 0%
if($kwota<1000||$kwota>5000000){
    $messages []= 'Bledna kwota';
}
if($termin<1||$termin>420){
    $messages []= 'Bledny termin';
}
if($procentowanie<0||$procentowanie>700){
    $messages []= 'Bledne wprowadzone procentowanie';
}


// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $kwota == "") {
	$messages [] = 'Nie podano liczby 1';
}
if ( $termin == "") {
	$messages [] = 'Nie podano liczby 2';
}
if ( $procentowanie == "") {
    $messages [] = 'Nie podano liczby 3';
}


if (empty( $messages )) {
	

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
	
	//konwersja parametrów na int
	$kwota = intval($kwota);
	$termin = intval($termin);
    $procentowanie = intval($procentowanie);
    //obliczenie miesiecznej kwoty wedlug wzoru ponizej, wynik operacji zostanie wyswietlony na ekran
    $mies_kwot = $kwota * ($procentowanie / (12 * 100) * pow(1 + $procentowanie / (12 * 100), $termin)) / (pow(1 + $procentowanie / (12 * 100), $termin) - 1);
}
include 'calc_view.php';