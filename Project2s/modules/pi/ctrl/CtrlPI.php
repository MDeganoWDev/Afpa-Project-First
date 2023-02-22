<?php
class CtrlPI
{

    private $model;
    private $vue;

    public function __construct()
    {
        $this->model = new ModelPi();
        $this->vue = new VuePi();
    }

    public function accueil()
    {
        $this->vue->afficherAccueil();
    }
    public function mentionLegale()
    {
        $this->vue->afficherMentionLegale();
    }

}