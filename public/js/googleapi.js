var addressInput;

$("#addressForm").keydown(function (event) {
    console.log(event.keyCode);
    if (event.keyCode == 13) {
        addressInput = $("#addressForm").val();
        initMap();
    }
});

$("#addressButton").on("click", function (event) {
    addressInput = $("#addressForm").val();
    initMap();
});


function initMap() {
    var sweetyams =  {lat: 29.423180, lng: -98.47596},
    indianapolis = {lat: 39.79, lng: -86.14},
    mapOptions = {
        zoom: 18,
        center: sweetyams
};


    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions),
    mapAddress = new google.maps.Geocoder(),
    addressdirection = addressInput,
    marker = new google.maps.Marker({
        position: sweetyams,
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP
    }),
    infowindow = new google.maps.InfoWindow({
        content: "<h4>Sweet yams.</h4>"
    });
    marker.addListener("click", function (event) {
        infowindow.open(map, marker);

    }),
    mapAddress.geocode({"address": addressdirection}, function (result, status){
        if (status == google.maps.GeocoderStatus.OK) {
            var directionsDisplay = new google.maps.DirectionsRenderer({
                map: map
            });
            // Set destination, origin and travel mode.
            var request = {
                destination: sweetyams,
                origin: addressdirection,
                travelMode: google.maps.TravelMode.DRIVING
            },
            // Pass the directions request to the directions service.
            directionsService = new google.maps.DirectionsService();
            directionsService.route(request, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    // Display the route on the map.
                    directionsDisplay.setDirections(response);
                }
            });
        }
    });
}
initMap();
