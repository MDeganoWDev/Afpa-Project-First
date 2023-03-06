<?php
class ModelBalades{

    public function __construct()
    {
        
    }

    //Cette méthode va transformer les données json array exploitable par php
    public function selectBalades(){
        $data = json_decode(DAO_Apis::requete("balades"), true);
        return $data;
    }

}