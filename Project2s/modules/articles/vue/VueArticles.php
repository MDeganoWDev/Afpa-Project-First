<?php
class VueArticles{

    public function __construct(){

    }

    public function afficherArticles($articles)
    {
        $partial = "modules/articles/templates/indexArticles.html";
        include "templates/template.html";
    }
    public function afficherThisArticles($articles, $thisArticle)
    {
        $partial = "modules/articles/templates/indexArticles.html";
        include "templates/template.html";
    }
    public function afficherListeArticles($articles, $text)
    {
        $partial = "modules/articles/templates/listeArticles.html";
        include "templates/template.html";
    }
    public function formulaireNewArticle()
    {
        $partial = "modules/articles/templates/formulaireNewArticle.html";
        include "templates/template.html";
    }
    public function formulaireEditArticle($articles)
    {
        $partial = "modules/articles/templates/formulaireNewArticle.html";
        include "templates/template.html";
    }
    public function afficherDroitsInsuffisants()
    {
        $partial = "templates/droitsInsuffisants.html";
        include "templates/template.html";
    }
    public function afficherError($text)
    {
        $partial = "modules/articles/templates/errorServeur.html";
        include "templates/template.html";
    }
    public function newArticleOk(){}
    public function newArticleKo(){}
    public function editArticleOk(){}
    public function editArticleKo(){}
    public function removeArticleOk(){}
    public function removeArticleKo(){}

}