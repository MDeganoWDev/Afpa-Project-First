<?php
class DAO_Balades{

    public static function requeteBalades()
    {
        //l'encodage n'est pas nécessaire pour l'api que faire à paris
        $data = @file_get_contents(Config::$apiBalades['url']);
        //$data = json_encode($data);
        return $data;
    }
}