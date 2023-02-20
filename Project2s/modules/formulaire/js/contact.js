var contact = {
    nom: "",
    prenom: "",
    tel: "",
    email: "",
    message: "",
    ok: true,

    setOk: function(b) {
        this.ok = b;
    },

    isOk: function() {
        return this.ok;
    },

    setAll: function (eNom, ePrenom, eTel, eEmail, eMessage) {
        this.setNom(eNom);
        this.setPrenom(ePrenom);
        this.setTel(eTel);
        this.setEmail(eEmail);
        this.setMessage(eMessage);
    },

    setNom: function (element) {
        if (this.isAlpha(element.value)) {
            this.nom = element.value;
            this.notError(element);
        }
        else {
            this.error(element);
            this.ok = false; 
        }
    },

    getNom: function () {
        return this.nom;
    },

    setPrenom: function (element) {
        if (this.isAlpha(element.value)) {
            this.prenom = element.value;
            this.notError(element);
        }
        else {
            this.error(element);
            this.ok = false;
        }
    },

    getPrenom: function () {
        return this.prenom;
    },

    setTel: function (element) {
        if (this.isNumerique(element.value)) {
            this.tel = element.value;
            this.notError(element);
        }
        else {
            this.error(element);
            this.ok = false;
        }
    },

    getTel: function () {
        return this.tel;
    },

    setEmail: function (element) {
        if (this.isEmail(element.value)) {
            this.email = element.value;
            this.notError(element);
        }
        else {
            this.error(element);
            this.ok = false;
        }
    },

    getEmail: function () {
        return this.email;
    },

    setMessage: function (element) {
        if ((element.value) != '' ) {
            this.message = element.value;
            this.notError(element);
        }
        else {
            this.error(element);
            this.ok = false;
        }
    },

    getMessage: function () {
        return this.message;
    },

    isNumerique: function (val) {
        var ok = false;
        if (val != '') {
            var regex = /^[0-9\.]*$/;
            ok = regex.test(val);
        }
        return ok;
    },

    isEmail: function (val) {
        var ok = false;
        if (val != '') {
            var regex = /^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$/i;
            ok = regex.test(val);
        }
        return ok;
    },

    isAlpha: function (val) {
        var ok = false;
        if (val != '') {
            var regex = /^[a-zA-Z\-]*$/;
            ok = regex.test(val);

        }
        return ok;
    },

    error: function (element) {
        //element.parentNode.style.backgroundColor = "red";
        element.parentNode.classList.add("has-error");
    },
    notError: function (element) {
        //element.parentNode.style.backgroundColor = "transparent";
        element.parentNode.classList.remove("has-error");
    }

}
