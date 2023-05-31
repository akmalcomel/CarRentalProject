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
                    <a class="navbar-brand" href="/"><img src="assets/LogoUiTM.png" alt=""></a>
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
 
                    <div class="item"><img src="assets/img/slide1/uitm4.jpeg" alt="The Last of us"></div>
                   

                </div>
            </div>
            <div class="container slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2><strong class="special" style="color: #9C3AE4 ;text-shadow: 1px 1px #9C3AE4; ; opacity: 1; font-weight:900">Welcome to UiTM Off-Campus Placement Portal</strong></h2>
                        <p><br/></p>
                        <p><a  id="custom-login-button" href="/custom-login2" class="btn btn-primary btn-lg">Search/Rent House</a><small>&emsp;&emsp;</small>
                        <a style="background-color: #007bff; color: #fff; border-color:#007bff ;" class="btn btn-primary btn-lg" href="/login" role="button">Submit Property</a></p>
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
                        <p>Welcome to UiTM Off-Campus Placement System, a platform designed to simplify the process of finding a suitable house for UiTM students. We understand that searching for a place to live can be a daunting task, especially for students who are new to the area. Therefore, we have created a user-friendly website that enables house owners to post their advertisements, and students to easily browse through the listings and contact the owners directly if they are interested. Our platform aims to provide an efficient and reliable service that will assist students in finding their ideal accommodation while also facilitating the process for property owners. We are dedicated to making the housing search experience as smooth and stress-free as possible for UiTM students, and we look forward to helping them find their perfect home away from home. </p>
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
                                        <h2>UiTM portal </h2>
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
                                            <h3>Any property</h3>
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
                        <h2>Student Development Team </h2> 
                    </div>
                </div>

                <div class="row">
                    <div class="row testimonial">
                        <div class="col-md-12">
                            <div id="testimonial-slider">
                                <div class="item">
                                    <div class="client-text">                                
                                        <p>
As the web project leader, our dedicated team introduces an exclusive house rental app for UiTM Shah Alam students. Experience hassle-free housing search near campus, revolutionizing your university life. Discover convenience, reliability, and a vibrant community in just a few taps.</p>
                                        <h4><strong>Akmal Arif, </strong><i>(UiTM V.President) Web Project Leader</i></h4>
                                    </div>
                                    <div class="client-face wow fadeInRight" > 
                                        <img src="assets/img/IMG_5503.jpg" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">                                
                                        <p>Hey there! I'm the frontend designer, a fellow UiTM Shah Alam student. I get the struggle of finding suitable housing near campus. That's why I'm here to create a seamless user experience, revolutionizing the way you discover your perfect home. Hope you'll like it</p>
                                        <h4><strong>Aisyah Nabilah, </strong><i>Lead UI/UX Designer</i></h4>
                                    </div>
                                    <div class="client-face">
                                        <img src="assets/img/IMG_0014.jpg" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">                                
                                   <p> I'm the lead software tester and a UiTM Shah Alam student. Together, let's simplify your housing search near campus with a seamless user experience. I'm passionate about ensuring a smooth and reliable housing search experience for UiTM students.</p>
                                        <h4><strong>Afif Sulaim, </strong><i>Head Software Tester</i></h4>
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