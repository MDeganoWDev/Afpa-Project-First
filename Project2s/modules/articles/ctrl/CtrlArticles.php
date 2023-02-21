<?php
class CtrlArticles{

    private $model;
    private $vue;

    public function __construct(){

        $this->vue = new VueArticles();
        $this->model = new ModelArticles();
    }
    
    public function articles(){}
    public function listeArticles(){}
    public function newArticle()
    {
        $this->vue->formulaireNewArticle();
    }
    public function saveNewArticle()
    {
       $this->model->createArticle($_POST);
       $this->vue->listeArticles();
    }
    public function editArticle(){}
    public function saveEditArticle(){}
    public function removeArticle(){}

}