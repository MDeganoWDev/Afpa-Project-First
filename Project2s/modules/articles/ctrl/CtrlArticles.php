<?php
class CtrlArticles
{

    private $model;
    private $vue;

    public function __construct()
    {

        $this->vue = new VueArticles();
        $this->model = new ModelArticles();
    }

    public function articles()
    {
        $this->vue->afficherArticles($this->model->selectAllArticles());
    }
    public function selectedArticle($id)
    {
        $articles = $this->model->selectAllArticles();
        $thisArticle = $this->model->selectArticle($id);
        $this->vue->afficherThisArticles($articles, $thisArticle);
    }
    public function listeArticles()
    {
        if (Session::getDroit() == "admin") {
            $result = $this->model->selectAllArticles();
            $this->vue->afficherListeArticles($result, "");
        } else {
            $this->vue->afficherDroitsInsuffisants();
        }
    }
    public function newArticle()
    {
        if (Session::getDroit() == "admin") {
            $this->vue->formulaireNewArticle();
        } else {
            $this->vue->afficherDroitsInsuffisants();
        }
    }
    public function saveNewArticle()
    {
        if (isset($_POST)) {
            @$result = $this->model->createArticle($_POST);
            if ($result) {
                if (Session::getDroit() == "admin") {
                    $this->model->createArticle($_POST);
                    $this->vue->afficherListeArticles($this->model->selectAllArticles(), "Création réussie");
                } else {
                    $this->vue->afficherDroitsInsuffisants();
                }
            } else {
                $this->vue->afficherError("Erreur de serveur");
            }
        } else {
            $this->vue->afficherError("Erreur de traitement de formulaire");
        }
    }
    public function editArticle($id)
    {
        if (Session::getDroit() == "admin") {
            $result = $this->model->selectArticle($id);
            $this->vue->formulaireEditArticle($result);
        } else {
            $this->vue->afficherDroitsInsuffisants();
        }
    }
    public function saveEditArticle($id)
    {
        if (Session::getDroit() == "admin") {
            $this->model->updateArticle($_POST, $id);
            $this->vue->afficherListeArticles($this->model->selectAllArticles(), "Edition réussie");
        } else {
            $this->vue->afficherDroitsInsuffisants();
        }
    }
    public function removeArticle($id)
    {
        if (Session::getDroit() == "admin") {
            $this->model->deleteArticle($id);
            $this->vue->afficherListeArticles($this->model->selectAllArticles(), "Suppression réussie");
        } else {
            $this->vue->afficherDroitsInsuffisants();
        }
    }

}