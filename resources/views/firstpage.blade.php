<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>UiTM | Home page</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico  the root directory -->
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

        <style>
            .special {
                margin-top: 10px;
            }

        </style>
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->



        <!--End top header -->

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
                    <a class="navbar-brand" href="/"><img src="assets/carlogo.jpg" width="200" height="150" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">

                    <ul class="main-nav nav navbar-nav navbar-right">

                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/">Home</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="#about1">About us</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="#ourteam">Our Team</a></li>



                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->

        <div class="slider-area">
            <div class="slider">
                <div class="bg-slider" class="owl-carousel owl-theme">

                    <div class="item"><img src="assets/img/slide1/wallpaperkereta.jpeg" alt="The Last of us"></div>


                </div>
            </div>
            <div class="container slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2><strong class="special" style="color: #9C3AE4 ;text-shadow: 1px 1px #9C3AE4; ; opacity: 1; font-weight:900">Welcome to TransMal Car Rental</strong></h2>
                        <p><br/></p>
                        <p><a  id="custom-login-button" href="/custom-login2" class="btn btn-primary btn-lg">Search/Rent Car</a><small>&emsp;&emsp;</small>
                        <a style="background-color: #007bff; color: #fff; border-color:#007bff ;" class="btn btn-primary btn-lg" href="/login" role="button">Car Owner</a></p>
                    </div>
                </div>
            </div>
        </div>

        <script>
                document.getElementById("custom-login-button").addEventListener("click", function(event) {
                    event.preventDefault(); // prevent the default link behavior
                    setTimeout(function() {
                    window.location.href = "{{ route('custom-login2') }}"; // redirect after 3 seconds
                    }, 100); // 3 second delay
                });
                </script>


        <!-- property area -->
        <div class="content-area recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;" id="about1">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>About Us</h2>
                        <p>
                            Welcome to TransMal Car Rental, your go-to destination for convenient and reliable car rental services. With a passion for excellent customer service, Transmal Car Rental is committed to providing seamless and stress-free experiences for all your travel needs. Our extensive fleet of well-maintained vehicles offers a wide selection to suit any journey, whether you're exploring the city or going off the beaten path. Backed by years of industry expertise, our friendly and knowledgeable team is here to assist you every step of the way. At DriveEasy Car Rental, we prioritize your safety and satisfaction, ensuring that each vehicle is thoroughly inspected and equipped with the latest amenities. With competitive and transparent pricing, booking your ideal car is a breeze. Discover the freedom of the open road and let DriveEasy Car Rental be your partner on the journey ahead. </p>
                    </div>
                </div>

                <div class="row">
                    <div class="proerty-th">
                    </div>
                </div>
            </div>
        </div>

        <!--Welcome area -->
        <div class="Welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 Welcome-entry  col-sm-12">
                        <div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12">
                            <div class="welcome_text wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="100">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                                        <!-- /.feature title -->
                                        <h2>Trans Mal</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div  class="welcome_services wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="100">
                                <div class="row">
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-home pe-4x"></i>
                                            </div>
                                            <h3>AnyWhere</h3>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-users pe-4x"></i>
                                            </div>
                                            <h3>Quick Deal</h3>
                                        </div>
                                    </div>


                                    <div class="col-xs-12 text-center">
                                        <i class="welcome-circle"></i>
                                    </div>

                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-notebook pe-4x"></i>
                                            </div>
                                            <h3>Easy to use</h3>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-help2 pe-4x"></i>
                                            </div>
                                            <h3>Any help </h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--TESTIMONIALS -->
        <div class="testimonial-area recent-property" style="background-color: #FCFCFC; padding-bottom: 15px;" id="ourteam">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Top Rated Car Owner </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="row testimonial">
                        <div class="col-md-12">
                            <div id="testimonial-slider">
                                <div class="item">
                                    <div class="client-text">
                                        <p>
                                            Using this website has been a game-changer for my car rental business! The seamless booking process and wide range of vehicles have attracted more customers than ever. I can't thank the team enough for their excellent service and support."</p>
                                        <h4><strong>Akmal Arif, </strong><i>Car Enthusiast</i></h4>
                                    </div>
                                    <div class="client-face wow fadeInRight" >
                                        <img src="assets/img/IMG_5503.jpg" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">
                                        <p>As an avid traveler, I rely on this website for all my rental needs. Their user-friendly platform and diverse car selection make planning my trips a breeze. I'm thrilled with the quality of service and will keep coming back for my future adventures."</p>
                                        <h4><strong>Aisyah Nabilah, </strong><i>Most Clean Car Award</i></h4>
                                    </div>
                                    <div class="client-face">
                                        <img src="assets/img/IMG_0014.jpg" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">
                                   <p>"I'm constantly on the move for work, and this website has become my go-to for reliable car rentals. The efficient booking system and professional customer service have exceeded my expectations. I highly recommend this site to all fellow business travelers."</p>
                                        <h4><strong>Afif Sulaim, </strong><i>Owned 6 cars for rent</i></h4>
                                    </div>
                                    <div class="client-face">
                                        <img src="assets/img/client-face1.png" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Count area -->


        <!-- boy-sale area -->
        <div class="boy-sale-area">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12">
                        <div class="asks-first">
                            <div class="asks-first-circle">
                                <span class="fa fa-search"></span>
                            </div>
                            <div class="asks-first-info">
                                <h2>ARE YOU LOOKING FOR A Property nearby campus?</h2>

                            </div>
                            <div class="asks-first-arrow">
                                <a href="/custom-login2"><span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0">
                        <div  class="asks-first">
                            <div class="asks-first-circle">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="asks-first-info">
                                <h2>DO YOU WANT TO RENT YOUR Property?</h2>

                            </div>
                            <div class="asks-first-arrow">
                                <a href="/login"><span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <p  class="asks-call">QUESTIONS? CALL US  : <span class="strong">+603-5544 2000</span></p>
                    </div>
                </div>
            </div>
        </div>


          <!-- Footer area-->
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>About us </h4>
                                <div class="footer-title-line"></div>

                                <img src="assets/LogoUiTM.png" alt="" class="wow pulse" data-wow-delay="1s">
                                <p>The MARA Technological University is a public university based primarily in Shah Alam, Selangor. It was established to help rural Malays in 1956 as the RIDA Training Centre.</p>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Quick links </h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="/">Home</a>  </li>
                                    <li><a href="https://www.uitm.edu.my/index.php/en/">UiTM Official Website</a>  </li>
                                    <li><a href="/login">Owner Log In </a></li>
                                    <li><a href="custom-login2">Student Log In</a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Contact Us </h4>
                                <div class="footer-title-line"></div>

                                <ul class="footer-adress">
                                    <li><i class="pe-7s-map-marker strong"> </i>
Universiti Teknologi MARA (UiTM)
40450 Shah Alam, Selangor Darul Ehsan
Malaysia</li>
                                    <li><i class="pe-7s-mail strong"> </i> HRTeam@UiTM.edu.my</li>
                                    <li><i class="pe-7s-call strong"> </i>+603-5544 2000 </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <div class="pull-left">
                            <span> (C) <a href="">UiTM Off-Campus Placement Portal</a> , All rights reserved 2022  </span>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <script>
            const links = document.querySelectorAll('nav a');

            links.forEach(link => {
                link.addEventListener('click', event => {
                event.preventDefault();

                const targetId = link.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                const targetTop = targetSection.offsetTop;

                window.scrollTo({
                    top: targetTop,
                    behavior: 'smooth'
                });
                });
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
