<?php
class CtrlLangue{
    public function __construct(){

    }

    public function setLangue($langue){
        Session::setLangue($langue);
        header('Location: /CtrlForm/afficherContacts');
        exit;
    }
}