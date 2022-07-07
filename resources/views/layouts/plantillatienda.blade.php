<!doctype html>
<html lang="en">
<head>
    <!-- Carrito meta tags -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('tituloHome')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- ************************************************************************************************-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png')}}?v=<?php echo time(); ?>" >

    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="{{ asset('plugins/themefisher-font/style.css')}}?v=<?php echo time(); ?>" >
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}?v=<?php echo time(); ?>" >

    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('plugins/animate/animate.css')}}?v=<?php echo time(); ?>" >

    <!-- css About -->
    <link rel="stylesheet" href="{{asset('css/Stl/About.css')}}">

    <!-- **************--------------------->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"
    />


    <!-- Slick Carousel -->

    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css')}}?v=<?php echo time(); ?>" >
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css')}}?v=<?php echo time(); ?>" >

    <!-- Main Stylesheet -->


    <link rel="stylesheet" href="{{ asset('css/style.css')}}?v=<?php echo time(); ?>" >

    <!-- ************************************************************************************************-->

    <!--Icons-->
    <script src="https://kit.fontawesome.com/a3767af1ed.js" crossorigin="anonymous"></script>

    <!-- ********************************************Boostrap****************************************************-->

    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/monetization.js')}}"></script>

    <link href="http://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">

</head>
<body>
<div class="container">
    <!-- Start Top Header Bar -->
    <section class="top-header">
        <div class="container">
            <div class="row f11">
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <div class="contact-number">
                        <i class="tf-ion-ios-telephone"></i>
                        <span>0129- 12323-123123</span>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4 ">
                    <!-- Site Logo -->
                    <div class="logo text-center">
                        <a href="{{ url('/') }}">
                            <!-- replace logo here -->
                            <svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40"
                                   font-family="AustinBold, Austin" font-weight="bold">
                                    <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
                                        <text id="AVIATO">
                                            <tspan x="108.94" y="325">AVIATO</tspan>
                                        </text>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <!-- Cart -->
                    <ul class="top-menu text-right list-inline">


                        <li class="dropdown cart-nav dropdown-slide">

                                <ul class="navbar-nav ms-auto">
                                    @guest
                                        @if (Route::has('Login'))
                                            <li class="l1 nav-item">
                                                <a class="nav-link" href="{{ url('/Login') }}">Login</a>
                                            </li>
                                        @endif

                                        @if (Route::has('Register'))
                                            <li class="l1 nav-item">
                                                <a class="Connect nav-link" href="{{ url('/Register') }}">Register</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            {{ Auth::user()->name }}
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ url('/Logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>

                                                <form id="logout-form" action="{{url('/Logout')}}"class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                        </li>


                        <li class="dropdown cart-nav dropdown-slide">

                            @guest
                                @if (Route::has('Login'))

                                    <p  style="display:none">{{ $x='noyal' }}</p>
                                @endif
                                @if (Route::has('Register'))
                                    <p  style="display:none">{{ $x='noyal' }}</p>
                                @endif

                                @else
                                    <a href="{{url('Cart',Auth::user()->id )}}" class="btn btn-small" style="background: #fff;"><i class="tf-ion-android-cart"></i>Cart</a>
                                @endguest


                            <div class="dropdown-menu cart-dropdown">
                                <!-- Cart Item -->
                                @section('list')
                                @show

                                <ul class="ul-horizontals text-center cart-buttons" >
                                    @guest
                                        @if (Route::has('Login'))

                                            <p  style="display:none">{{ $x='noyal' }}</p>
                                        @endif
                                        @if (Route::has('Register'))
                                            <p  style="display:none">{{ $x='noyal' }}</p>
                                        @endif

                                    @else
                                        <li><a href="{{url('Cart',Auth::user()->id )}}" class="btn btn-small">View Cart</a></li>
                                        <li><a href="checkout.blade.php" class="btn btn-small btn-solid-border">Checkout</a></li>
                                    @endguest
                                </ul>

                            </div>

                        </li><!-- / Cart -->


                        <!-- Search -->
                        <li class="dropdown search dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                                    class="tf-ion-ios-search-strong"></i> Search</a>
                            <ul class="dropdown-menu search-dropdown">
                                <li>
                                    <form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
                                </li>
                            </ul>
                        </li><!-- / Search -->

                        <!-- Languages -->
                        <li class="commonSelect">
                            <select class="form-control">
                                <option>EN</option>
                                <option>DE</option>
                                <option>FR</option>
                                <option>ES</option>
                            </select>
                        </li><!-- / Languages -->

                    </ul><!-- / .nav .navbar-nav .navbar-right -->
                </div>
            </div>
        </div>
    </section><!-- End Top Header Bar -->

    <section class="menu">
        <nav class="navbar navigation">
            <div class="container">
                <div class="navbar-header">
                    <h2 class="menu-title">Main Menu</h2>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div><!-- / .navbar-header -->

                <!-- Navbar Links -->
                <div id="navbar" class="navbar-collapse collapse text-center">
                    <ul class="nav navbar-nav">

                        <!-- Home -->
                        <li class="dropdown ">
                            <a href="{{ url('/') }}">Home</a>
                        </li><!-- / Home -->

                        <!-- About -->
                        <li class="dropdown ">
                            <a href="{{ url('/About') }}">ABOUT</a>
                        </li><!-- /About-->
                        <!-- Elements -->
                        <li class="dropdown dropdown-slide">
                            <a href="{{url('/Shop')}}">Shop</a>
                            <div class="dropdown-menu">
                                <div class="row">

                                    <!-- Basic -->
                                    <div class="col-lg-6 col-md-6 mb-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Hombres</li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="{{url('/Men')}}">Hombres</a></li>
                                        </ul>
                                    </div>

                                    <!-- Layout -->
                                    <div class="col-lg-6 col-md-6 mb-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Mujeres</li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="{{url('/Women')}}">Mujeres</a></li>
                                        </ul>
                                    </div>

                                </div><!-- / .row -->
                            </div><!-- / .dropdown-menu -->
                        </li><!-- / Elements -->
                        <li class="dropdown ">
                            <a href="{{url('/Contact')}}">CONtACT US</a>
                        </li><!-- /About-->

                        @section('menu')
                        @show


                        {{--<!-- Blog -->
                        <li class="dropdown dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
                                role="button" aria-haspopup="true" aria-expanded="false">Blog <span
                                    class="tf-ion-ios-arrow-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-full-width.html">Blog Full Width</a></li>
                                <li><a href="blog-grid.html">Blog 2 Columns</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li><!-- / Blog -->

                        <!-- Shop -->
                        <li class="dropdown dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
                                role="button" aria-haspopup="true" aria-expanded="false">Elements <span
                                    class="tf-ion-ios-arrow-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="alerts.html">Alerts</a></li>
                            </ul>
                        </li><!-- / Blog --> --}}
                    </ul><!-- / .nav .navbar-nav -->

                </div>
                <!--/.navbar-collapse -->
            </div><!-- / .container -->
        </nav>
    </section>


    @yield('contenidoHome')





</div>
{{----}}
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- ************************************************************************************************-->
<script src="plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.1 -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Bootstrap Touchpin -->
<script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
<!-- Instagram Feed Js -->
<script src="plugins/instafeed/instafeed.min.js"></script>
<!-- Video Lightbox Plugin -->
<script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
<!-- Count Down Js -->
<script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

<!-- slick Carousel -->
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/slick/slick-animation.min.js"></script>

<!-- Google Mapl -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script type="text/javascript" src="plugins/google-map/gmap.js"></script>

<!-- Main Js File -->
<script src="js/script.js"></script>

<!-- *************************************Carrito***********************************************************-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->


<footer class="footer section text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="social-media">
                    <li>
                        <a href="https://www.facebook.com/themefisher">
                            <i class="tf-ion-social-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/themefisher">
                            <i class="tf-ion-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/themefisher">
                            <i class="tf-ion-social-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.com/themefisher/">
                            <i class="tf-ion-social-pinterest"></i>
                        </a>
                    </li>
                </ul>
                <ul class="footer-menu text-uppercase">
                    <li>
                        <a href="{{url('/Contact')}}">CONTACT</a>
                    </li>
                    <li>
                        <a href="shop.html">SHOP</a>
                    </li>
                    <li>
                        <a href="pricing.html">Pricing</a>
                    </li>
                    <li>
                        <a href="{{url('/Contact')}}">PRIVACY POLICY</a>
                    </li>
                </ul>
                <p class="copyright-text">Copyright &copy;2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a></p>
            </div>
        </div>
    </div>


</footer>
</body>
</html>













