<!DOCTYPE html>
<html lang="es">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">

    <title>Tienda Virtual</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Constra HTML Template v1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"/>

    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="plugins/themefisher-font/style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">

    <!-- Animate css -->
    <link rel="stylesheet" href="plugins/animate/animate.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Main Pyscript -->
    <link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />
    <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
    <py-env>
        - numpy
        - matplotlib
    </py-env>

</head>

<body id="body">

<!-- Start Top Header Bar -->
<section class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-4">
                <div class="contact-number">
                    <i class="tf-ion-ios-telephone"></i>
                    <span>+51 999457808</span>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <!-- Site Logo -->
                <div class="logo text-center">
                    <a href="{{route('homee')}}">
                        <!-- replace logo here -->
                        <svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40"
                               font-family="AustinBold, Austin" font-weight="bold">
                                <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
                                    <text id="AVIATO">
                                        <tspan x="108.94" y="325">BONITA</tspan>
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
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                                class="tf-ion-android-cart"></i>Carrito</a>
                        <div class="dropdown-menu cart-dropdown">
                            <!-- Cart Item -->
                            <div class="media">
                                <a class="pull-left" href="#!">
                                    <img class="media-object" src="images/shop/cart/cart-1.jpg" alt="image"/>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#!">Bolso de mujer</a></h4>
                                    <div class="cart-price">
                                        <span>1 x</span>
                                        <span>1250.00</span>
                                    </div>
                                    <h5><strong>$1200</strong></h5>
                                </div>
                                <a href="#!" class="remove"><i class="tf-ion-close"></i></a>
                            </div><!-- / Cart Item -->
                            <!-- Cart Item -->
                            <div class="media">
                                <a class="pull-left" href="#!">
                                    <img class="media-object" src="images/shop/cart/cart-2.jpg" alt="image"/>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#!">Bolso de mujer</a></h4>
                                    <div class="cart-price">
                                        <span>1 x</span>
                                        <span>1250.00</span>
                                    </div>
                                    <h5><strong>$1200</strong></h5>
                                </div>
                                <a href="#!" class="remove"><i class="tf-ion-close"></i></a>
                            </div><!-- / Cart Item -->

                            <div class="cart-summary">
                                <span>Total</span>
                                <span class="total-price">$1799.00</span>
                            </div>
                            <ul class="text-center cart-buttons">
                                <li><a href="{{route('carro')}}" class="btn btn-small">Ver Carrito</a></li>
                                <li><a href="checkout.html" class="btn btn-small btn-solid-border">Verificar</a></li>
                            </ul>
                        </div>

                    </li><!-- / Cart -->

                    <!-- Search -->
                    <li class="dropdown search dropdown-slide">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                                class="tf-ion-ios-search-strong"></i>Buscar</a>
                        <ul class="dropdown-menu search-dropdown">
                            <li>
                                <form action="post"><input type="search" class="form-control" placeholder="Search...">
                                </form>
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


<!-- Main Menu Section -->
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
                        <a href="">Home</a>
                    </li><!-- / Home -->


                    <!-- Elements -->
                    <li class="dropdown dropdown-slide">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-delay="350"
                           role="button" aria-haspopup="true" aria-expanded="false">Tienda<span
                                class="tf-ion-ios-arrow-down"></span></a>
                        <div class="dropdown-menu">
                            <div class="row">

                                <!-- Basic -->
                                <div class="col-lg-6 col-md-6 mb-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Paginas</li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Comprar</a></li>
                                        <li><a href="checkout.html">Verificar</a></li>
                                        <li><a href="">Carro</a></li>
                                        <li><a href="pricing.html">Fijacion de precios</a></li>
                                        <li><a href="confirmation.html">Confirmacion</a></li>

                                    </ul
                                </div>

                                <!-- Layout -->
                                <div class="col-lg-6 col-md-6 mb-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Diseño</li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="product-single.html">Detalles de producto</a></li>
                                        <li><a href="{{route('categoria">Comprar con barra lateral</a></li>

                                    </ul>
                                </div>

                            </div><!-- / .row -->
                        </div><!-- / .dropdown-menu -->
                    </li><!-- / Elements -->


                    <!-- Pages -->
                    <li class="dropdown full-width dropdown-slide">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-delay="350"
                           role="button" aria-haspopup="true" aria-expanded="false">Pages <span
                                class="tf-ion-ios-arrow-down"></span></a>
                        <div class="dropdown-menu">
                            <div class="row">

                                <!-- Introduction -->
                                <div class="col-sm-3 col-xs-12">
                                    <ul>
                                        <li class="dropdown-header">Introduction</li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="{{route('contact')}}">Contactenos</a></li>
                                        <li><a href="{{route('about')}}">Nosotros</a></li>
                                        <li><a href="404">404 Page</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                    </ul>
                                </div>

                                <!-- Contact -->
                                <div class="col-sm-3 col-xs-12">
                                    <ul>
                                        <li class="dropdown-header">Dashboard</li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="dashboard.html">User Interface</a></li>
                                        <li><a href="order.html">Orders</a></li>
                                        <li><a href="address.html">Address</a></li>
                                        <li><a href="profile-details.html">Profile Details</a></li>
                                    </ul>
                                </div>

                                <!-- Utility -->
                                <div class="col-sm-3 col-xs-12">
                                    <ul>
                                        <li class="dropdown-header">Utility</li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="login.html">Login Page</a></li>
                                        <li><a href="signin.html">Signin Page</a></li>
                                        <li><a href="forget-password.html">Forget Password</a></li>
                                    </ul>
                                </div>

                                <!-- Mega Menu -->
                                <div class="col-sm-3 col-xs-12">
                                    <a href="shop">
                                        <img class="img-responsive" src="images/shop/header-img.jpg" alt="menu image"/>
                                    </a>
                                </div>
                            </div><!-- / .row -->
                        </div><!-- / .dropdown-menu -->
                    </li><!-- / Pages -->


                    <!-- Shop -->
                    <li class="dropdown dropdown-slide">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-delay="350"
                           role="button" aria-haspopup="true" aria-expanded="false">Elements <span
                                class="tf-ion-ios-arrow-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="alerts.html">Alerts</a></li>
                        </ul>
                    </li><!-- / Blog -->
                </ul><!-- / .nav .navbar-nav -->
            </div>
            <!--/.navbar-collapse -->
        </div><!-- / .container -->
    </nav>
</section>
<!--Cabezera y Menu finish-->


@yield('content') {{--ira el contenido de cada vista a la que direccione--}}


<!--Inicio de pie de pagina o footer-->
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
                        <a href="{{route('contact')}}">CONTACT</a>
                    </li>
                    <li>
                        <a href="shop.html">SHOP</a>
                    </li>
                    <li>
                        <a href="pricing.html">Pricing</a>
                    </li>
                    <li>
                        <a href="contact.html">PRIVACY POLICY</a>
                    </li>
                </ul>
                <p class="copyright-text">Copyright &copy;2022, Diseñado y desarrollado por <a
                        href="{{route('about')}}">Grupo 5</a></p>
            </div>
        </div>
    </div>
</footer>

