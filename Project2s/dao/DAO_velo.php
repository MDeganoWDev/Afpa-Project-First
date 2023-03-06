<?php
class DAO_Velo  {

    public static function requete(){
        $data = @file_get_contents(Config::$apiVelo['url']);
        if(!$data){
            $data = array('errorServeur' => 1);
            $data = json_encode($data);
        }
       
        return $data;
    }
}
