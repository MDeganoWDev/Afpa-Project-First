<?php
class VueUser{

    public function __construct()
    {
        
    }

    function afficherLogin(){
        $partial = "modules/user/templates/login.html";
        include "templates/template.html";
    }

    function seConnecter()
    {

    }

    function connexionOk($data){
        $partial = "modules/user/templates/connexionOk.html";
        include "templates/template.html";
    }

    function addUser()
    {
        $partial = "modules/user/templates/formUser.html";
        include "templates/template.html";
    }

    function addUserAdmin()
    {
        $partial = "modules/user/templates/formUserAdmin.html";
        include "templates/template.html";
    }

    function saveOk()
    {
        $partial = "modules/user/templates/saveOk.html";
        include "templates/template.html";
    }

    function saveNotOk()
    {
        $partial = "modules/user/templates/saveNotOk.html";
        include "templates/template.html";
    }

    function afficherUsers($users, $status, $mode)
    {
        if($mode == "R"){
            $message = ($status == 1) 
            ? Message::getMessage("Liste des utilisateurs")
            : (($status==2) 
                ? Message::getMessage("Enregistrement supprimé")
                : Message::getMessage("Erreur de suppression"));
        }
        else if($mode == "U"){
            $message = ($status == 1) 
            ? Message::getMessage("Liste des utilisateurs") 
            : (($status==2) 
                ? Message::getMessage("Enregistrement modifié")
                : Message::getMessage("Erreur de modification"));
        }
        else if($mode == "D"){
            $message = ($status == 1) 
            ? Message::getMessage("Liste des utilisateurs") 
            : (($status==2) 
                ? Message::getMessage("Enregistrement supprimé")
                :Message::getMessage("Erreur de suppression"));
        }
        else {

        }
        $partial = "modules/user/templates/users.html";
        include "templates/template.html";
    }

    public function afficherDroitsInsuffisants(){
        $partial = "templates/droitsInsuffisants.html";
        include "templates/template.html";
    }
}
