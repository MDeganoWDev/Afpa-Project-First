<?php
class CtrlCafeConcert
{

    private $vue;
    private $model;

    // Constructeur
    public function __construct()
    {
        $this->vue = new VueCafeConcert();
        $this->model = new ModelCafeConcert();
    }

    // Méthode qui affiche les cafés concerts
    public function cafesConcerts()
    {
        // Traitement en fonction des données récupérées
        $data = $this->model->getCafeData();
        switch (true) {
            case (isset($data['records'])):
                $this->vue->afficherPage($data);
                break;
            default:
                $this->vue->afficherErrorServeur($data);
                break;
        }
    }
}