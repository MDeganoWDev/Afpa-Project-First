$(document).ready(function () {

    //coordonnÃ©es GPS et zoom de Toulouse 
    var map = L.map('map').setView([43.6025, 1.433], 11.5);
    //affichage de la carte Leaflet 
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);


    function myAjax(callback) {
        $.ajax({
            url: "https:data.toulouse-metropole.fr/api/records/1.0/search/?dataset=station-velo-toulouse&q=&rows=284",
            type: "GET",
            dataType: "json",

            async: true,
            success: function (result) {
                callback(result);
            },
            error() {
                console.log('Erreur');
                errorVelo();
            },
            complete: function () {
                console.log('fini');
            }
        })
    }

    myAjax(function (data) {
        $.each(data.records, function (index, record) {
            //icon personnalisée
            var icon = L.icon({
                iconUrl: '../modules/velo/images/velo.png',
                iconSize: [50, 55],
                popupAnchor: [-3, -76]
            });

            var markers = L.marker([record.fields.geo_point_2d[0], record.fields.geo_point_2d[1]], { icon: icon }).addTo(map);
            var infbulle = record.fields.num_station + " " + record.fields.nom;
            var infstation = "<h1>" + " Nom station : " + record.fields.nom + "</h1>" + "Numéro de station : " + record.fields.num_station + "<br/> Adresse : " + record.fields.street + "<br/> Commune : " + record.fields.commune + "<br/> Nombre Bornettes : " + record.fields.nb_bornettes + "<br/> En service : " + record.fields.en_service;
            markers.closePopup();
            markers.on('mouseover', function () {
                markers.bindTooltip(infbulle).openTooltip();

            });

            markers.on('click', function () {
                $("#result").html(infstation);
                afficherResult()

            });
        });
    });
    //apparition de la div avec les informations sur le côté droit et diminution de la taille de la carte, centrage des points lors de cette translation
    function afficherResult() {
        $('#map').css('width', '65%');
        $('#map .leaflet-map-pane').css('transform', 'translate3d(-170.223px, 10.0283px, 0px)');
        $('#affichageresult').css('display', 'flex');
    }
    //si MyAjax n'arrive pas à récupérer les données ce titre apparaîtra dans la div id map
    function errorVelo() {
        var composant = "";
        composant += "<h1> Le site n'est pas disponible actuellement </h1>";
        $("#map").html(composant);
    }

});