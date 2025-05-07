<?php

namespace app\controllers;


use app\forms\CalcForm;

use app\transfer\CalcResult;
use core\App;
use core\ParamUtils;
use core\RoleUtils;





class CalcCtrl
{


    private $form;
    private $result;



    public function __construct()
    {

        $this->form = new CalcForm();
        $this->result = new CalcResult();

    }

    public function getParams()
    {
        $this->form->kwota = ParamUtils::getFromRequest("kwota");
        $this->form->termin = ParamUtils::getFromRequest("termin");
        $this->form->procentowanie = ParamUtils::getFromRequest("procentowanie");
    }

    public function validate(){
        if (!(isset ($this->form->kwota) && isset ($this->form->termin) && isset ($this->form->procentowanie))) {

            return false;
        }


        if ($this->form->kwota == "") {
            App::getMessages()->addMessage('Nie podano kwoty okredytowania');
        }
        if ($this->form->termin == "") {
            App::getMessages()->addMessage('Nie podano okres okredytowania');
        }
        if ($this->form->procentowanie == "") {
            App::getMessages()->addMessage('Nie podano procent okredytowania');
        }


        if (!App::getMessages()->isError()) {


            if (!is_numeric($this->form->kwota)) {
                App::getMessages()->addMessage('Kwota nie jest liczbą');
            }

            if (!is_numeric($this->form->termin)) {
                App::getMessages()->addMessage('Okres okredytowania nie jest liczbą');
            }
            if (!is_numeric($this->form->procentowanie)) {
                App::getMessages()->addMessage('Procentowanie nie jest liczbą');
            }
            if ($this->form->kwota <= 0) {
                App::getMessages()->addMessage('Kwota nie moze byc ujemna lub 0');
            }
            if ($this->form->termin <= 0) {
                App::getMessages()->addMessage('Okres okredytowania nie moze byc ujemny lub zero');
            }
            if ($this->form->procentowanie < 0) {
                App::getMessages()->addMessage('Procentowanie nie moze byc ujemna');
            }
            if (!RoleUtils::inRole('admin')&&$this->form->kwota > 100000) {
                App::getMessages()->addMessage('Tylko admin moze wprowadzic taka kwote');
            }
            if (!RoleUtils::inRole('admin')&&$this->form->termin > 100) {
                App::getMessages()->addMessage('Tylko admin moze wprowadzic taki termin');
            }
            if (!RoleUtils::inRole('admin')&&$this->form->procentowanie < 10) {
                App::getMessages()->addMessage('Tylko admin moze wprowadzic takie procentowanie');
            }


        }
        return !App::getMessages()->isError();
    }

    public function action_calcCompute()
    {

        $this->getparams();

        if ($this->validate()) {


            $this->form->kwota = intval($this->form->kwota);
            $this->form->termin = intval($this->form->termin);
            $this->form->procentowanie = floatval($this->form->procentowanie);
            App::getMessages()->addMessage('Parametry poprawne.');


            $proc_mies = $this->form->procentowanie / 1200;
            $kwot_ogolem = $this->form->kwota * (1 + $proc_mies * $this->form->termin);
            $this->result->result = $kwot_ogolem / $this->form->termin;
            App::getMessages()->addMessage('Wykonano obliczenia.');
        }

        $this->generateView();
    }
    public function action_calcShow(){
        App::getMessages()->addMessage('Witaj w kalkulatorze');
        $this->generateView();
    }



    public function generateView()
    {
        App::getSmarty()->assign('page_title', 'Przykład 06');
        App::getSmarty()->assign('user',unserialize($_SESSION['user']));
        App::getSmarty()->assign('page_header', 'Obiekty w PHP');
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('res', $this->result);

        App::getSmarty()->display( 'CalcView.tpl');
    }


}

?>