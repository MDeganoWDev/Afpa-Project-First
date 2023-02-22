<?php
class VuePI
{

    public function __construct()
    {

    }

    public function afficherAccueil()
    {
        $partial = "modules/pi/templates/accueil.html";
        include "templates/template.html";
    }
    public function afficherMentionLegale()
    {
        $partial = "modules/pi/templates/mentionLegale.html";
        include "templates/template.html";
    }
}