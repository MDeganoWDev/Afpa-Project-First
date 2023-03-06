var data = "";
var markers = L.layerGroup(); // Créer un LayerGroup pour stocker les marqueurs
var map;
$(document).ready(function () {

    //création de la map leaflet
    map = L.map('map').setView([48.867, 2.333], 12);
    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    });
    tiles.addTo(map);
    
    myBalade(map);
    
    $('div#balade a.thumbnail').on('click', function () {
        // Récupérer l'id de l'image cliquée
        var clickedId = $(this).attr('id');
        var marker = markers.getLayers().find(function (layer) {
            return layer.options.alt === 'Marker' + clickedId;
        });
        /* // Supprimer les anciens marqueurs du LayerGroup
        markers.clearLayers();
        // Ajouter le marqueur dont l'attribut "alt" correspond à l'id de l'image cliquée
        var marker = markers.getLayers().find(function (layer) {
            return layer.options.alt === 'Marker' + clickedId;
        });
        if (marker) {
            marker.addTo(map);
            marker.bindPopup("Marqueur de l'image cliquée").openPopup();
        } */
        if (marker) {
            // Centrer la carte sur le marqueur et zoomer dessus
            map.setView(marker.getLatLng(), 15);
            marker.bindPopup("Marqueur de l'image cliquée").openPopup();
        }
    });
    
    
});

function afficherCarte(data, map) {
    for (var i = 0; i < data.records.length; i++) {
        //Verifie que le champs existe et que les coordonnées existes aussi
        if (data.records[i].geometry && data.records[i].geometry.coordinates) {
            var marker = L.marker([data.records[i].geometry.coordinates[1], data.records[i].geometry.coordinates[0]], {alt: 'Marker' + i});
            markers.addLayer(marker); // Ajouter le marqueur au LayerGroup
            marker.bindPopup("<b>" + data.records[i].fields.title + "</b>");
            markers.addTo(map);
        }
    }
    

}

