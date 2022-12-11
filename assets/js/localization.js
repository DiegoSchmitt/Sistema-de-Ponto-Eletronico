
var map

function success(pos){

    if(map === undefined){
        map = L.map('map').setView([pos.coords.latitude, pos.coords.longitude], 13)
    }else{
        map.remove()
        map = L.map('map').setView([pos.coords.latitude, pos.coords.longitude], 13)
    }

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
   
}).addTo(map);

L.marker([pos.coords.latitude, pos.coords.longitude]).addTo(map)
    .bindPopup('Administrador')
    .openPopup();
}

function error(err){
    console.log(err)
}

var watchID = navigator.geolocation.watchPosition(success, error, {
    enableHighAccuracy:true,
    timeout: 500
})

navigator.geolocation.getCurrentPosition(success)