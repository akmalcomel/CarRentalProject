<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>UiTM|Edit Property</title>
        <meta name="description" content="company is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="{{URL::asset('favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{URL::asset('favicon.ico')}}" type="image/x-icon">

        <link rel="stylesheet" href="{{URL::asset('assets/css/normalize.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/fontello.css')}}">
        <link href="{{URL::asset('assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/fonts/icon-7-stroke/css/helper.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/css/animate.css')}}" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap-select.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/icheck.min_all.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/price-range.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/owl.transitions.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/lightslider.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/wizard.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}">
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
        top: 120px;
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

    <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://localhost:8000/home"><img src="{{ url('assets/LogoUiTM.png')}}" width="200" height="150" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('register.html')" data-wow-delay="0.4s">Login</button>
                        <button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('submit-property.html')" data-wow-delay="0.5s">Submit</button>
                    </div>-->
                    <ul class="main-nav nav navbar-nav navbar-right">

                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="http://localhost:8000/home">Home</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="http://localhost:8000/listprop">Cars</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="http://localhost:8000/myads">My Cars  </a></li>



                        <li class="wow fadeInDown" data-wow-delay="0.1s"> @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                   <li><a href="{{ url('/user/profile') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Profile</a></li>
                                @else
                                <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                    @if (Route::has('register'))
                                    <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                    @endif
                                @endauth
                                <li><button class="navbar-btn nav-button wow fadeInRight" onclick="window.location.href = 'http://localhost:8000/submitp';" data-wow-delay="0.5s">Submit</button></li>

                            </div>
                        @endif
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!-- Body content -->


        <div class="page-head">
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Edit My Car</h1>
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
                        <form id="contact" action="/edit" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="wizard-header">
                                    <h3>
                                        <b>EDIT</b> MY CAR <br>
                                        <small></small>
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
                                                    <input name="propertyname" value="{{$output->propname}}" type="text" class="form-control" placeholder="Super villa ..." required>
                                                </div>
                                                <input type="hidden" name="id" id="record-id" value="{{$output->id}}">


                                                <div class="form-group">
                                                    <label>Rental Price (RM) <small>Per Day</small></label>
                                                    <input oninput="this.value = this.value.replace(/[^0-9]/g, '')"  name="propertyprice" value="{{$output->price}}" type="text" class="form-control" placeholder="3330000" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Transmission:</label>
                                                    <select name="propertytype" class="selectpicker" title="Property type" required>
                                                        <option value="Automatic" {{ $output->type == 'Automatic' ? 'selected' : '' }}>Automatic</option>
                                                        <option value="Manual" {{ $output->type == 'Manual' ? 'selected' : '' }}>Manual</option>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Pickup Area</label>
                                                    <input name="address" type="text" value="{{$output->address}}" class="form-control" placeholder="" required>
                                                </div>
                                            </div>

                                            <!--<div class="col-sm-4 col-sm-offset-1">-->
                                            <div class="col-lg-6">
                                                    <h5>Pin Your Pickup Location</h5>
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
                                        <h4 class="info-text"> Advertise Your Car </h4>
                                        <div class="row">
                                        <div class="col-sm-12">
                                                <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Ad Title<small></small></label>
                                                    <input name="title" value="{{$output->title}}" type="text" class="form-control" placeholder="TITLE" maxlength="58" required>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Bank Details <small>Bank & Account Number</small></label>
                                                        <input name="bank" value="{{$output->bank}}" type="text" class="form-control" placeholder="CIMB 12345432145" maxlength="58" required>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-sm-12">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Car Type:</label>
                                                        <select name="furnished" id="furnished" class="selectpicker" title="Furnished type" required>
                                                            <option value="Sedan" @if($output->furnish == "Sedan") selected @endif>Sedan</option>
                                                            <option value="Hatchback" @if($output->furnish == "Hatchback") selected @endif>Hatchback</option>
                                                            <option value="SUV" @if($output->furnish == "SUV") selected @endif>SUV</option>
                                                            <option value="Coupe" @if($output->furnish == "Coupe") selected @endif>Coupe</option>
                                                            <option value="Van" @if($output->furnish == "Van") selected @endif>Van</option>
                                                            <option value="Limousine" @if($output->furnish == "Limousine") selected @endif>Limousine</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Seats :</label>
                                                        <input name="bathroom" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="{{$output->bathroom}}" type="text" class="form-control"  maxlength="58" required>

                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Door :</label>
                                                        <select name="bedroom" id="bedroom" class="selectpicker" title="Bedroom" required>
                                                            <option @if($output->bedroom == "1") selected @endif>1</option>
                                                            <option @if($output->bedroom == "2") selected @endif>2</option>
                                                            <option @if($output->bedroom == "3") selected @endif>3</option>
                                                            <option @if($output->bedroom == "4") selected @endif>4</option>
                                                            <option @if($output->bedroom == "5") selected @endif>5</option>
                                                            <option @if($output->bedroom == "6") selected @endif>6</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Years Built :</label>
                                                        <input oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="size" type="text" value="{{$output->size}}" class="form-control" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Parking :</label>
                                                        <select name="parking" id="parking" class="selectpicker show-tick form-control" required>
                                                            <option value="Petrol" @if($output->parking == "Petrol") selected @endif>Petrol</option>
                                                            <option value="Diesel" @if($output->parking == "Diesel") selected @endif>Diesel</option>

                                                           </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Rental Deposit (RM) :</label>
                                                        <input oninput="this.value = this.value.replace(/[^0-9]/g, '')"  name="rental" type="text" value="{{$output->deposit}}" class="form-control" placeholder="RM" required>


                                                    </div>
                                                </div>

                                            </div>








                                            <div class="col-sm-12">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Car Description :</label>
                                                        <textarea name="description"  class="form-control" placeholder="MRT, KFC, Easy to find food" required>{{$output->description}}"</textarea>
                                                    </div>
                                                </div>
                                            </div>




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
    @foreach(['Air Conditioning', 'Reverse Camera', 'Apple CarPlay', 'Hybrid/Electric'] as $facility)
        <div class="col-sm-3">
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="facility[]" value="{{ $facility }}" {{ in_array($facility, $selectedFacilities) ? 'checked' : '' }}>
                        {{ $facility }}
                    </label>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="col-sm-12 padding-bottom-15">
    @foreach(['Child Safety Seats(Upon Request)', 'Parking Sensor', 'Cruise Control', 'Keyless Entry'] as $facility)
        <div class="col-sm-3">
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="facility[]" value="{{ $facility }}" {{ in_array($facility, $selectedFacilities) ? 'checked' : '' }}>
                        {{ $facility }}
                    </label>
                </div>
            </div>
        </div>
    @endforeach
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
                                                <label for="property-images">Additional Image 1:</label>
                                                <input class="form-control" type="file" id="property-images" name="image" value="{{ url('public/Image/'.$output->image) }}" >
                                                <br>
                                                <label>Current Image:</label>
                                                <img src="{{ url('public/Image/'.$output->image) }}" alt="Current Image" width="200px">
                                            </div>

                                            <div class="form-group">
                                                <label for="property-images">Additional Image 2:</label>
                                                <input class="form-control" type="file" id="property-images" name="image2">
                                                <br>
                                                <label>Current Image:</label>
                                                <img src="{{ url('public/Image/'.$output->image2) }}" alt="Current Image" width="200px">
                                            </div>

                                            <div class="form-group">
                                                <label for="property-images">Additional Image 3:</label>
                                                <input class="form-control" type="file" id="property-images" name="image3">
                                                <br>
                                                <label>Current Image:</label>
                                                <img src="{{ url('public/Image/'.$output->image3) }}" alt="Current Image" width="200px">
                                            </div>

                                            <div class="form-group">
                                                <label for="property-images">Additional Image 4:</label>
                                                <input class="form-control" type="file" id="property-images" name="image4">
                                                <br>
                                                <label>Current Image:</label>
                                                <img src="{{ url('public/Image/'.$output->image4) }}" alt="Current Image" width="200px">
                                            </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!--  End step 3 -->


                                    <div class="tab-pane" id="step4">
                                        <h4 class="info-text"> Save and Publish </h4>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="">
                                                    <p>Make sure all the details that been edited is correct and in proper manner.

                                                    </p>

                                                    <fieldset>
                                <button type="submit" id="form-submit" class="btn btn-primary" onclick="setHiddenInputs()">Save</button>
                              </fieldset>

                                                </div>
                                            </div>
                                        </div>

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

          <script src="{{URL::asset('assets/js/vendor/modernizr-2.6.2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap-hover-dropdown.js')}}"></script>
<script src="{{URL::asset('assets/js/easypiechart.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.easypiechart.min.js')}}"></script>
<script src="{{URL::asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('assets/js/wow.js')}}"></script>
<script src="{{URL::asset('assets/js/icheck.min.js')}}"></script>

<script src="{{URL::asset('assets/js/price-range.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{URL::asset('assets/js/wizard.js')}}"></script>

<script src="{{URL::asset('assets/js/main.js')}}"></script>



<script>
    var marker;

    window.onload = function() {
        var map = L.map('mapid').setView([{{$output->latitude}}, {{$output->longitude}}], 11); // Set the initial map center and zoom level
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

        marker = L.marker([{{$output->latitude}}, {{$output->longitude}}], { icon: redIcon, draggable: true }).addTo(map);

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
        addressInput.value = {!! html_entity_decode(json_encode($output->highlights)) !!};
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
