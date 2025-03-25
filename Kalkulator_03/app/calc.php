<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/smarty/libs/Smarty.class.php';

function getParams(&$form){
$form['kwota']=isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
$form['termin']=isset($_REQUEST['termin']) ? $_REQUEST['termin'] : null;
$form['procentowanie']=isset($_REQUEST['procentowanie']) ? $_REQUEST['procentowanie'] : null;
}


function validate(&$form,&$infos,&$msgs,&$hide_intro){
	
	if ( ! (isset($form['kwota']) && isset($form['termin']) && isset($form['procentowanie']) )) return false;
	 
	$hide_intro = true;
   
	$infos [] = 'Przekazano parametry.';
	
	if ( $form['kwota'] == "") $msgs [] = 'Nie podano kwoty okredytowania';
	if ( $form['termin'] == "") $msgs [] = 'Nie podano okres okredytowania';
	if ( $form['procentowanie'] == "") $msgs [] = 'Nie podano procent okredytowania';
	
	
	if ( count($msgs)==0 ) {
	 
	 if (! is_numeric( $form['kwota'] )) $msgs [] = 'Kwota nie jest liczbą';
	 if (! is_numeric( $form['termin'] )) $msgs [] = 'Okres okredytowania nie jest liczbą';
	 if (! is_numeric( $form['procentowanie'] )) $msgs [] = 'Oprocentowanie nie jest liczbą';
	 
	 if ($form['kwota'] < 0 ) $msgs [] = 'Kwota nie może być ujemną';
	 if ($form['termin'] < 0 ) $msgs [] = 'Okres okredytowania nie może być ujemnym';
	 if ($form['procentowanie'] < 0 ) $msgs [] = 'Okres okredytowania nie może być ujemnym';
	}
	if (count($msgs)>0) return false;
	else return true;
	}
	
	function process(&$form,&$infos,&$msgs,&$result){
		$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
		
		//konwersja parametrów na int
		$form['kwota'] = intval($form['kwota']);
		$form['termin'] = intval($form['termin']);
		$form['procentowanie'] = floatval($form['procentowanie']);
	   



		$proc_mies= $form['procentowanie']/1200;
		$kwot_ogolem=$form['kwota']*(1+$proc_mies*$form['termin']);
		$result=$kwot_ogolem/$form['termin'];
	   }





$form = null;
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;

getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
 process($form,$infos,$messages,$result);
}

$smarty = new Smarty\Smarty();
$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Przykład 04');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

$smarty->assign('hide_intro',$hide_intro);

   

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/app/calc.html');
