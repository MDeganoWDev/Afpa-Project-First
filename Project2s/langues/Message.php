<?php
class Message
{
    public static $messages = array(
        'fr' => array(
            'Liste des contacts' => "Liste des contacts",
            'Liste des utilisateurs' => "Liste des utilisateurs",
            'Enregistrement supprimé' => "Enregistrement supprimé",
            'Erreur de suppression' => "Erreur de suppression",
            'Enregistrement modifié' => "Enregistrement modifié",
            'Enregistrement effectué'=> "Enregistrement effectué",
            'Erreur de modification' => "Erreur de modification",
            'Formulaire de contact' => "Formulaire de contact",
            'Nom'=>"Nom",
            'Prenom'=>"Prenom",
            'Telephone'=>"Telephone",
            'Email'=>"Email",
            'Message' =>"Message",
            'Annuler' =>"Annuler",
            'Email perso' => "Email perso",
            'Accueil' => "Accueil",
            'Formulaire' => "Formulaire",
            'Login'  =>"Login",
            'Mot de passe' =>"Mot de passe",
            'Pseudo' => 'Pseudo',
            'Droit'=>'Droit',
            
            
        ),
        'en' => array(
            'Liste des contacts' => "Contact list",
            'Enregistrement supprimé' => "Record deleted",
            'Erreur de suppression' => "Error of deleting",
            'Enregistrement modifié' => "Modified record",
            'Enregistrement effectué'=> "Record created",
            'Erreur de modification' => "Update error",
            'Formulaire de contact' => "Contact form",
            'Nom'=> "Last name",
            'Prenom'=> "First name",
            'Telephone' => "Phone",
            'Email'=> "Email",
            'Message'=> "Message",
            'Annuler' => "Cancel",
            'Email perso' => "Personal Email",
            'Accueil' => "Home",
            'Formulaire' => "Form",
            'Login' => 'Login',
            'Mot de passe' => 'Password',
            'Pseudo' => 'Nickname',
            'Droit'=> 'Right',
            
        ),
        'es' => array(
            'Liste des contacts' => "Lista de contacto",
            'Enregistrement supprimé' => "Registro borrado",
            'Erreur de suppression' => "Error de borrado",
            'Enregistrement modifié' => "Registro cambiado",
            'Enregistrement effectué' => "Registro realizad",
            'Erreur de modification' => "Error de edicion",
            'Nom' => "Apellido",
            'Prenom' => "Nombre",
            'Telephone' => "Telefono",
            'Email' => "Email",
            'Message' => "Mensaje",
            'Annuler' => "Cancelar",
            'Email perso' => "Email personal",
            'Accueil' => "Recepción",
            'Formulaire' => "Formulario",
            'Login' => 'Login',
            'Mot de passe' => 'Contraseña',
            'Pseudo' => 'Apodo',
            'Droit' => 'Derecho',
        ),

    );

    public static function getMessage($key){
        if(array_key_exists($key, self::$messages[Session::getLangue()])){
            return self::$messages[Session::getLangue()][$key];
        }
        else{
            return $key;
        }
    }
}
