
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 48.862725, lng: 2.287592},
    zoom: 6
  });
  var input = /** @type {!HTMLInputElement} */(
      document.getElementById('pac-input'));

  var types = document.getElementById('type-selector');
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

  var infowindow = new google.maps.InfoWindow();
  var marker = new google.maps.Marker({
    map: map,
    anchorPoint: new google.maps.Point(0, -29)
  });

  autocomplete.addListener('place_changed', function() {
    infowindow.close();
    marker.setVisible(false);
    var place = autocomplete.getPlace();
    if (!place.geometry) {
      window.alert("Autocomplete's returned place contains no geometry");
      return;
    }

    // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17);  // Why 17? Because it looks good.
    }
    marker.setIcon(/** @type {google.maps.Icon} */({
      url: place.icon,
      size: new google.maps.Size(71, 71),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(17, 34),
      scaledSize: new google.maps.Size(35, 35)
    }));
    marker.setPosition(place.geometry.location);
    marker.setVisible(true);

    var address = '';
    if (place.address_components) {
      address = [
        (place.address_components[0] && place.address_components[0].short_name || ''),
        (place.address_components[1] && place.address_components[1].short_name || ''),
        (place.address_components[2] && place.address_components[2].short_name || '')
      ].join(' ');
    }

    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
    infowindow.open(map, marker);
    //console.log(place.address_components);
    $('#adresse').attr('value', place.address_components[0]['long_name'] +' '+place.address_components[1]['long_name']);
    $('#cp').attr('value', place.address_components[6]['long_name']);
    $('#ville').attr('value', place.address_components[2]['long_name']);
  });

}

var t;//on declare le timer
function bBouge()
{
var texte_defilant=document.getElementById('texte_defilant');//ion recupere la balise qui a pour id "texte_defilant"

var pxRight=texte_defilant.style.right.replace('px','');//on recupere le chiffre ( sans le px a la fin )

var taille_texte=texte_defilant.offsetWidth;//offsetWidth c'est la taille du div.

var screenW=document.getElementById('texte_defilant').offsetWidth;//taille de la balise <div> qui contient le msg defilant

if(pxRight==-700-taille_texte)//si les pixels sont arrivés par rapport au bord gauche a la taille du texte ( donnera donc une position negative, du genre -100 )

pxRight=screenW;//on remet le texte a la fin ( tout a droite )

else
pxRight--;//on baisse les pixels ( ce qui provoque le decalage vers la gauche)

texte_defilant.style.right=pxRight+"px";//on attribue la nouvelle position au texte

t=setTimeout(function(){bBouge(); } ,0.1);//toute les 0.010 secondes on rappele la fonction a l'infini ( recursivement )

}

onload=function(){

document.getElementById('texte_defilant').style.right = document.getElementById('texte_defilant').offsetWidth+'px';

t=setTimeout(function(){bBouge(); } ,0.1);

}
