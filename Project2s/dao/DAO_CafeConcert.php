<?php
class DAO_CafeConcert 
{

    public static function requete()
    {
        $data = @file_get_contents(Config::$apiCafeConcert['url']);
        if (!$data) {
            $data = array('errorServeur' => 1);
            $data = json_encode($data);
        }
        return $data;
    }
}
