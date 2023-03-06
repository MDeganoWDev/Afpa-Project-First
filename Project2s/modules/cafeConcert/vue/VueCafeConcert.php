<?php
class VueCafeConcert
{
    // Constructeur
    public function __construct()
    {
    }

    // Fonction qui affiche la page principale
    function afficherPage($data)
    {
        $partial = "modules/cafeConcert/templates/page.html";
        include "templates/template.html";
    }

    // Fonction qui affiche une erreur serveur
    function afficherErrorServeur($data)
    {
        $partial = "modules/cafeConcert/templates/errorServeur.html";
        include "templates/template.html";
    }
}