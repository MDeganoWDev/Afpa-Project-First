<?php
class ModelArticles
{

    public function __construct()
    {

    }

    public function selectAllArticles()
    {
        $sql = "SELECT * FROM `articles`";
        $result = DAO_MySQLi::requete($sql);
        return $result;
    }
    public function selectArticle($id)
    {
        $sql = "SELECT * FROM `articles` WHERE `articles`.`id` = {$id}";
        $result = DAO_MySQLi::requete($sql);
        return $result;
    }
    public function createArticle($data)
    {
        $datej = date('Y-m-d');
        $sql = "INSERT INTO `articles` (`status`, `slug`, `titre`, `contenu`, `auteur`, `dateCreation`) VALUES ('{$data['status']}', '{$data['slug']}', '{$data['titre']}', '{$data['contenu']}', '{$data['auteur']}', '{$datej}');";
        $result = DAO_MySQLi::requete($sql);
        return $result;
    }
    public function updateArticle($data, $id)
    {
        $datej = date('Y-m-d');
        $sql = "UPDATE `articles` SET `status` = '{$data['status']}',`slug` = '{$data['slug']}',`titre` = '{$data['titre']}',`contenu` = '{$data['contenu']}',`auteur` = '{$data['auteur']}',`dateCreation` = '{$datej}' WhERE `articles`.`id` = '{$id}'";
        $result = DAO_MySQLi::requete($sql);
        return $result;
    }
    public function deleteArticle($id)
    {
        $sql = "DELETE FROM `articles` WHERE `articles`.`id` = {$id}";
        $result = DAO_MySQLi::requete($sql);
        return $result;
        ;
    }

}