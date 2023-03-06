<?php
/* class de test pour le ctrl 
et vérifier que les données s'inscrit bien dans
la page ciblée */
class CtrlBaladesTest{
    private $vue;
    private $model;

    public function __construct()
    {
        $this->vue = new VueBalades();
        $this->model = new ModelBalades();
    }

    public function testGetEvent(){
        $json = "https://opendata.paris.fr/api/records/1.0/search/?dataset=que-faire-a-paris-&q=&rows=20";
        $data = file_get_contents($json, true);
        //$data1 = json_encode($data);
        $data1 = json_decode($data);
        //var_dump($data1);
        $this->vue->afficherBalades($data1);
    }
}