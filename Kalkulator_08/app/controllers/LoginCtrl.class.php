<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;
use core\App;
use core\ParamUtils;
use core\RoleUtils;

class LoginCtrl{
    private $form;

    public function __construct(){
        $this->form = new LoginForm();
    }

    public function getParams(){

        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
    }

    public function validate() {

        if (! (isset ( $this->form->login ) && isset ( $this->form->pass ))) {
            return false;
        }


        if (! App::getMessages()->isError ()) {


            if ($this->form->login == "") {
                App::getMessages()->addMessage ( 'Nie podano loginu' );
            }
            if ($this->form->pass == "") {
                App::getMessages()->addMessage ( 'Nie podano hasła' );
            }
        }


        if ( !App::getMessages()->isError() ) {


            if ($this->form->login == "admin" && $this->form->pass == "admin") {


                $user = new User($this->form->login, 'admin');

                $_SESSION['user'] = serialize($user);

                RoleUtils::addRole($user->role);

            } else if ($this->form->login == "user" && $this->form->pass == "user") {


                $user = new User($this->form->login, 'user');

                $_SESSION['user'] = serialize($user);

                RoleUtils::addRole($user->role);

            } else {
                App::getMessages()->addMessage('Niepoprawny login lub hasło');
            }
        }

        return ! App::getMessages()->isError();
    }

    public function action_login(){

        $this->getParams();

        if ($this->validate()){

            header("Location: ".App::getConf()->app_url."/");
        } else {

            $this->generateView();
        }

    }

    public function action_logout(){

        session_destroy();


        App::getMessages()->addMessage('Poprawnie wylogowano z systemu');

        $this->generateView();
    }

    public function generateView(){

        App::getSmarty()->assign('page_title','Strona logowania');
        App::getSmarty()->assign('form',$this->form);
        App::getSmarty()->display('LoginView.tpl');
    }
}