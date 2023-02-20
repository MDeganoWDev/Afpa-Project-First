$(document).ready(function () {

    //ON COMMENCE LE CODAGE DE LA COLORATION DES INPUT SI LES VALEURS SONT CORRECT
    document.querySelector("form#formulaire").addEventListener("submit", function (e) {
        //ON VISE L'INPUT NOM DANS UNE VAR AINSI QUE SA VALEUR

        contact.setOk(true);
        contact.setAll(document.getElementById("nom"), document.getElementById("prenom"), document.getElementById("tel"), document.getElementById("email"), document.getElementById("message"));

        if (contact.isOk()) {
            document.querySelector("div.row > div:nth-of-type(2)").innerHTML = contact.getNom() + " " + contact.getPrenom() + "<br>" + contact.getTel() + "<br>" + contact.getEmail() + "<br>" + contact.getMessage();
            // return false;
        }
        else {
            e.preventDefault();
            return false;
        }
        //NOUS EMPECHE DE RAFRAICHIR LA PAGE AU SUBMIT SI LE FORM N'EST PAS VALIDE

    });
});
