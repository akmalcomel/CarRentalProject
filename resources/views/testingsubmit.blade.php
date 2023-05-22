<!DOCTYPE html>
<html>
<head>
    <style>
        #mapid {
            height: 500px;
            width: 40%;
        }
        #go-button {
        position: absolute;
        top: 80px;
        left: 20%;
        transform: translateX(-50%);
        z-index: 9999;
        }
        .address-input
        {
            z-index: 9998;
        }
        .distance-input {
            z-index: 9997;
        }


    </style>
    <title>My Map Page</title>
    <!-- Include the Leaflet CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.css" />
</head>
<body>
    <!-- Add the map container to your HTML -->
    <form method="post" action="/submit2">
    @csrf
    <div id="mapid"></div>
    <button id="go-button" type="button">Go</button>
    <input type="hidden" name="distance"  id="distance-input-hidden">
  <input type="hidden" name="latitude" id="latitude-input-hidden">
  <input type="hidden" name="longitude" id="longitude-input-hidden">
  <input type="submit" value="Submit" onclick="setHiddenInputs()">
  </form>

    <!-- Include the Leaflet JavaScript file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.js"></script>

    <!-- Initialize the map -->
    <script>

            var marker;
                window.onload = function() {
            var map = L.map('mapid').setView([3.07434693819793,101.50592519956311], 13); // Set the initial map center and zoom level
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { // Add the OpenStreetMap tile layer
                attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
                maxZoom: 18,
            }).addTo(map);

            // Add a marker to the map when the user clicks on it
            
            var campusMarker = L.marker([3.06818,101.499]).bindPopup("UiTM").addTo(map);

            var redIcon = L.icon({
                iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            var distanceInput = L.DomUtil.create('input', 'distance-input');
                        distanceInput.type = 'text';
                        distanceInput.id = 'distance-input';
                        distanceInput.placeholder = 'Distance to campus (km)';
                        distanceInput.style.position = 'absolute';
                        distanceInput.style.top = '10px';
                        distanceInput.style.left = '50%';
                        distanceInput.style.transform = 'translateX(-50%)';
                        map.getContainer().appendChild(distanceInput);


            var addressInput = L.DomUtil.create('input', 'address-input');
            addressInput.type = 'text';
            addressInput.id = 'address-input';
            addressInput.placeholder = 'Enter an address';
            addressInput.style.position = 'absolute';
            addressInput.style.top = '40px';
            addressInput.style.left = '50%';
            addressInput.style.transform = 'translateX(-50%)';
            addressInput.style.zIndex = '1000';
            map.getContainer().appendChild(addressInput);

            var goButton = document.getElementById('go-button');
            goButton.addEventListener('click', function() {
                var address = addressInput.value;
                if (address) {
                var geocodeUrl = 'https://nominatim.openstreetmap.org/search?format=json&q=' + encodeURIComponent(address);
                fetch(geocodeUrl)
                    .then(function(response) {
                    return response.json();
                    })
                    .then(function(json) {
                    if (json && json.length > 0) {
                        var latlng = L.latLng(json[0].lat, json[0].lon);
                        moveMarker(latlng);
                    } else {
                        alert('Address not found');
                    }
                    });
                }
            });
                        // Update the distance input field whenever the user moves the pin on the map
                                    function moveMarker(latlng) {
                            if (marker) {
                                map.removeLayer(marker);
                            }
                            marker = L.marker(latlng, {icon: redIcon}).addTo(map);
                            var distance = marker.getLatLng().distanceTo(campusMarker.getLatLng()) / 1000;
                            document.getElementById('distance-input').value = distance.toFixed(1) + ' km from UiTM';
                        }

                        map.on('click', function(e) {
                            moveMarker(e.latlng);
                        }); 
                    }

                        function setHiddenInputs() {
                    var distanceInput = document.getElementById('distance-input');
                    var hiddenDistanceInput = document.getElementById('distance-input-hidden');
                    var latitudeInput = document.getElementById('latitude-input-hidden');
                    var longitudeInput = document.getElementById('longitude-input-hidden');
                    var distance = distanceInput.value.split(" ")[0];
                    var latitude = marker.getLatLng().lat;
                    var longitude = marker.getLatLng().lng;
                    hiddenDistanceInput.value = distance;
                    latitudeInput.value = latitude;
                    longitudeInput.value = longitude;
                }

</script>
</body>
               
