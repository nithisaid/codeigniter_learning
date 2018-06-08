
var locations = [
    ['ร้านส้มตำหลังกระทรวง',13.786098, 100.536085,17],
    ['ร้านลาบอุบล',13.776290, 100.532768,17],
    ['ร้านส้มตำห้าแยก',13.782727, 100.564692,17],
    ['ร้านส้มตำประสาน',13.781003, 100.544241,17]
];

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
/*
var marker = new google.maps.Marker({
    position: mylatlng,
    map: map,
    title: 'Current Work Place',
    icon:"https://cdn.iconscout.com/public/images/icon/premium/png-128/ghost-spooky-devil-halloween-clown-31d1885bf691057f-128x128.png"
})
*/


// Multiple Maker

var infowindow = new google.maps.InfoWindow();
var marker, i;
for (i=0; i<locations.length; i++) {
    marker = new google.maps.Marker({
        position:  new google.maps.LatLng(locations[i][1],locations[i][2]),
        map: map,
        title:locations[i][0]

    });
    
}