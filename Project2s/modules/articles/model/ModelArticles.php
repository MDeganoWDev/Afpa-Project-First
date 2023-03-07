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
    public function selectArticle($slug)
    {
        $sql = "SELECT * FROM `articles` WHERE `articles`.`slug` = '{$slug}'";
        $result = DAO_MySQLi::requete($sql);
        return $result;
    }
    public function createArticle($data)
    {
        $datej = date('Y-m-d');
        $titre= addslashes($data['titre']);
        $contenu = addslashes($data['contenu']);
        $auteur= addslashes($data['auteur']);
        $sql = "INSERT INTO `articles` (`status`, `slug`, `titre`, `contenu`, `auteur`, `dateCreation`) VALUES ('{$data['status']}', '{$data['slug']}', '{$titre}', '{$contenu}', '{$auteur}', '{$datej}');";
        $result = DAO_MySQLi::requete($sql);
        return $result;
    }
    public function updateArticle($data, $id)
    {
        $datej = date('Y-m-d');
        $titre= addslashes($data['titre']);
        $contenu = addslashes($data['contenu']);
        $auteur= addslashes($data['auteur']);
        $sql = "UPDATE `articles` SET `status` = '{$data['status']}',`slug` = '{$data['slug']}',`titre` = '{$titre}',`contenu` = '{$contenu}',`auteur` = '{$auteur}',`dateCreation` = '{$datej}' WhERE `articles`.`id` = '{$id}'";
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