
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>UiTM|Property</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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

        <style>

.btn-lg-sheach {
    bottom: -46px;
    border-radius: 50%;
    width: 60px;
    border: 2px solid #FFF;
    background-image: url("../../assets/img/icon-shearch.png");
    position: relative;
    background-position: 2px -1px;
    height: 60px;
}
            </style>
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
                        <h1 class="page-title">Search Properties</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="properties-area recent-property" style="background-color: #FFF;">
            <div class="container"> 
                <div class="row  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 padding-bottom-40 large-search"> 
                        <div class="search-form wow pulse">
                            <form action="{{ route('listprop') }}" method="GET" class=" form-inline">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="keyword" placeholder="Key word">
                                    </div>
                                    <div class="col-md-4">                                   
                                        <select id="lunchBegins" class="selectpicker" name="propertyType" title="Property Type">
                                            <option>Apartment</option>
                                            <option>Bungalow</option>
                                            <option>Room</option>
                                            <option>Terrace</option>
                                            <option>Semi-D</option>
                                            <option>Studio</option>
                                            <option>ShopLot</option>

                                        </select>
                                    </div>
                                    <div class="col-md-4">                                     
                                        <select id="basic" class="selectpicker show-tick form-control" name="furnishedType" title="Furnished type">
                                           
                                            <option>Fully Furnished </option>
                                            <option>Partially Furnished</option>
                                            <option>Not Furnished</option>  

                                        </select>
                                    </div>

                                    
                                </div>
                                    <div class="col-md-12 " style="margin-top: 20px;">
                                   

                                        <div class="col-md-3" style='z-index: 90;'>       
                                            <label for="property-geo">Number of bedroom :</label>                                 
                                            <select id="basic" class="selectpicker show-tick form-control" name="bedrooms" title="bedroom">
                                               
                                                <option>1 </option>
                                                <option>2</option>
                                                <option>3</option>  
                                                <option>4</option> 
                                                <option>5</option> 

                                            </select>
                                        </div>

                                        <div class="col-sm-3">
                                            <label for="price-range">Price range (RM):</label>
                                            <input type="text" class="span2" name="pricerange" value="" data-slider-min="200" 
                                                   data-slider-max="3000" data-slider-step="100" 
                                                   data-slider-value="[200,2500]" id="price-range" ><br />
                                            <b class="pull-left color">RM200</b> 
                                            <b class="pull-right color">RM3000</b>
                                        </div>
                                        <!-- End of  -->  

                                        <div class="col-sm-3">
                                            <label for="property-geo">Max distance from campus(KM) :</label>
                                            <input type="text" class="span2" name="dist" value="" data-slider-min="0" 
                                                   data-slider-max="20" data-slider-step="1" 
                                                   data-slider-value="[0,15]" id="property-geo" ><br />
                                            <b class="pull-left color">0</b> 
                                            <b class="pull-right color">20km</b>
                                        </div>
                  
                                    </div>

                                    
                                            <div class="center">
                                        <input type="submit" value="Search" class=" btn-lg-sheach">
                                            </div>
                                </div>                     
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12  clear"> 
                        <div class="col-xs-10 page-subheader sorting pl0">
                            <ul class="sort-by-list">
                            <li class="active">
                            <a href="javascript:void(0);" class="order_by_date" data-orderby="created_at" data-order="DESC">
                                Property Date <i class="fa fa-sort-amount-desc"></i>
                            </a>
                            </li>
                            <li class="">
                                <a href="javascript:void(0);" class="order_by_price" data-orderby="price" data-order="ASC">
                                    Property Price <i class="fa fa-sort-numeric-asc"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('listprop') }}" class="btn ">Reset Filters</a>
                            </li>
                            </ul><!--/ .sort-by-list-->

                           
                        </div>

                       
                    </div>

                    <div class="col-md-12 clear "> 
                        <div id="list-type" class="proerty-th-list">
                        @php($count=0)
                            @foreach($output as $x)
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
                                @endforeach

                            

                           
                        </div>
                    </div>

                    <div class="col-md-12 clear"> 
                        <div class="pull-right">
                            <div class="pagination">
                            {{ $output->links() }}
                            </div>
                        </div>                
                    </div>
                </div>                
            </div>
        </div>

          <!-- Footer area-->
       @include('footer')

       <script>
            document.addEventListener('DOMContentLoaded', function() {
                const orderByDateLink = document.querySelector('.order_by_date');
                const orderByPriceLink = document.querySelector('.order_by_price');

                orderByDateLink.addEventListener('click', function() {
                    sortItems('created_at', 'DESC');
                });

                orderByPriceLink.addEventListener('click', function() {
                    sortItems('price', 'ASC');
                });

                function sortItems(orderBy, order) {
                    const currentUrl = new URL(window.location.href);
                    currentUrl.searchParams.set('orderBy', orderBy);
                    currentUrl.searchParams.set('order', order);
                    window.location.href = currentUrl.toString();
                }
            });
        </script>

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

