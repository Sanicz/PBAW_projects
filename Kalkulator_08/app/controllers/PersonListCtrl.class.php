<?php

namespace app\controllers;

use app\forms\PersonSearchForm;
use PDOException;
use app\forms\PersonEditForm;
use DateTime;
use core\App;
use core\ParamUtils;
use core\RoleUtils;

class PersonListCtrl {

    private $form;
    private $records;

    public function __construct(){

        $this->form = new PersonSearchForm();
    }

    public function validate() {


        $this->form->surname = ParamUtils::getFromRequest('sf_surname');




        return ! App::getMessages()->isError();
    }

    public function action_personList(){
        $this->validate();


        $search_params = [];
        if ( isset($this->form->surname) && strlen($this->form->surname) > 0) {
            $search_params['surname[~]'] = $this->form->surname.'%';
        }



        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = [ "AND" => &$search_params ];
        } else {
            $where = &$search_params;
        }

        $where ["ORDER"] = "surname";


        try{
            $this->records = App::getDB()->select("person", [
                "idperson",
                "name",
                "surname",
                "birthdate",
            ], $where );
        } catch (PDOException $e){
            App::getMessages()->addMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());
        }


        App::getSmarty()->assign('searchForm',$this->form);
        App::getSmarty()->assign('people',$this->records);
        App::getSmarty()->display('PersonList.tpl');
    }

}