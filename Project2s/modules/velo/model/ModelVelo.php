<?php
class ModelVelo
{

    public function __construct()
    {
    }
    public function getStations()
    {
        //décode le format json en un tableau associatif PHP
        $data = json_decode(DAO_Apis::requete("velo"), true);

        return $data;
    }
}
