<?php

class ModelUser
{
    public function __construct()
    {
    }

    public function seConnecter($data)
    {
        $pass = md5($data['pass']);
        $sql = "SELECT * FROM `user` WHERE `user`.`login`='{$data['login']}' AND `user`.`pass`='{$pass}'";
        $result = DAO_MySQLi::requete($sql);
        return $result;
    }

    public function insert($data){
        $pass = md5($data['pass']);
        $sql = "INSERT INTO `user` (`id`, `pseudo`, `login`, `pass`, `droit`) VALUES (NULL, '{$data['pseudo']}', '{$data['login']}', '{$pass}', 'user');";
        $result = DAO_MySQLi::requete($sql);
        return $result;
    }
    
    public function insertAdmin($data){
        $pass = md5($data['pass']);
        $sql = "INSERT INTO `user` (`id`, `pseudo`, `login`, `pass`, `droit`) VALUES (NULL, '{$data['pseudo']}', '{$data['login']}', '{$pass}', '{$data['droit']}');";
        $result = DAO_MySQLi::requete($sql);
        return $result;
    }


    public function selectUsers()
    {
      
        $sql = "SELECT * FROM `user`";
        $result = DAO_MySQLi::requete($sql);
        return $result;
    }

    public function editUser($data)
    {
      
        $sql = "UPDATE user
        SET pseudo='{$data['pseudo']}', login='{$data['login']}', droit='{$data['droit']}'
        WHERE id='{$data['id']}'";
       $result = DAO_MySQLi::requete($sql);
       return $result;
    }

    public function deleteUser($id)
    {
      if ($id !== 1){
        $sql = "DELETE FROM user WHERE id = '{$id}'";
        DAO_MySQLi::requete($sql);
       $result = DAO_MySQLi::requete($sql);
       return $result;
      }

    }
}
