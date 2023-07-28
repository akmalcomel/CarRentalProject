
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
                    <a class="navbar-brand" href="/stdhome"><img src="assets/carlogo.jpg" width="200" height="150" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('register.html')" data-wow-delay="0.4s">Login</button>
                        <button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('submit-property.html')" data-wow-delay="0.5s">Submit</button>
                    </div>-->
                    <ul class="main-nav nav navbar-nav navbar-right">

                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/stdhome">Home</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="stdlistprop">Properties</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/myfav">My Favourite</a></li>
                        <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="index.html"  data-toggle="dropdown" data-hover="dropdown" data-delay="200">Dashboard <b class="caret"></b></a>
                            @auth('user2')
                            <ul class="dropdown-menu navbar-nav">
                                <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" style="margin-left: 40px;"class="dropdown-item">Log out</button>
                                </form>
                                </li>
                                @else

                                @if (Route::has('login'))
                                <li>
                                    <a href="/" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                </li>
                                @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                </li>
                                @endif
                                @endif

                            </ul>
                            @endauth
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->

