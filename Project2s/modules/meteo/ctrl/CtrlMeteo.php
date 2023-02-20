<?php
class CtrlMeteo
{
    private $vue;
    private $model;

    public function __construct()
    {
        $this->vue = new VueMeteo();
        $this->model = new ModelMeteo();
    }

    public function meteo()
    {
        $this->vue->afficherMeteo();
    }

    public function getMeteo($ville)
    {
        $data = $this->model->getCityData($ville);
        switch (true) {
            case (isset($data['city_info'])):
                $this->vue->afficherPrevisionnel($data);
                break;
            case (isset($data['errors'])):
                $this->vue->afficherErrorVille($data);
                break;
            default:
                $this->vue->afficherErrorServeur($data);
                break;
        }
    }

    public function testGetMeteo()
    {
        $data = $this->model->getCityData("toulouse");
        if (isset($data['city_info']) == "toulouse") {
            echo "toulouse demandé >> toulouse reçu : ok<br/>";
        } else {
            echo "toulouse demandé >> ???? reçu : ko<br/>";
        }

        $data = $this->model->getCityData("toulous");
        if (isset($data['errors'])) {
            echo "toulous demandé >> erreur ville reçu : ok<br/>";
        } else {
            echo "toulous demandé >>  ???? reçu : ko<br/>";
        }

        $url = Config::$apiMeteo['url'];
        Config::$apiMeteo['url'] = "https://www.prevision-mete.ch/services/json/";
        $data = $this->model->getCityData("toulouse");
        if (isset($data['errorServeur'])) {
            echo "serveur erreur demandé >> error reçu : ok<br/>";
        } else {
            echo "serveur erreur demandé >> ???? reçu : ko<br/>";
        }


        Config::$apiMeteo['url'] = $url;
    }
}
