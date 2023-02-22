<?php

class ModelForm
{


    public function __construct()
    {
    }

    public function insert($data)
    {
        $sql = "INSERT INTO `contact` (`id`, `nom`, `prenom`, `tel`, `email`, `message`) VALUES (NULL, '{$data['nom']}', '{$data['prenom']}', '{$data['tel']}', '{$data['email']}', '{$data['message']}');";
        $result = DAO_MySQLi::requete($sql);
        return $result;
    }
    
    public function selectContacts(){
        $sql = "SELECT * FROM `contact`";
        $result = DAO_MySQLi::requete($sql);
        return $result;
    }

    public function deleteContact($id){
        $sql = "DELETE FROM `contact` WHERE `contact`.`id` = {$id}";
        $result = DAO_MySQLi::requete($sql);
        return $result;
    }

    public function selectContact($id){
        $sql = "SELECT * FROM `contact` WHERE `contact`.`id` = {$id}";
        $result = DAO_MySQLi::requete($sql);
        return $result;
    }

    public function updateContact($data, $id){

        // UPDATE `contact` SET `telephone` = '0000000001' WHERE `contact`.`id` = 1;
        $sql = "UPDATE `contact` SET `nom` = '{$data['nom']}',`prenom` = '{$data['prenom']}',`tel` = '{$data['tel']}',`email` = '{$data['email']}',`message` = '{$data['message']}' WhERE `contact`.`id` = '{$id}'";
        $result = DAO_MySQLi::requete($sql);
        return $result;
    }


    /**
     * TESTS
     */
    public function testInsert($data)
    {
        var_dump($data);
        // $sql = "INSERT INTO `contact` (`id`, `nom`, `prenom`, `telephone`, `email`, `message`) VALUES (NULL, 'Dupond', 'Pierre', '0102030405', 'martin@gmail.com', 'salut');";
        $sql = "INSERT INTO `contact` (`id`, `nom`, `prenom`, `tel`, `email`, `message`) VALUES (NULL, '{$data['nom']}', '{$data['prenom']}', '{$data['tel']}', '{$data['email']}', '{$data['message']}');";
        echo $sql;
        $result = DAO_MySQLi::requete($sql);
        if ($result == true) {
            echo "true attendu >> true reçu : ok<br/>";
        } else {
            echo "true attendu >> false reçu : KO<br/>";
        }

        $sql = "INSERT INTO `contact` (`id`, `nom`, `prenom`, `tel`, `email`, `message`, `taille`) VALUES (NULL, '651', '654', true, 'martin@gmail.com', 'salut');";
        $result = DAO_MySQLi::requete($sql);
        if ($result == false) {
            echo "false attendu >> false reçu : ok<br/>";
        } else {
            echo "false attendu >> true reçu : KO<br/>";
        }
    }

    public function testSelect()
    {
        $sql = "SELECT * FROM contact3";
        $result = DAO_MySQLi::requete($sql);

        echo "cette table n'existe pas <br/>";

        if ($result == false) {
            echo "false attendu >> false reçu : ok<br/><br/>";
        } else {
            echo "false attendu >> ??? reçu : KO<br/><br/>";
        }
        echo "table existante <br/>";

        if (is_array($result) === true) {
            echo "array attendu >> array reçu : ok<br/><br/>";
        } else {
            echo "array attendu >> ??? reçu : KO<br/><br/>";
        }
    }
}
