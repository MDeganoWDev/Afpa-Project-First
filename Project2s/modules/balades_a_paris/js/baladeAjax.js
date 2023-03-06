function myBalade(map){
    $.ajax({
        url: "https://opendata.paris.fr/api/records/1.0/search/?dataset=que-faire-a-paris-&q=&rows=20",
        dataType: "json",
        type:"GET",
        data: "",
        async: true,
        success: function(result){
            afficherCarte(result, map);
        },
        error: function(){

        },
        complete: function(){

        }
    })
}