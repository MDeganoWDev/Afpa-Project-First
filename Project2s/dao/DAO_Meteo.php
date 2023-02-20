<?php
class DAO_Meteo implements DAO {

    public static function requete($ville){
        $data = @file_get_contents(Config::$apiMeteo['url'].$ville);
        if(!$data){
            $data = array('errorServeur' => 1);
            $data = json_encode($data);
        }
        return $data;
    }
}