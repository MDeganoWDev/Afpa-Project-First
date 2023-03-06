<?php
class Config
{
    static $modules = array(
        "modules/formulaire",
        "modules/meteo",
        "modules/balades_a_paris",
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

    static $apiBalades = array(
        'url' => "https://opendata.paris.fr/api/records/1.0/search/?dataset=que-faire-a-paris-&q=&rows=20"
    );

    static $bdd = array(
        'host' => "localhost",
        'user' => "root",
        'pass' => "",
        'database' => "contact_dwwm11"
    );

    static $langue = "fr";
}
