
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>UITM Property| Property  page</title>
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
        <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.css" />

        <style>
            #mapid {
            height: 400px;
            width: 100%;
        }
        .distance-input {
            z-index: 9997;
        }
        </style>
    </head>
    <body>
        <!-- -->
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
                    <a class="navbar-brand" href="http://localhost:8000/adminh"><img src="{{ url('assets/LogoUiTM.png')}}" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('register.html')" data-wow-delay="0.4s">Login</button>
                        <button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('submit-property.html')" data-wow-delay="0.5s">Submit</button>
                    </div>-->
                    <ul class="main-nav nav navbar-nav navbar-right">

                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="http://localhost:8000/adminh">Home</a></li>
                        

                    
                        <li class="wow fadeInDown" data-wow-delay="0.1s"> @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                   <li><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
                                @else
                                <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                    @if (Route::has('register'))
                                    <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                    @endif
                                @endauth
                               
                    
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
                        <h1 class="page-title"><strong>{{$output['title']}} </strong></h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   

                <div class="clearfix" >

                    <div class="col-md-8 single-property-content prp-style-1 ">
                        <div class="row">
                            <div class="light-slide-item">            
                                <div class="clearfix">
                                    <div class="favorite-and-print">
                                       
                                        <a class="printer-icon " href="javascript:window.print()">
                                            <i class="fa fa-print"></i> 
                                        </a>
                                    </div>
                                                                    <!-- Container for the image gallery -->
                                <div class="containers">

                                <!-- Full-width images with number text -->
                                <div class="mySlides">
                                <div class="numbertext">1 / 4</div>
                                    <img src="{{ url('public/Image/'.$output->image) }}" style="width:100%">
                                </div>

                                <div class="mySlides">
                                <div class="numbertext">2 / 4</div>
                                    <img src="{{ url('public/Image/'.$output->image2) }}" style="width:100%">
                                </div>

                                <div class="mySlides">
                                <div class="numbertext">3 / 4</div>
                                    <img src="{{ url('public/Image/'.$output->image3) }}" style="width:100%">
                                </div>

                                <div class="mySlides">
                                <div class="numbertext">4 / 4</div>
                                    <img src="{{ url('public/Image/'.$output->image4) }}" style="width:100%">
                                </div>


                                <!-- Next and previous buttons -->
                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                                <!-- Image text -->
                        

                                <!-- Thumbnail images -->
                                <div class="row">
                                <div class="columns">
                                    <img class="demo cursor" src="{{ url('public/Image/'.$output->image) }}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                                </div>
                                <div class="columns">
                                    <img class="demo cursor" src="{{ url('public/Image/'.$output->image2) }}" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                                </div>
                                <div class="columns">
                                    <img class="demo cursor" src="{{ url('public/Image/'.$output->image3) }}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                                </div>
                                <div class="columns">
                                    <img class="demo cursor" src="{{ url('public/Image/'.$output->image4) }}" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                                </div>
                               
                                </div>
                                </div>

                                <script>
                                        let slideIndex = 1;
                                        showSlides(slideIndex);

                                        function plusSlides(n) {
                                        showSlides(slideIndex += n);
                                        }

                                        function currentSlide(n) {
                                        showSlides(slideIndex = n);
                                        }

                                        function showSlides(n) {
                                        let i;
                                        let slides = document.getElementsByClassName("mySlides");
                                        let dots = document.getElementsByClassName("demo");
                                        let captionText = document.getElementById("caption");
                                        if (n > slides.length) {slideIndex = 1}
                                        if (n < 1) {slideIndex = slides.length}
                                        for (i = 0; i < slides.length; i++) {
                                            slides[i].style.display = "none";
                                        }
                                        for (i = 0; i < dots.length; i++) {
                                            dots[i].className = dots[i].className.replace(" active", "");
                                        }
                                        slides[slideIndex-1].style.display = "block";
                                        dots[slideIndex-1].className += " active";
                                        captionText.innerHTML = dots[slideIndex-1].alt;
                                        }
                                </script>
                            

                                   <!-- <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                        
                                        <li data-thumb="{{URL::asset('assets/img/property-1/property1.jpg')}}"> 
                                            <img src="{{URL::asset('assets/img/property-1/property1.jpg')}}" />
                                        </li>
                                        <li data-thumb="{{URL::asset('assets/img/property-1/property2.jpg')}}"> 
                                            <img src="{{URL::asset('assets/img/property-1/property3.jpg')}}" />
                                        </li>
                                        <li data-thumb="{{URL::asset('assets/img/property-1/property3.jpg')}}"> 
                                            <img src="{{URL::asset('assets/img/property-1/property3.jpg')}}" />
                                        </li>
                                        <li data-thumb="{{URL::asset('assets/img/property-1/property4.jpg')}}"> 
                                            <img src="{{URL::asset('assets/img/property-1/property4.jpg')}}" />
                                        </li>                                         
                                    </ul>-->
                                </div>
                            </div>
                        </div>

                        <div class="single-property-wrapper">
                            <div class="single-property-header">                                          
                                <h1 class="property-title pull-left">{{$output['propname']}}</h1>
                                <span class="property-price pull-right"><strong>RM{{$output['price']}}</strong></span>
                            </div>

                            <div class="property-meta entry-meta clearfix ">   

                            <div class="col-xs-6 col-sm-4 col-md-4 p-b-15">
                                <span class="property-info-icon icon-tag">                                        
                                    <img src="{{URL::asset('assets/img/icon/os.png')}}">
                                </span>
                                <span class="property-info-entry">
                                    <span class="property-info-label">Type</span>
                                    <span class="property-info-value">{{$output['type']}}</span>
                                </span>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-4 p-b-15">
                                <span class="property-info icon-area">
                                    <img src="{{URL::asset('assets/img/icon/room.png')}}">
                                </span>
                                <span class="property-info-entry">
                                    <span class="property-info-label">Area</span>
                                    <span class="property-info-value">{{$output['size']}}<b class="property-info-unit"> Sq Ft</b></span>
                                </span>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-4 p-b-15">
                                <span class="property-info-icon icon-bed">
                                    <img src="{{URL::asset('assets/img/icon/bed.png')}}">
                                </span>
                                <span class="property-info-entry">
                                    <span class="property-info-label">Bedrooms</span>
                                    <span class="property-info-value">{{$output['bedroom']}}</span>
                                </span>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-4 p-b-15">
                                <span class="property-info-icon icon-bed">
                                    <img src="{{URL::asset('assets/img/icon/cars.png')}}">
                                </span>
                                <span class="property-info-entry">
                                    <span class="property-info-label">Car garages</span>
                                    <span class="property-info-value">{{$output['parking']}}</span>
                                </span>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-4 p-b-15">
                                <span class="property-info-icon icon-bath">
                                    <img src="{{URL::asset('assets/img/icon/shawer.png')}}">
                                </span>
                                <span class="property-info-entry">
                                    <span class="property-info-label">Bathrooms</span>
                                    <span class="property-info-value">{{$output['bathroom']}}</span>
                                </span>
                            </div>




                            </div>
                            <!-- .property-meta -->

                            <div class="section">
                                <h4 class="s-property-title">Description</h4>
                                <div class="s-property-content">
                                    <p>{{$output['description']}}</p>
                                </div>
                            </div>
                            <!-- End description area  -->

                            <div class="section additional-details">

                                <h4 class="s-property-title">Additional Details</h4>

                                <ul class="additional-details-list clearfix">
                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Rental Deposit</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">RM{{$output['deposit']}}</span>
                                    </li>

                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Location</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{$output['address']}}</span>
                                    </li>
                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Furnished</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{$output['furnish']}}</span>
                                    </li>

                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Number of floor</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{$output['floor']}}</span>
                                    </li>

                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Nearby Highlights</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{$output['highlights']}}</span>
                                    </li>

                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Distance from UiTM Campus:</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{$output['distance']}} KM</span>
                                    </li> 

                                </ul>
                            </div>  
                            <!-- End additional-details area  -->

                            <div class="section property-features">      

                                <h4 class="s-property-title">Features</h4>                            
                                <ul>
                                    @foreach (explode(',', $output->facilities) as $facility)
                                        <li><a href="">{{ $facility }}</a></li>
                                    @endforeach
                                </ul>

                                <div id="mapid"></div>

                            </div>
                            <!-- End features area  -->
                            
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.js"></script>

        
                            <!-- End video area  -->
                            
                        </div>
                    </div>


                    <div class="col-md-4 p0">
                        <aside class="sidebar sidebar-property blog-asside-right">
                            <div class="dealer-widget">
                                <div class="dealer-content">
                                    <div class="inner-wrapper">

                                        <div class="clear">
                                            <!--<div class="col-xs-4 col-sm-4 dealer-face">
                                                <a href="">
                                                    <img src="assets/img/client-face1.png" class="img-circle">
                                                </a>
                                            </div>-->
                                            <div class="col-xs-8 col-sm-8 ">
                                                <h3 class="dealer-name">
                                                    <a href="">{{$owner['name']}}</a>
                                                    <span></span>        
                                                </h3>
                                                

                                            </div>
                                        </div>

                                        <div class="clear">
                                            <ul class="dealer-contacts">                                       
                                                <li><i class="pe-7s-mail strong"> </i> {{$owner['email']}}</li>
                                                <li><i class="pe-7s-call strong"> </i> {{$owner['phone']}}</li>
                                                <li><i class="pe-7s-call strong"></i> <a href="{{$owner->wslink}}">{{$owner->wslink}}</a></li>

                                                
                                            </ul>
                                          
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                            <div class="">
                           
                            <a href={{"http://localhost:8000/adeditprop/".$output->id}} class="btn btn-primary">Edit Property</a>

                                <a href={{"http://localhost:8000/addeleteprop/".$output->id}} class="btn btn-primary" onclick="return confirmDelete(event)" >Delete Property</a>
                               
                                </div>

                                <script>
                                    function confirmDelete(event) {
                                        if (!confirm('Are you sure you want to delete this property?')) {
                                            event.preventDefault(); // Cancel the deletion process
                                            return false;
                                        }

                                        // If confirmed, show a pop-up or alert with the success message
                                        setTimeout(function() {
                                                    alert('Property deleted successfully.');
                                                }, 2000); // 2 seconds delay

                                        return true; // Proceed with the deletion
                                    }
                                </script>

                                      

                

                           

                        </aside>
                    </div>
                </div>

            </div>
        </div>


          <!-- Footer area-->
    
        
        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>
        <script src="assets/js/easypiechart.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/icheck.min.js"></script>
        <script src="assets/js/price-range.js"></script>
        <script type="text/javascript" src="assets/js/lightslider.min.js"></script>
        <script src="assets/js/main.js"></script>

        <script>
            $(document).ready(function () {

                $('#image-gallery').lightSlider({
                    gallery: true,
                    item: 1,
                    thumbItem: 9,
                    slideMargin: 0,
                    speed: 500,
                    auto: true,
                    loop: true,
                    onSliderLoad: function () {
                        $('#image-gallery').removeClass('cS-hidden');
                    }
                });
            });
        </script>
        <script>
            var campusMarker = L.marker([3.06818,101.499]).bindPopup("UiTM Shah Alam");
         

            var map = L.map('mapid').setView(campusMarker.getLatLng(), 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
                maxZoom: 18,
            }).addTo(map);
            campusMarker.addTo(map);

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
                        distanceInput.value = "{{$output->address}}";
                        distanceInput.style.position = 'absolute';
                        distanceInput.style.top = '10px';
                        distanceInput.style.left = '50%';
                        distanceInput.style.transform = 'translateX(-50%)';
                        distanceInput.style.height = '30px';
                        distanceInput.style.width = '200px';
                        distanceInput.style.marginBottom = '80px';
                        distanceInput.style.fontFamily = 'Arial';
                        distanceInput.style.fontSize = '12px';
                        //distanceInput.style.borderBottom = '20px solid transparent';




                        map.getContainer().appendChild(distanceInput);

            var latitude = {{$output['latitude']}};
            var longitude = {{$output['longitude']}};
            var locationMarker = L.marker([latitude, longitude],{icon: redIcon}).addTo(map);
            var distance = "{{$output['distance']}} km away";
            locationMarker.bindPopup(distance).openPopup();

        </script>

    </body>
</html>