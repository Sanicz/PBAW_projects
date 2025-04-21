<?php

namespace app\controllers;


use app\forms\CalcForm;

use app\transfer\CalcResult;




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
        $this->form->kwota = getFromRequest("kwota");
        $this->form->termin = getFromRequest("termin");
        $this->form->procentowanie = getFromRequest("procentowanie");
    }

    public function validate(){
        if (!(isset ($this->form->kwota) && isset ($this->form->termin) && isset ($this->form->procentowanie))) {

            return false;
        }


        if ($this->form->kwota == "") {
            getMessages()->addError('Nie podano kwoty okredytowania');
        }
        if ($this->form->termin == "") {
            getMessages()->addError('Nie podano okres okredytowania');
        }
        if ($this->form->procentowanie == "") {
            getMessages()->addError('Nie podano procent okredytowania');
        }


        if (!getMessages()->isError()) {


            if (!is_numeric($this->form->kwota)) {
                getMessages()->addError('Kwota nie jest liczbą');
            }

            if (!is_numeric($this->form->termin)) {
                getMessages()->addError('Okres okredytowania nie jest liczbą');
            }
            if (!is_numeric($this->form->procentowanie)) {
                getMessages()->addError('Procentowanie nie jest liczbą');
            }
            if ($this->form->kwota <= 0) {
                getMessages()->addError('Kwota nie moze byc ujemna lub 0');
            }
            if ($this->form->termin <= 0) {
                getMessages()->addError('Okres okredytowania nie moze byc ujemny lub zero');
            }
            if ($this->form->procentowanie < 0) {
                getMessages()->addError('Procentowanie nie moze byc ujemna');
            }
            if (!inRole('admin')&&$this->form->kwota > 100000) {
                getMessages()->addError('Tylko admin moze wprowadzic taka kwote');
            }
            if (!inRole('admin')&&$this->form->termin > 100) {
                getMessages()->addError('Tylko admin moze wprowadzic taki termin');
            }
            if (!inRole('admin')&&$this->form->procentowanie < 10) {
                getMessages()->addError('Tylko admin moze wprowadzic takie procentowanie');
            }


        }
        return !getMessages()->isError();
    }

    public function action_calcCompute()
    {

        $this->getparams();

        if ($this->validate()) {


            $this->form->kwota = intval($this->form->kwota);
            $this->form->termin = intval($this->form->termin);
            $this->form->procentowanie = floatval($this->form->procentowanie);
            getMessages()->addInfo('Parametry poprawne.');


            $proc_mies = $this->form->procentowanie / 1200;
            $kwot_ogolem = $this->form->kwota * (1 + $proc_mies * $this->form->termin);
            $this->result->result = $kwot_ogolem / $this->form->termin;
            getMessages()->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }
    public function action_calcShow(){
        getMessages()->addInfo('Witaj w kalkulatorze');
        $this->generateView();
    }



    public function generateView()
    {
        getSmarty()->assign('page_title', 'Przykład 06');
        getSmarty()->assign('user',unserialize($_SESSION['user']));
        getSmarty()->assign('page_header', 'Obiekty w PHP');
        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);

        getSmarty()->display( 'CalcView.tpl');
    }


}

?>