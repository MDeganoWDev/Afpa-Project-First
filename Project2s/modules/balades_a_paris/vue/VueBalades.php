<?php
class VueBalades{

    public function __construct()
    {
    }

    /* Méthode pour afficher les événements à paris avec en paramètre
    la variable qu'on utilise dans le template présentationBalade */
    public function afficherBalades($event)
    {
        $partial = "modules/balades_a_paris/templates/presentationBalade.html";
        include "templates/template.html";
    }

    //Méthode pour afficher la carte leaflet
    function afficheBaladeConfirm(){
        $partial = "modules/balades_a_paris/templates/carteBalade.html";
        include "templates/template.html";
    }

    //Méthode en cas d'erreur quand l'api n'est pas disponible
    function afficherBaladeErreur(){
        $partial = "modules/balade_a_paris/templates/ErreurBalade.html";
        include "templates/template.html";
    }
}