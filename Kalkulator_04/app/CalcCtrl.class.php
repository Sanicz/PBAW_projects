<?php

require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';


class CalcCtrl {

    private $msgs;   
	private $form;   
	private $result; 
	private $hide_intro;
    
    
    public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
    }

    public function getParams(){
		$this->form->kwota = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
		$this->form->termin = isset($_REQUEST ['termin']) ? $_REQUEST ['termin'] : null;
		$this->form->procentowanie = isset($_REQUEST ['procentowanie']) ? $_REQUEST ['procentowanie'] : null;
	}
    public function validate() {
        if (! (isset ( $this->form->kwota ) && isset ( $this->form->termin ) && isset ( $this->form->procentowanie ))) {
			
			return false;
		} else { 
			$this->hide_intro = true; 
		}
		
	
		if ($this->form->kwota == "") {
			$this->msgs->addError('Nie podano kwoty okredytowania');
		}
		if ($this->form->termin == "") {
			$this->msgs->addError('Nie podano okres okredytowania');
		}
        if ($this->form->procentowanie == "") {
			$this->msgs->addError('Nie podano procent okredytowania');
		}
		
	
		if (! $this->msgs->isError()) {
			
			
			if (! is_numeric ( $this->form->kwota )) {
				$this->msgs->addError('Kwota nie jest liczbą');
			}
			
			if (! is_numeric ( $this->form->termin )) {
				$this->msgs->addError('Okres okredytowania nie jest liczbą');
			}
            if (! is_numeric ( $this->form->procentowanie )) {
				$this->msgs->addError('Procentowanie nie jest liczbą');
			}
            if ($this->form->kwota< 0 ) {
				$this->msgs->addError('Kwota nie moze byc ujemna');
			}
            if ($this->form->termin< 0 ) {
				$this->msgs->addError('Okres okredytowania nie moze byc ujemny');
			}
            if ($this->form->procentowanie< 0 ) {
				$this->msgs->addError('Procentowanie nie moze byc ujemna');
			}



            
		}
		
		return ! $this->msgs->isError();
	}

    public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			
			$this->form->kwota = intval($this->form->kwota);
			$this->form->termin = intval($this->form->termin);
            $this->form->procentowanie = floatval($this->form->procentowanie);
			$this->msgs->addInfo('Parametry poprawne.');
			
            
            
			$proc_mies=$this->form->procentowanie/1200;
			$kwot_ogolem=$this->form->kwota*(1+$proc_mies*$this->form->termin);
            $this->result->result=$kwot_ogolem / $this->form->termin;
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
    



    public function generateView(){
		global $conf;
		
		$smarty = new Smarty\Smarty;
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Przykład 05');
		$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		$smarty->assign('page_header','Obiekty w PHP');
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/CalcView.html');
    }










}

?>