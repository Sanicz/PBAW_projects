<?php

use app\transfer\User;
use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('calcShow'); #default action
App::getRouter()->setLoginRoute('login');
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('calcShow', 'CalcCtrl',['user','admin']);
Utils::addRoute('login','LoginCtrl');
Utils::addRoute('logout','LoginCtrl');
Utils::addRoute('calcCompute','CalcCtrl',['user','admin']);
Utils::addRoute('personList','PersonListCtrl',['user','admin']);
Utils::addRoute('personEdit','PersonEditCtrl',['admin']);
Utils::addRoute('personNew','PersonEditCtrl',['user','admin']);
Utils::addRoute('personDelete','PersonEditCtrl',['admin']);
Utils::addRoute('personSave','PersonEditCtrl',['user','admin']);
//Utils::addRoute('action_name', 'controller_class_name');