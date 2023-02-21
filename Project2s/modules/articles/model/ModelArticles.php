<?php
class ModelArticles{

    public function __construct(){

    }

    public function selectAllArticles(){}
    public function selectArticle(){}
    public function createArticle($data){
var_dump($data);
// $sql = "INSERT INTO `articles` (`status`, `slug`, `titre`, `contenu`, `auteur`, `dateCreation`) VALUES ('{$data['status']}', '{$data['slug']}', '{$data['titre']}', '{$data['contenu']}', '{$data['auteur']}', '{date('Y-m-d')}');";
$result = DAO_MySQLi::requete($sql);
return $result;
    }
    public function updateArticle(){}
    public function deleteArticle(){}

}