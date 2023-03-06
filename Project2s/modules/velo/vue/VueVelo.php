<?php
class VueVelo
{
    public function __construct()
    {
    }

    function afficherStations($data)
    {
        $partial = "modules/velo/templates/carteVelo.html";
        include "templates/template.html";
    }

    function afficherErreur()
    {
        $partial = "modules/velo/templates/erreur.html";
        include "templates/template.html";
    }
}
