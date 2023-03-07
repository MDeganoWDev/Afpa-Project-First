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
        @$result = $this->model->selectAllArticles();
        if ($result) {
            return $result;
        } else {
            $this->vue->afficherError("Erreur de serveur");
        }
    }
    public function selectedArticle($slug)
    {
        @$articles = $this->model->selectAllArticles();
        @$thisArticle = $this->model->selectArticle($slug);
        if ($articles || $thisArticle) {
            $this->vue->afficherThisArticles($articles, $thisArticle);
        } else {
            $this->vue->afficherError("Erreur serveur");
        }
    }
    public function listeArticles()
    {
        @$result = $this->model->selectAllArticles();
        if ($result) {
            if (Session::getDroit() == "admin") {
                $this->vue->afficherListeArticles($result, "");
            } else {
                $this->vue->afficherDroitsInsuffisants();
            }
        } else {
            $this->vue->afficherError("Erreur serveur");
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
                $this->vue->afficherError("Erreur serveur");
            }
        } else {
            $this->vue->afficherError("Erreur de traitement de formulaire");
        }
    }
    public function editArticle($slug)
    {
        @$result = $this->model->selectArticle($slug);
        if ($result) {
            if (Session::getDroit() == "admin") {
                $this->vue->formulaireEditArticle($result);
            } else {
                $this->vue->afficherDroitsInsuffisants();
            }
        } else {
            $this->vue->afficherError("Erreur serveur");
        }
    }
    public function saveEditArticle($id)
    {
        if (isset($_POST)) {
            @$result = $this->model->updateArticle($_POST, $id);
            if ($result) {
                if (Session::getDroit() == "admin") {
                    $this->model->updateArticle($_POST, $id);
                    $this->vue->afficherListeArticles($this->model->selectAllArticles(), "Edition réussie");
                } else {
                    $this->vue->afficherDroitsInsuffisants();
                }
            } else {
                $this->vue->afficherError("Erreur serveur");
            }
        } else {
            $this->vue->afficherError("Erreur de traitement de formulaire");
        }
    }
    public function removeArticle($id)
    {
        @$result = $this->model->deleteArticle($id);
        if ($result) {
            if (Session::getDroit() == "admin") {
                $this->model->deleteArticle($id);
                $this->vue->afficherListeArticles($this->model->selectAllArticles(), "Suppression réussie");
            } else {
                $this->vue->afficherDroitsInsuffisants();
            }
        } else {
            $this->vue->afficherError("Erreur serveur");
        }
    }
}