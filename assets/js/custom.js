var map;
var mylatlng = {
    lat: 13.784075,
	lng: 100.541251
} 
var options = {
    zoom: 17,
    center: new google.maps.LatLng(mylatlng),
    mapTyped:'roadmap'
}

var map = new google.maps.Map(document.getElementById('map'),options);
var marker = new google.maps.Marker({
    position: mylatlng,
    map: map,
    title: 'Current Work Place',
    icon:"https://cdn.iconscout.com/public/images/icon/premium/png-128/ghost-spooky-devil-halloween-clown-31d1885bf691057f-128x128.png"
})

