<?php
class Config
{
    static $modules = array(
        "modules/formulaire",
        "modules/meteo",
        "modules/user",
        "modules/articles",
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

    static $bdd = array(
        'host' => "localhost",
        'user' => "root",
        'pass' => "",
        'database' => "contact_dwwm11"
    );

    static $langue = "fr";
}
