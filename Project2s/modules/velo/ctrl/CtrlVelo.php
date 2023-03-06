<?php
class CtrlVelo
{
    private $vue;
    private $model;

    public function __construct()
    {
        $this->vue = new VueVelo();
        $this->model = new ModelVelo();
    }

    public function stations()
    {
        $data = $this->model->getStations();
       
        if(isset($data['records'])){
            $this->vue->afficherStations($data);
        }else{
            $this->vue->afficherErreur($data);
        }

    }
    //fonction test passée directement dans la barre de navigation /Ctrl/testData , on recupere les données l'url est bonne
    function testData()
    {
        $url = 'https://data.toulouse-metropole.fr/api/records/1.0/search/?dataset=station-velo-toulouse&q=&rows=284';
        $json = file_get_contents($url);
        $data = json_decode($json, true);
        var_dump($data);
    }
   
}
