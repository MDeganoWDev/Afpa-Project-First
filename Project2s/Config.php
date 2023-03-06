<?php
class Config
{
    static $modules = array(
        "modules/cafeConcert",
        "modules/formulaire",
        "modules/meteo",
        "modules/user",
        "modules/articles",
        "modules/pi",
        "dao",
        "system",
        "langues",
        "modules/langue"
    );
    static $packages = array(
        "ctrl", "vue", "model", ""
    );

    static $apiMeteo = array(
        'url' => "https://www.prevision-meteo.ch/services/json/"
    );
    static $apiCafeConcert = array(
        'url' => "https://data.toulouse-metropole.fr/api/records/1.0/search/?dataset=cafes-concerts&q=&rows=26"
    );

    static $bdd = array(
        'host' => "localhost",
        'user' => "root",
        'pass' => "",
        'database' => "contact_dwwm11"
    );

    static $langue = "fr";
}
