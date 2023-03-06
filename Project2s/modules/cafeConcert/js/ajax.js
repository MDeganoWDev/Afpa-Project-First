function myAjax(callback) {
    $.ajax({

        url: 'https://data.toulouse-metropole.fr/api/records/1.0/search/?dataset=cafes-concerts&q=&rows=26',
        type: "GET",
        dataType: "json",

        async: true,
        success: function (result) {
            callback(result);
        },
        error(result) {
            console.log('Erreur');
            errorMeteo();
        },
        complete: function () {
            console.log('fini');
        }
    })
}


