<?php
class VueMeteo{

    public function __construct()
    {
        
    }

    function afficherMeteo(){
        $partial = "modules/meteo/templates/meteo.html";
        include "templates/template.html";
    }

    function afficherPrevisionnel($data){
        $partial = "modules/meteo/templates/prev.html";
        include "templates/template.html";
    }
    function afficherErrorVille($data){
        $partial = "modules/meteo/templates/errorVille.html";
        include "templates/template.html";
    }
    function afficherErrorServeur($data){
        $partial = "modules/meteo/templates/errorServeur.html";
        include "templates/template.html";
    }
}