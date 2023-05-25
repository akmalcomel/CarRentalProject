
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>UiTM Property| Properties  page</title>
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
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->
    @include('header')

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">My Properties</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="properties-area recent-property" style="background-color: #FFF;">
            <div class="container"> 
                <div class="row  pr0 padding-top-40 properties-page">
                   
                   

                    <div class="col-md-12 clear "> 
                        <div id="list-type" class="proerty-th-list">
                        @php($count=0)
                            @foreach($output as $x)
                            @if($x['owner']==$username)
                            @php($count++)

                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href={{"vw/".$x['id']}} ><img src="{{ url('public/Image/'.$x->image) }}" ></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href={{"vw/".$x['id']}}>{{$x['title']}}</a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Property Name: </b>{{$x['propname']}} </span>
                                            <span class="proerty-price pull-right">RM{{$x['price']}}</span>
                                            <p style="display: none;"><b>Property Type : </b>{{$x['type']}}<br>
                                            <b>Furnished Type : </b>{{$x['furnish']}}<br>
                                            <b>Distance to campus : </b>{{$x['distance']}} KM <small class="pull-right"><b>Date posted: {{ date('d/m H:i', strtotime($x['created_at'])) }}</b></small> </p>
                                            <div class="property-icon">
                                                <img src="assets/img/icon/bed.png"> {{$x['bedroom']}} Bedroom|
                                                <img src="assets/img/icon/shawer.png"> {{$x['bathroom']}} Bathroom|
                                                <img src="assets/img/icon/cars.png"> {{$x['parking']}} Parking  
                                            </div>
                                        </div>


                                    </div>
                                </div> 
                                @endif
                            @endforeach

                           
                        </div>
                    </div>

                    
                </div>                
            </div>
        </div>

          <!-- Footer area-->
          @include('footer')

       <script src="assets/js/modernizr-2.6.2.min.js"></script>
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
        <script src="assets/js/main.js"></script>
    </body>
</html>