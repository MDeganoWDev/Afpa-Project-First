<?php
class ModelCafeConcert
{
    // Constructeur
    public function __construct()
    {
    }

    // Fonction qui récupère les données de l'API
    public function getCafeData()
    {
        $data = json_decode(DAO_Apis::requete("cafeConcert"), true);
        return $data;
    }
}