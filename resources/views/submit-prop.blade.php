<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TransMal| Submission page</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/price-range.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/fontello.css">
<link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
<link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/icheck.min_all.css">
<link rel="stylesheet" href="assets/css/price-range.css">
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/owl.theme.css">
<link rel="stylesheet" href="assets/css/owl.transitions.css">
<link rel="stylesheet" href="assets/css/wizard.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.js"></script>

<style>
     #mapid {
            height: 400px;
            width: 100%;
            z-index: 9995;
        }
        #go-button {
        position: absolute;
        top: 100px;
        left: 49%;
        transform: translateX(-50%);
        z-index: 9999;
        }
        .address-input
        {
            z-index: 9998;
        }
        .distance-input {
            z-index: 9000;
        }

</style>

    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>

@include('header')
        <!-- Body content -->


        <div class="page-head">
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Add your car</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">
                <div class="clearfix" >
                    <div class="wizard-container">

                        <div class="wizard-card ct-wizard-orange" id="wizardProperty">
                        <form id="contact" action="/add" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="wizard-header">
                                    <h3>
                                        <b>Submit</b> YOUR CAR <br>
                                        <small>Renting Car will become much easier</small>
                                    </h3>
                                </div>

                                <ul>
                                    <li><a href="#step1" data-toggle="tab">Step 1 </a></li>
                                    <li><a href="#step2" data-toggle="tab">Step 2 </a></li>
                                    <li><a href="#step3" data-toggle="tab">Step 3 </a></li>
                                    <li><a href="#step4" data-toggle="tab">Finished </a></li>
                                </ul>

                                <div class="tab-content">


                                    <div class="tab-pane" id="step1">
                                        <div class="row p-b-15  ">
                                            <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Car Model <small>(Brand & Model)</small></label>
                                                    <input name="carname" type="text" class="form-control" placeholder="Perodua Myvi" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Rental Price (RM) <small>Per Day</small></label>
                                                    <input oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="rentalprice" type="text" class="form-control" placeholder="400" required>
                                                </div>

                                                <div class="form-group">
                                                        <label>Transmission:</label>
                                                        <!--<select id="furnished" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Furnished type">-->
                                                        <select name= "propertytype"  class="selectpicker" title="Choose Transmission" required>
                                                        <option>Automatic</option>
                                                        <option>Manual</option>

                                                        </select>
                                                    </div>
                                                <div class="form-group">
                                                    <label>Pickup Area</label>
                                                    <input name="address" type="text" class="form-control" placeholder="Seksyen 9, Shah Alam" required>
                                                </div>
                                            </div>

                                            <!--<div class="col-sm-4 col-sm-offset-1">-->
                                            <div class="col-lg-6">
                                                    <h5>Pin Your Pick up Location</h5>
                                                    <div id="mapid"></div>
                                                    <button id="go-button" type="button">Go</button>
                                                    <input type="hidden" name="location" id="location-input-hidden">
                                                    <input type="hidden" name="latitude" id="latitude-input-hidden">
                                                    <input type="hidden" name="longitude" id="longitude-input-hidden">
                                                    <!--<input type="submit" value="Submit" onclick="setHiddenInputs()">-->

                                            </div>
                                        </div>
                                    </div>
                                    <!--  End step 1 -->

                                    <div class="tab-pane" id="step2">
                                        <h4 class="info-text">Advertise Your Car </h4>
                                        <div class="row">
                                        <div class="col-sm-12">
                                                <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Ad Title<small> Make it interesting!!</small></label>
                                                    <input name="title" type="text" class="form-control" placeholder="TITLE" maxlength="58" required>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Bank Details <small>Bank & Account Number</small></label>
                                                    <input name="bank" type="text" class="form-control" placeholder="CIMB 12345432145" maxlength="58" required>
                                                </div>
                                                </div>
                                            </div>



                                            <div class="col-sm-12">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Car Type:</label>
                                                        <!--<select id="furnished" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Furnished type">-->
                                                        <select name= "furnished" id="furnished" class="selectpicker" title="Car type" required>
                                                            <option>Sedan</option>
                                                            <option>Hatchback</option>
                                                            <option>SUV</option>
                                                            <option>Coupe</option>
                                                            <option>Van</option>
                                                            <option>Limousine</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Seats :</label>
                                                        <input oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="bathroom" type="text" class="form-control" placeholder="Seats" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Door :</label>
                                                        <select name="bedroom" id="bedroom" class="selectpicker" title="Door" required>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Years Built :</label>
                                                        <input oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="size" type="text" class="form-control" placeholder="Year" required>


                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Fuel :</label>
                                                        <select name="parking" id="parking" class="selectpicker show-tick form-control" required>
                                                            <option>Petrol</option>
                                                            <option>Diesel</option>



                                                        </select>
                                                    </div>
                                                </div>
                                                <!--<div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Floor :</label>
                                                        <select name="floor" id="floor" class="selectpicker" title="Floor" required>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                    </div>
                                                </div>-->

                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Rental Deposit (RM) :</label>
                                                        <input oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="rental" type="text" class="form-control" placeholder="RM" required>


                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-sm-12">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Car Description :</label>
                                                        <textarea name="description" class="form-control" required></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                           <!-- <div class="col-sm-12">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Nearby Highlights :</label>
                                                        <textarea name="highlight" class="form-control" placeholder="MRT, KFC, Easy to find food" required></textarea>
                                                    </div>
                                                </div>
                                            </div>-->


                                            <!--<div class="col-sm-12 padding-top-15">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="property-geo">Min bed :</label>
                                                        <input type="text" class="span2" value="" data-slider-min="0"
                                                               data-slider-max="600" data-slider-step="5"
                                                               data-slider-value="[250,450]" id="min-bed" ><br />
                                                        <b class="pull-left color">1</b>
                                                        <b class="pull-right color">120</b>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">

                                                    <div class="form-group">
                                                        <label for="price-range">Min baths :</label>
                                                        <input type="text" class="span2" value="" data-slider-min="0"
                                                               data-slider-max="600" data-slider-step="5"
                                                               data-slider-value="[250,450]" id="min-baths" ><br />
                                                        <b class="pull-left color">1</b>
                                                        <b class="pull-right color">120</b>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">

                                                    <div class="form-group">
                                                        <label for="property-geo">Property geo (m2) :</label>
                                                        <input type="text" class="span2" value="" data-slider-min="0"
                                                               data-slider-max="600" data-slider-step="5"
                                                               data-slider-value="[50,450]" id="property-geo" ><br />
                                                        <b class="pull-left color">40m</b>
                                                        <b class="pull-right color">12000m</b>
                                                    </div>
                                                </div>
                                            </div>-->

                                            <div class="col-sm-12 padding-top-6">
                                            <div class="col-sm-3">
                                                    <div class="form-group">

                                                            <label>
                                                               Features:
                                                            </label>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-sm-12 padding-top-10">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="facility[]" value="Air Conditioning"> Air Conditioning
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">

                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="facility[]" value="Reverse Camera"> Reverse Camera
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="facility[]" value="Apple CarPlay"> Apple CarPlay
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="facility[]" value="Hybrid/Electric"> Hybrid/Electric
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 padding-bottom-15">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="facility[]" value="Child Safety Seats(Upon Request)"> Child Seats(Upon Request)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="facility[]" value="Parking Sensor"> Parking Sensor
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="facility[]" value="Cruise Control"> Cruise Control
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="facility[]" value="Keyless Entry"> Keyless Entry
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <fieldset>

                              </fieldset>
                                            <br>
                                        </div>
                                    </div>
                                    <!-- End step 2 -->

                                    <div class="tab-pane" id="step3">
                                        <h4 class="info-text">Add images of your Car</h4>
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="property-video">Additional image :</label>
                                                    <input class="form-control" type="file" id="property-images" name="image" required>
                                                </div>

                                                <div class="form-group">
                                                <input class="form-control" type="file" id="property-images" name="image2" required>
                                                </div>

                                                <div class="form-group">
                                                <input class="form-control" type="file" id="property-images" name="image3" required>
                                                </div>

                                                <div class="form-group">
                                                <input class="form-control" type="file" id="property-images" name="image4" required>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--  End step 3 -->


                                    <div class="tab-pane" id="step4">
                                        <h4 class="info-text"> Finished and submit </h4>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="">
                                                    <p>
                                                        <label><strong>Terms and Conditions</strong></label>
                                                        By accessing or using  our services, such as
                                                        posting your property advertisement with your personal
                                                        information on our website you agree to the
                                                        collection, use and disclosure of your personal information
                                                        in the legal proper manner
                                                    </p>



                                                </div>
                                            </div>
                                        </div>
                                        <fieldset>
                                <button type="submit" id="form-submit" class="btn btn-primary" onclick="setHiddenInputs()">PUBLISH</button>
                              </fieldset>
                                    </div>
                                    <!--  End step 4 -->

                                </div>

                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-primary' name='next' value='Next' />
                                        <!--<input type='button' class='btn btn-finish btn-primary ' name='finish' value='Finish' />-->

                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-default' name='previous' value='Previous' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                        <!-- End submit form -->
                    </div>
                </div>
            </div>
        </div>

          <!-- Footer area-->
          @include('footer')

        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="assets/js//jquery-1.10.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>
        <script src="assets/js/easypiechart.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/icheck.min.js"></script>

        <script src="assets/js/price-range.js"></script>
        <script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/wizard.js"></script>

        <script src="assets/js/main.js"></script>


        <!-- to initialize mape -->
        <script>
            var marker;

            window.onload = function() {
                var map = L.map('mapid').setView([3.06818, 101.499], 11); // Set the initial map center and zoom level
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    // Add the OpenStreetMap tile layer
                    attribution:
                        '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
                    maxZoom: 18,
                }).addTo(map);

                var redIcon = L.icon({
                    iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                    iconSize: [25, 41],
                    iconAnchor: [12, 41],
                    popupAnchor: [1, -34],
                    shadowSize: [41, 41],
                });

                var addressInput = L.DomUtil.create('input', 'address-input');
                addressInput.type = 'text';
                addressInput.id = 'address-input';
                addressInput.placeholder = 'Search Property Area (if needed)';
                addressInput.style.position = 'absolute';
                addressInput.style.top = '20px';
                addressInput.style.left = '50%';
                addressInput.style.transform = 'translateX(-50%)';
                addressInput.style.zIndex = '1000';
                addressInput.style.height = '30px';
                addressInput.style.width = '200px';
                addressInput.style.marginTop = '7px';

                addressInput.style.fontFamily = 'Arial';
                addressInput.style.fontSize = '12px';

                addressInput.addEventListener('click', function(event) {
                    // Stop propagating the click event to the map to prevent the pin from moving
                    event.stopPropagation();
                });

                map.getContainer().appendChild(addressInput);

                document.getElementById('go-button').addEventListener('click', function() {
                    var address = document.getElementById('address-input').value;
                    if (address) {
                        var geocodeUrl =
                            'https://nominatim.openstreetmap.org/search?format=json&q=' +
                            encodeURIComponent(address);
                        fetch(geocodeUrl)
                            .then(function(response) {
                                return response.json();
                            })
                            .then(function(json) {
                                if (json && json.length > 0) {
                                    var latlng = L.latLng(json[0].lat, json[0].lon);
                                    moveMarker(latlng);
                                    map.setView(latlng, 16); // Set the map view to the searched location with a zoom level of 16
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
                    marker = L.marker(latlng, { icon: redIcon }).addTo(map);

                    var reverseGeocodeUrl =
                        'https://nominatim.openstreetmap.org/reverse?format=json&lat=' +
                        latlng.lat +
                        '&lon=' +
                        latlng.lng;
                    fetch(reverseGeocodeUrl)
                        .then(function(response) {
                            return response.json();
                        })
                        .then(function(json) {
                            if (json && json.address) {
                                document.getElementById('address-input').value = json.display_name;
                                document.getElementById('latitude-input-hidden').value = latlng.lat;
                                document.getElementById('longitude-input-hidden').value = latlng.lng;
                                document.getElementById('location-input-hidden').value = json.display_name;
                            } else {
                                document.getElementById('address-input').value = '';
                                document.getElementById('location-input-hidden').value = '';

                            }
                        });
                }

                map.on('click', function(e) {
                    moveMarker(e.latlng);
                });
            }

            function setHiddenInputs() {
                var latitudeInput = document.getElementById('latitude-input-hidden');
                var longitudeInput = document.getElementById('longitude-input-hidden');
                var distance = distanceInput.value.split(' ')[0];
                var latitude = marker.getLatLng().lat;
                var longitude = marker.getLatLng().lng;

                latitudeInput.value = latitude;
                longitudeInput.value = longitude;
            }
        </script>


    </body>
</html>
