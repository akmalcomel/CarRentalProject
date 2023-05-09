
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GARO ESTATE | Property  page</title>
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
                    <a class="navbar-brand" href="http://localhost:8000/home"><img src="{{ url('assets/LogoUiTM.png')}}" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('register.html')" data-wow-delay="0.4s">Login</button>
                        <button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('submit-property.html')" data-wow-delay="0.5s">Submit</button>
                    </div>-->
                    <ul class="main-nav nav navbar-nav navbar-right">

                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="http://localhost:8000/home">Home</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="listprop">Properties</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/viewprop">Property</a></li>
                        

                        <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="contact.html">Contact</a></li>
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
                                <li><button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('submitp')" data-wow-delay="0.5s">Submit</button></li>
                    
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
                                        <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                            <i class="fa fa-star-o"></i>
                                        </a>
                                        <a class="printer-icon " href="javascript:window.print()">
                                            <i class="fa fa-print"></i> 
                                        </a>
                                    </div>
                                                                    <!-- Container for the image gallery -->
                                <div class="containers">

                                <!-- Full-width images with number text -->
                                <div class="mySlides">
                                <div class="numbertext">1 / 6</div>
                                    <img src="{{ url('public/Image/'.$output->image) }}" style="width:100%">
                                </div>

                                <div class="mySlides">
                                <div class="numbertext">2 / 6</div>
                                    <img src="{{ url('public/Image/'.$output->image2) }}" style="width:100%">
                                </div>

                                <div class="mySlides">
                                <div class="numbertext">3 / 6</div>
                                    <img src="{{ url('public/Image/'.$output->image3) }}" style="width:100%">
                                </div>

                                <div class="mySlides">
                                <div class="numbertext">4 / 6</div>
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

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-tag">                                        
                                        <img src="{{URL::asset('assets/img/icon/sale-orange.png')}}">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Type</span>
                                        <span class="property-info-value">{{$output['type']}}</span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info icon-area">
                                        <img src="{{URL::asset('assets/img/icon/room-orange.png')}}">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Area</span>
                                        <span class="property-info-value">{{$output['size']}}<b class="property-info-unit">Sq Ft</b></span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bed">
                                        <img src="{{URL::asset('assets/img/icon/bed-orange.png')}}">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Bedrooms</span>
                                        <span class="property-info-value">{{$output['bedroom']}}</span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bed">
                                        <img src="{{URL::asset('assets/img/icon/cars-orange.png')}}">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Car garages</span>
                                        <span class="property-info-value">{{$output['parking']}}</span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bath">
                                        <img src="{{URL::asset('assets/img/icon/os-orange.png')}}">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Bathrooms</span>
                                        <span class="property-info-value">{{$output['bathroom']}}</span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-garage">
                                        <img src="{{URL::asset('assets/img/icon/room-orange.png')}}">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Garages</span>
                                        <span class="property-info-value">2</span>
                                    </span>
                                </div>
                                
                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-garage">
                                        <img src="{{URL::asset('assets/img/icon/shawer-orange.png')}}">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Garages</span>
                                        <span class="property-info-value">2</span>
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
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Seksyen 19</span>
                                    </li>
                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Furnished</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{$output['furnish']}}</span>
                                    </li>

                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Number of floor</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">2</span>
                                    </li>

                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">View</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Intracoastal View,Direct ew</span>
                                    </li>

                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Waterfront Description:</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Intracoastal Front,Ocean Access</span>
                                    </li> 

                                </ul>
                            </div>  
                            <!-- End additional-details area  -->

                            <div class="section property-features">      

                                <h4 class="s-property-title">Features</h4>                            
                                <ul>
                                    <li><a href="properties.html">Swimming Pool</a></li>   
                                    <li><a href="properties.html">3 Stories</a></li>
                                    <li><a href="properties.html">Central Cooling</a></li>
                                    <li><a href="properties.html">Jog Path 2</a></li>
                                    <li><a href="properties.html">2 Lawn</a></li>
                                    <li><a href="properties.html">Bike Path</a></li>
                                </ul>

                            </div>
                            <!-- End features area  -->
                            
                            

        
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
                                                    <a href="">MR {{$output['owner']}}</a>
                                                    <span></span>        
                                                </h3>
                                                

                                            </div>
                                        </div>

                                        <div class="clear">
                                            <ul class="dealer-contacts">                                       
                                                <li><i class="pe-7s-mail strong"> </i> {{$output['owner']}}@gmail.com</li>
                                                <li><i class="pe-7s-call strong"> </i> +1 908 967 5906</li>
                                            </ul>
                                            <p>Duis mollis  blandit tempus porttitor curabiturDuis mollis  blandit tempus porttitor curabitur , est non…</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Similar Properties</h3>
                                </div>
                                <div class="panel-body recent-property-widget">
                                        <ul>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Super nice villa </a></h6>
                                                <span class="property-price">3000000$</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-3 col-sm-3  col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="assets/img/demo/small-property-1.jpg"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Super nice villa </a></h6>
                                                <span class="property-price">3000000$</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="assets/img/demo/small-property-3.jpg"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Super nice villa </a></h6>
                                                <span class="property-price">3000000$</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Super nice villa </a></h6>
                                                <span class="property-price">3000000$</span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>                          

                            <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Ads her  </h3>
                                </div>
                                <div class="panel-body recent-property-widget">
                                    <img src="assets/img/ads.jpg">
                                </div>
                            </div>

                           

                        </aside>
                    </div>
                </div>

            </div>
        </div>


          <!-- Footer area-->
          @include('footer')
       
        
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

    </body>
</html>