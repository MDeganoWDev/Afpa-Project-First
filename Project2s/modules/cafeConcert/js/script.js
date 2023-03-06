$(document).ready(function () {
    //AFFICHE CARTE LEAFLET
    var map = L.map('carte').setView([43.600000, 1.444209], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // CUSTOM ICON RACCOON
    var icon = L.icon({
        iconUrl: '/modules/cafeConcert/img/iconRaccoon.png',
        iconSize: [38, 39], // size of the icon
        popupAnchor: [-5, -20] // point from which the popup should open relative to the iconAnchor
    });

    // Ajoute un écouteur d'événements "click" à chaque bouton avec la classe "fleche"
    var flecheButtons = document.querySelectorAll('.fleche');
    flecheButtons.forEach(function (button) {
        button.addEventListener('click', function (event) {
            // Récupère le div parent avec la classe "cafe"
            var cafeDiv = event.target.parentNode.parentNode;
            // Change le texte des autres boutons en '+' et masque les autres divs "cafe-info"
            var otherButtons = document.querySelectorAll('.fleche');
            otherButtons.forEach(function (otherButton) {
                if (otherButton !== button) {
                    otherButton.innerHTML = '➕';
                }
            });
            var otherCafeDivs = document.querySelectorAll('.cafe');
            otherCafeDivs.forEach(function (div) {
                if (div !== cafeDiv) {
                    var otherCafeInfoDiv = div.querySelector('.cafe-info p');
                    otherCafeInfoDiv.style.display = 'none';
                }
            });

            // Change le texte du bouton cliqué et affiche/masque le div "cafe-info"
            var cafeInfoDiv = cafeDiv.querySelector('.cafe-info p');
            if (button.innerHTML === '➕') {
                button.innerHTML = '➖';
                cafeInfoDiv.style.display = 'block';
            } else {
                button.innerHTML = '➕';
                cafeInfoDiv.style.display = 'none';
            }
        });
    });

    //FONCTION AJAX
    // création d'un popup avec les infos au dessus de chaque point et dans la liste à gauche
    myAjax(function (data) {

        $.each(data.records, function (index, record) {

            //On met un icon customisé sur chaque café par rapport à leur position (lattitude/longitude)
            var marker = L.marker([record.fields.geo_point_2d[0], record.fields.geo_point_2d[1]], { icon: icon }).addTo(map);

            //Infos popup, pour chaque café, création d'un popup contenant le nom et l'adresse du café
            marker.bindPopup(record.fields.eq_nom_equipement + "<br/>" + record.fields.numero + " " + record.fields.lib_off + "<br/>" + record.fields.id_secteur_postal + " " + record.fields.eq_ville);
            //Si numéro de rue "undefined" alors on affiche le nom, la rue et le CP seulement
            if (record.fields.numero == undefined) {
                marker.bindPopup(record.fields.eq_nom_equipement + "<br/>" + record.fields.lib_off + "<br/>" + record.fields.id_secteur_postal + " " + record.fields.eq_ville);
            }
        });
    });

});