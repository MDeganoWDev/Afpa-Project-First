<?php
class VueArticles{

    public function __construct(){

    }

    public function afficherArticles(){}
    public function afficherListeArticles(){
        $partial = "modules/articles/templates/listeArticles.html";
        include "templates/template.html";
    }
    public function formulaireNewArticle(){
        $partial = "modules/articles/templates/formulaireNewArticle.html";
        include "templates/template.html";
    }
    public function newArticleOk(){}
    public function newArticleKo(){}
    public function formulaireEditArticle(){}
    public function editArticleOk(){}
    public function editArticleKo(){}
    public function removeArticleOk(){}
    public function removeArticleKo(){}

}