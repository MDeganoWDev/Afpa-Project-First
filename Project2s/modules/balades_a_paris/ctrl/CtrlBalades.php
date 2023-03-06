<?php
class CtrlBalades{

    private $vue;
    private $model;

    public function __construct()
    {
        $this->vue = new VueBalades();
        $this->model = new ModelBalades();
    }

    /* Méthode qui va sélectionner les données depuis le model
    et va l'injecter à la vue */
    public function demanderBalades(){
        $data = $this->model->selectBalades();
        switch(true){
            case(isset($data['records'])) :
                $this->vue->afficherBalades($data);
                break;
            case(isset($data['errors'])) :
                $this->vue->afficherBaladeErreur($data);
                break;
            default:
                
                break;
        }
    }

    //Méthode au clic des vignettes sur le template présentationBalade
    public function clicBalade(){
        $this->vue->afficheBaladeConfirm();
    }

    
}