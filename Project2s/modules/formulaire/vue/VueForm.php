<?php
class VueForm
{
    public function __construct()
    {
    }

    public function afficherFormulaire($contact = false)
    {
        $partial = "modules/formulaire/templates/formulaire.html";
        include "templates/template.html";
    }

    public function afficherOk($data)
    {
        $partial = "ok.html";
        include "templates/template.html";
    }

    public function afficherNotOk()
    {
    }

    public function afficherContacts($contacts, $status, $mode)
    {

        if ($mode == "R") {
            $message = ($status == 1)
                ? Message::getMessage("Liste des contacts")
                : (($status == 2)
                    ? Message::getMessage("Enregistrement supprimé")
                    : Message::getMessage("Erreur de suppression"));
        } else if ($mode == "U") {
            $message = ($status == 1)
                ? Message::getMessage("Liste des contacts")
                : (($status == 2)
                    ? Message::getMessage("Enregistrement modifié")
                    : Message::getMessage("Erreur de modification"));
        } else if ($mode == "D") {
            $message = ($status == 1)
                ? Message::getMessage("Liste des contacts")
                : (($status == 2)
                    ? Message::getMessage("Enregistrement supprimé")
                    : Message::getMessage("Erreur de suppression"));
        } else {
        }
        $partial = "modules/formulaire/templates/contacts.html";
        include "templates/template.html";
    }

    public function afficherDroitsInsuffisants()
    {
        $partial = "templates/droitsInsuffisants.html";
        include "templates/template.html";
    }
}
