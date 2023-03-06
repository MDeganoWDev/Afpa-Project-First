<?php
class ModelVelo
{

    public function __construct()
    {
    }
    public function getStations()
    {
        //décode le format json en un tableau associatif PHP
        $data = json_decode(DAO_velo::requete(), true);

        return $data;
    }
}
