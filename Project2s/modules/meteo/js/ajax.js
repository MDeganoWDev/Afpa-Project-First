function myAjax(o, callback) {
    $.ajax({
       
        url: o.url,
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