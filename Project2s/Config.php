<?php
class Config
{
    static $modules = array(
        "modules/cafeConcert",
        "modules/formulaire",
        "modules/meteo",
        "modules/balades_a_paris",
        "modules/user",
        "modules/articles",
        "modules/pi",
        "modules/velo",
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
    // static $apiVelo = array(
    //     'url' => "https://data.toulouse-metropole.fr/api/records/1.0/search/?dataset=station-velo-toulouse&q=&rows=284"
    // );
    // static $apiCafeConcert = array(
    //     'url' => "https://data.toulouse-metropole.fr/api/records/1.0/search/?dataset=cafes-concerts&q=&rows=26"
    // );

    // static $apiBalades = array(
    //     'url' => "https://opendata.paris.fr/api/records/1.0/search/?dataset=que-faire-a-paris-&q=&rows=20"
    // );

    static $bdd = array(
        'host' => "localhost",
        'user' => "root",
        'pass' => "",
        'database' => "contact_dwwm11"
    );
    static $apis = array (
        "velo" =>"https://data.toulouse-metropole.fr/api/records/1.0/search/?dataset=station-velo-toulouse&q=&rows=284",
        "cafeConcert" =>  "https://data.toulouse-metropole.fr/api/records/1.0/search/?dataset=cafes-concerts&q=&rows=26",
        "balades" => "https://opendata.paris.fr/api/records/1.0/search/?dataset=que-faire-a-paris-&q=&rows=20",

    );

    static $langue = "fr";
}
