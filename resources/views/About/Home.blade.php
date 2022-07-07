@extends('layouts.plantillatienda')

@section('contenidoHome')

   <!-- New toolbar-->
   <!-- css About -->

   <div class="banner-tops container-fluids" id="home">
       <!-- banner -->
       <div class="banner_inner">
           <div class="services-breadcrumb">
               <div class="inner_breadcrumb">

                   <ul class="short">
                       <li>
                           <a href="{{url('/home')}}">Home</a>
                           <i>|</i>
                       </li>
                       <li>About Us</li>
                   </ul>
               </div>
           </div>

       </div>
       <!--//banner -->
   </div>
   <!--// header_top -->
   <!-- top Products -->
   <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
       <div class="container-fluid">
           <!---728x90--->

           <div class="inner-sec-shop px-lg-4 px-3">
               <div class="about-content py-lg-5 py-3">
                   <div class="rows">

                       <div class="col-lg-6 p-0">
                           <img src="images/banner1.jpg" alt="Goggles" class="img-fluid">
                       </div>
                       <div class="col-lg-6 about-info">
                           <h3 class="tittle-w3layouts text-left mb-lg-5 mb-3">About Us</h3>
                           <p class="my-xl-4 my-lg-3 my-md-4 my-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                               dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                               book.
                           </p>

                           <a href="{{url('/Shop')}}" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

                       </div>
                   </div>
               </div>
               <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Partners</h3>
               <div class="partners-info">
                   <div class="rows mt-lg-5 mt-3">
                       <div class="col-md-3 team-main-gd">
                           <div class="team-grid text-center">
                               <div class="team-img">
                                   <img class="img-fluid rounded" src="images/team1.jpg" alt="">
                               </div>
                               <div class="team-info">
                                   <h4>Partner 1</h4>
                                   <span>Description </span>
                                   <ul class="d-flex justify-content-center py-3 social-icons">
                                       <li>
                                           <a href="#">
                                               <i class="fab fa-facebook-f"></i>
                                           </a>
                                       </li>
                                       <li class="mx-3">
                                           <a href="#">
                                               <i class="fab fa-twitter"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <i class="fab fa-google-plus-g"></i>
                                           </a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-3 team-main-gd">
                           <div class="team-grid text-center">
                               <div class="team-img">
                                   <img class="img-fluid rounded" src="images/team2.jpg" alt="">
                               </div>
                               <div class="team-info">
                                   <h4>Partner 2</h4>
                                   <span>Description </span>
                                   <ul class="d-flex justify-content-center py-3 social-icons">
                                       <li>
                                           <a href="#">
                                               <i class="fab fa-facebook-f"></i>
                                           </a>
                                       </li>
                                       <li class="mx-3">
                                           <a href="#">
                                               <i class="fab fa-twitter"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <i class="fab fa-google-plus-g"></i>
                                           </a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-3 team-main-gd">
                           <div class="team-grid text-center">
                               <div class="team-img">
                                   <img class="img-fluid rounded" src="images/team3.jpg" alt="">
                               </div>
                               <div class="team-info">
                                   <h4>Partner 3</h4>
                                   <span>Description </span>
                                   <ul class="d-flex justify-content-center py-3 social-icons">
                                       <li>
                                           <a href="#">
                                               <i class="fab fa-facebook-f"></i>
                                           </a>
                                       </li>
                                       <li class="mx-3">
                                           <a href="#">
                                               <i class="fab fa-twitter"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <i class="fab fa-google-plus-g"></i>
                                           </a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-3 team-main-gd">
                           <div class="team-grid text-center">
                               <div class="team-img">
                                   <img class="img-fluid rounded" src="images/team4.jpg" alt="">
                               </div>
                               <div class="team-info">
                                   <h4>Partner 4</h4>
                                   <span>Description </span>
                                   <ul class="d-flex justify-content-center py-3 social-icons">
                                       <li>
                                           <a href="#">
                                               <i class="fab fa-facebook-f"></i>
                                           </a>
                                       </li>
                                       <li class="mx-3">
                                           <a href="#">
                                               <i class="fab fa-twitter"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <i class="fab fa-google-plus-g"></i>
                                           </a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="partners-info">
                   <div class="rows mt-lg-5 mt-3">
                       <div class="col-md-3 team-main-gd">
                           <div class="team-grid text-center">
                               <div class="team-img">
                                   <img class="img-fluid rounded" src="images/team1.jpg" alt="">
                               </div>
                               <div class="team-info">
                                   <h4>Partner 1</h4>
                                   <span>Description </span>
                                   <ul class="d-flex justify-content-center py-3 social-icons">
                                       <li>
                                           <a href="#">
                                               <i class="fab fa-facebook-f"></i>
                                           </a>
                                       </li>
                                       <li class="mx-3">
                                           <a href="#">
                                               <i class="fab fa-twitter"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <i class="fab fa-google-plus-g"></i>
                                           </a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-3 team-main-gd">
                           <div class="team-grid text-center">
                               <div class="team-img">
                                   <img class="img-fluid rounded" src="images/team2.jpg" alt="">
                               </div>
                               <div class="team-info">
                                   <h4>Partner 2</h4>
                                   <span>Description </span>
                                   <ul class="d-flex justify-content-center py-3 social-icons">
                                       <li>
                                           <a href="#">
                                               <i class="fab fa-facebook-f"></i>
                                           </a>
                                       </li>
                                       <li class="mx-3">
                                           <a href="#">
                                               <i class="fab fa-twitter"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <i class="fab fa-google-plus-g"></i>
                                           </a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-3 team-main-gd">
                           <div class="team-grid text-center">
                               <div class="team-img">
                                   <img class="img-fluid rounded" src="images/team3.jpg" alt="">
                               </div>
                               <div class="team-info">
                                   <h4>Partner 3</h4>
                                   <span>Description </span>
                                   <ul class="d-flex justify-content-center py-3 social-icons">
                                       <li>
                                           <a href="#">
                                               <i class="fab fa-facebook-f"></i>
                                           </a>
                                       </li>
                                       <li class="mx-3">
                                           <a href="#">
                                               <i class="fab fa-twitter"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <i class="fab fa-google-plus-g"></i>
                                           </a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               {{----}}
               {{----}}
               <!-- /grids -->
               <div class="bottom-sub-grid-content py-lg-5 py-3">
                   <div class="rows">
                       <div class="col-lg-4 bottom-sub-grid text-center">
                           <div class="bt-icon">

                               <span class="far fa-hand-paper"></span>
                           </div>

                           <h4 class="sub-tittle-w3layouts my-lg-4 my-3">Satisfaction Guaranteed</h4>
                           <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                           <p>
                               <a href="{{url('/Shop')}}" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
                           </p>
                       </div>
                       <!-- /.col-lg-4 -->
                       <div class="col-lg-4 bottom-sub-grid text-center">
                           <div class="bt-icon">
                               <span class="fas fa-rocket"></span>
                           </div>

                           <h4 class="sub-tittle-w3layouts my-lg-4 my-3">Fast Shipping</h4>
                           <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                           <p>
                               <a href="{{url('/Shop')}}" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
                           </p>
                       </div>
                       <!-- /.col-lg-4 -->
                       <div class="col-lg-4 bottom-sub-grid text-center">
                           <div class="bt-icon">
                               <span class="far fa-sun"></span>
                           </div>

                           <h4 class="sub-tittle-w3layouts my-lg-4 my-3">UV Protection</h4>
                           <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                           <p>
                               <a href="{{url('/Shop')}}" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
                           </p>
                       </div>
                       <!-- /.col-lg-4 -->
                   </div>
               </div>
               <!-- //grids -->


               <!--/meddle-->
               <div class="rows">
                   <div class="col-md-12 middle-slider my-4">
                       <div class="middle-text-info ">

                           <h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Summer Flash sale</h3>
                           <div class="simply-countdown-custom" id="simply-countdown-custom"></div>

                       </div>
                   </div>
               </div>
               <!--//meddle-->
                {{--
               <!-- /testimonials -->
               <div class="testimonials py-lg-4 py-3 mt-4">
                   <div class="testimonials-inner py-lg-4 py-3">
                       <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Tesimonials</h3>
                       <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                           <div class="carousel-inner" role="listbox">
                               <div class="carousel-item active">
                                   <div class="testimonials_grid text-center">
                                       <h3>Anamaria
                                           <span>Customer</span>
                                       </h3>
                                       <label>United States</label>
                                       <p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
                                           Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                                   </div>
                               </div>
                               <div class="carousel-item">
                                   <div class="testimonials_grid text-center">
                                       <h3>Camisa
                                           <span>Customer</span>
                                       </h3>
                                       <label>United States</label>
                                       <p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
                                           Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                                   </div>
                               </div>
                               <div class="carousel-item">
                                   <div class="testimonials_grid text-center">
                                       <h3>Gretchen
                                           <span>Customer</span>
                                       </h3>
                                       <label>United States</label>
                                       <p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
                                           Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                                   </div>
                               </div>
                               <a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
                                   <span class="fas fa-long-arrow-alt-left"></span>
                                   <span class="sr-only">Previous</span>
                               </a>
                               <a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
                                   <span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
                                   <span class="sr-only">Next</span>

                               </a>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- //testimonials -->

               --}}
               <div class="row galsses-grids pt-lg-5 pt-3">
                   <div class="col-lg-6 galsses-grid-left">
                       <figure class="effect-lexi">
                           <img src="images/banner4.jpg" alt="" class="img-fluid">
                           <figcaption>
                               <h3>Editor's
                                   <span>Pick</span>
                               </h3>
                               <p> Express your style now.</p>
                           </figcaption>
                       </figure>
                   </div>
                   <div class="col-lg-6 galsses-grid-left">
                       <figure class="effect-lexi">
                           <img src="images/banner1.jpg" alt="" class="img-fluid">
                           <figcaption>
                               <h3>Editor's
                                   <span>Pick</span>
                               </h3>
                               <p>Express your style now.</p>
                           </figcaption>
                       </figure>
                   </div>
               </div>
           </div>
       </div>
       <!---728x90--->
   </section>
   <!--jQuery-->
   <script src="js/jquery-2.2.3.min.js"></script>
   <!-- newsletter modal -->
   <!--search jQuery-->
   <script src="js/modernizr-2.6.2.min.js"></script>
   <script src="js/classie-search.js"></script>
   <script src="js/demo1-search.js"></script>
   <!--//search jQuery-->
   <!-- cart-js -->
   <script src="js/minicart.js"></script>
   <script>
       googles.render();

       googles.cart.on('googles_checkout', function (evt) {
           var items, len, i;

           if (this.subtotal() > 0) {
               items = this.items();

               for (i = 0, len = items.length; i < len; i++) {}
           }
       });
   </script>
   <!-- //cart-js -->
   <script>
       $(document).ready(function () {
           $(".button-log a").click(function () {
               $(".overlay-login").fadeToggle(200);
               $(this).toggleClass('btn-open').toggleClass('btn-close');
           });
       });
       $('.overlay-close1').on('click', function () {
           $(".overlay-login").fadeToggle(200);
           $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
           open = false;
       });
   </script>
   <!-- carousel -->
   <!-- dropdown nav -->
   <script>
       $(document).ready(function () {
           $(".dropdown").hover(
               function () {
                   $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                   $(this).toggleClass('open');
               },
               function () {
                   $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                   $(this).toggleClass('open');
               }
           );
       });
   </script>
   <!-- //dropdown nav -->
   <!-- Count-down -->
   <script src="js/simplyCountdown.js"></script>
   <link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
   <script>
       var d = new Date();
       simplyCountdown('simply-countdown-custom', {
           year: d.getFullYear(),
           month: d.getMonth() + 2,
           day: 25
       });
   </script>
   <!--// Count-down -->
   <script src="js/move-top.js"></script>
   <script src="js/easing.js"></script>
   <script>
       jQuery(document).ready(function($) {
           $(".scroll").click(function(event) {
               event.preventDefault();
               $('html,body').animate({
                   scrollTop: $(this.hash).offset().top
               }, 900);
           });
       });
   </script>
   <script>
       $(document).ready(function() {
           /*
                                   var defaults = {
                                         containerID: 'toTop', // fading element id
                                       containerHoverID: 'toTopHover', // fading element hover id
                                       scrollSpeed: 1200,
                                       easingType: 'linear'
                                    };
                                   */

           $().UItoTop({
               easingType: 'easeOutQuart'
           });

       });
   </script>
   <!--// end-smoth-scrolling -->


   <!-- js file -->


   <div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>

@endsection
