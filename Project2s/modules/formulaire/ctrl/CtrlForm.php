<?php
class CtrlForm
{

    private $vue;
    private $model;

    public function __construct()
    {
        $this->vue = new VueForm();
        $this->model = new ModelForm();
    }
    public function formulaire()
    {
        $this->vue->afficherFormulaire();
    }



    public function enregistrerFormulaire()
    {
        $this->model->insert($_POST);
        $this->vue->afficherOk($_POST);
    }

    public function afficherContacts($status = 1, $mode = "R")
    {
        if (Session::getDroit() == "admin") {
            $data = $this->model->selectContacts();
            $this->vue->afficherContacts($data, $status, $mode);
        } else {
            $this->vue->afficherDroitsInsuffisants();
        }
    }

    public function deleteContact($id)
    {
        $result = $this->model->deleteContact($id);
        if ($result) {
            $this->afficherContacts(2, 'D');
        } else {
            $this->afficherContacts(3, 'D');
        }
    }

    public function editContact($id)
    {
        $contact = $this->model->selectContact($id);
        $this->vue->afficherFormulaire($contact);
    }

    public function modifierFormulaire($id){
        $result = $this->model->updateContact($_POST, $id);
        if ($result) {
            $this->afficherContacts(2, 'U');
        } else {
            $this->afficherContacts(3, 'U');
        }
    }

    /**
     * TESTS
     */
    public function testEnregistrerFormulaire()
    {
        $data = array(
            'nom' => 'garcia',
            'prenom' => 'sergio',
            'tel' => '0102030405',
            'email' => 'sgarcia@mail.ch',
            'message' => 'Hola'
        );
        // $data = [NULL, 'garcia', 'sergio', '0594847621', 'sgarcia@laposte.net', 'Hola'];
        $this->model->testInsert($data);
        die();
    }

    public function testSelectFormulaire()
    {
        $this->model->testSelect();
        die();
    }
}
