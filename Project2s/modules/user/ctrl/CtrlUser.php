<?php
class CtrlUser
{

    private $model;
    private $vue;

    public function __construct()
    {
        $this->model = new ModelUser();
        $this->vue = new VueUser();
    }

    function login()
    {
        $this->vue->afficherLogin();
    }

    function seConnecter()
    {
        $data = $this->model->seConnecter($_POST);

        if (empty($data)) {
            /*                 unset($_SESSION['pseudo']);
                unset($_SESSION['droit']); */
            Session::delDroit();
            Session::delPseudo();
        } else {
/*             $_SESSION['pseudo'] = $data[0]['pseudo'];
            $_SESSION['droit'] = $data[0]['droit']; */
            Session::setDroit($data[0]['droit']);
            Session::setPseudo($data[0]['pseudo']);

            $this->vue->connexionOk($_POST);
        }

        /* $this->vue->seConnecter($_POST); */
    }

    public function seDeconnecter()
    {
        /*         unset($_SESSION['pseudo']);
        unset($_SESSION['droit']); */
        Session::delDroit();
        Session::delPseudo();
        $this->login();
    }

    public function addUser()
    {
        $this->vue->addUser();
    }

    public function addUserAdmin()
    {
        $this->vue->addUserAdmin();
    }

    public function saveUser()
    {
        if($this->model->insert($_POST))
        {
            $this->vue->saveOk();
        }else{
            $this->vue->saveNotOk();
        }
        
    }
    public function saveUserAdmin()
    {
        if($this->model->insertAdmin($_POST))
        {
            $this->vue->saveOk();
        }else{
            $this->vue->saveNotOk();
        }
        
    }

   

    public function afficherUsers($status = 1, $mode = "R")
    {
        if (Session::getDroit() == "admin") {
            $data = $this->model->selectUsers();
            $this->vue->afficherUsers($data, $status, $mode);
        } else {
            $this->vue->afficherDroitsInsuffisants();
        }
    }

    public function editUser()
    {
        if (Session::getDroit() == "admin") {
            $this->model->editUser($_POST);
            $data = $this->model->selectUsers();
            $this->vue->afficherUsers($data, 1, "U");
        } else {
            $this->vue->afficherDroitsInsuffisants();
        }
    }

    public function deleteUser($id)
    {
        if (Session::getDroit() == "admin") {
            $this->model->deleteUser($id);
            $data = $this->model->selectUsers();
            $this->vue->afficherUsers($data, 1, "D");
        } else {
            $this->vue->afficherDroitsInsuffisants();
        }
    }

    
    
}
