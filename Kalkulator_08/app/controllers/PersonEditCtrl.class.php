<?php

namespace app\controllers;

use app\forms\PersonEditForm;
use DateTime;
use PDOException;
use core\App;
use core\ParamUtils;


class PersonEditCtrl {

    private $form;

    public function __construct(){

        $this->form = new PersonEditForm();
    }


    public function validateSave() {

        $this->form->id = ParamUtils::getFromRequest('id',true,'Błędne wywołanie aplikacji');
        $this->form->name = ParamUtils::getFromRequest('name',true,'Błędne wywołanie aplikacji');
        $this->form->surname = ParamUtils::getFromRequest('surname',true,'Błędne wywołanie aplikacji');
        $this->form->birthdate = ParamUtils::getFromRequest('birthdate',true,'Błędne wywołanie aplikacji');

        if ( App::getMessages()->isError() ) return false;


        if (empty(trim($this->form->name))) {
            App::getMessages()->addMessage('Wprowadź imię');
        }
        if (empty(trim($this->form->surname))) {
            App::getMessages()->addMessage('Wprowadź nazwisko');
        }
        if (empty(trim($this->form->birthdate))) {
            App::getMessages()->addMessage('Wprowadź datę urodzenia');
        }

        if ( App::getMessages()->isError() ) return false;



        $d = DateTime::createFromFormat('Y-m-d', $this->form->birthdate);
        if ( $d === false ){
            App::getMessages()->addMessage('Zły format daty. Przykład: 2015-12-20');
        }

        return ! App::getMessages()->isError();
    }


    public function validateEdit() {


        $this->form->id = ParamUtils::getFromRequest('id',true,'Błędne wywołanie aplikacji');
        return ! App::getMessages()->isError();
    }

    public function action_personNew(){
        $this->generateView();
    }


    public function action_personEdit(){

        if ( $this->validateEdit() ){
            try {

                $record = App::getDB()->get("person", "*",[
                    "idperson" => $this->form->id
                ]);

                $this->form->id = $record['idperson'];
                $this->form->name = $record['name'];
                $this->form->surname = $record['surname'];
                $this->form->birthdate = $record['birthdate'];
            } catch (PDOException $e){
                App::getMessages()->addMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());
            }
        }


        $this->generateView();
    }

    public function action_personDelete(){

        if ( $this->validateEdit() ){

            try{

                App::getDB()->delete("person",[
                    "idperson" => $this->form->id
                ]);
                App::getMessages()->addMessage('Pomyślnie usunięto rekord');
            } catch (PDOException $e){
                App::getMessages()->addMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());
            }
        }


        App::getRouter()->forwardTo('personList');
    }

    public function action_personSave(){


        if ($this->validateSave()) {

            try {


                if ($this->form->id == '') {

                    $count = App::getDB()->count("person");
                    if ($count <= 20) {
                        App::getDB()->insert("person", [
                            "name" => $this->form->name,
                            "surname" => $this->form->surname,
                            "birthdate" => $this->form->birthdate
                        ]);
                    } else {

                        App::getMessages()->addMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView();
                        exit();
                    }
                } else {

                    App::getDB()->update("person", [
                        "name" => $this->form->name,
                        "surname" => $this->form->surname,
                        "birthdate" => $this->form->birthdate
                    ], [
                        "idperson" => $this->form->id
                    ]);
                }
                App::getMessages()->addMessage('Pomyślnie zapisano rekord');

            } catch (PDOException $e){
                App::getMessages()->addMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());
            }


            App::getRouter()->forwardTo('personList');

        } else {

            $this->generateView();
        }
    }

    public function generateView(){
        App::getSmarty()->assign('form',$this->form);
        App::getSmarty()->display('PersonEdit.tpl');
    }
}
