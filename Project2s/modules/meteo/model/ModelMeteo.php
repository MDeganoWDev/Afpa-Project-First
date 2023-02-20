<?php
class ModelMeteo{

    public function __construct()
    {
        
    }

    public function getCityData($ville){
        $data = json_decode(DAO_Meteo::requete($ville), true);
        return $data;
    }
}