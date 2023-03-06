<?php
class DAO_Apis implements DAO {

    public static function requete($api){
        $data = @file_get_contents(Config::$apis[$api]);
        if(!$data){
            $data = array('errorServeur' => 1);
            $data = json_encode($data);
        }
       
        return $data;
    }
}
