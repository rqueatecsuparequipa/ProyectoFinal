@extends('layouts/plantillatienda')

@section('tituloHome', 'Crud con Laravel 8')

@section('contenidoHome')
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Contactenos</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="page-wrapper">
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    @if(session()->has('flash'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p>Mensaje recibido</p>
                            {{session()->get('flash')}}
                        </div>
                    @endif
                    <!-- Contact Form -->
                    <div class="contact-form col-md-6 " >
                        <form id="contact-form" method="post" action="{{route('messages')}}" role="form">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" placeholder="Su nombre" class="form-control" name="name" id="name" required>
                            </div>

                            <div class="form-group">
                                <input type="email" placeholder="Tu correo electronico" class="form-control" name="email" id="email" required>
                            </div>

                            <div class="form-group">
                                <input type="text" placeholder="Tema" class="form-control" name="subject" id="subject" required>
                            </div>

                            <div class="form-group">
                                <textarea rows="6" placeholder="Mensaje" class="form-control" name="body" id="message" required></textarea>
                            </div>

                            <div id="mail-success" class="success">
                                Thank you. The Mailman is on His Way :)
                            </div>

                            <div id="mail-fail" class="error">
                                Sorry, don't know what happened. Try later :(
                            </div>

                            <div id="cf-submit">
                                <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                            </div>

                        </form>
                    </div>
                    <!-- ./End Contact Form -->

                    <!-- Contact Details -->
                    <div class="contact-details col-md-6 " >
                        <div class="google-map">
                            <div id="map"></div>
                        </div>
                        <ul class="contact-short-info" >
                            <li>
                                <i class="tf-ion-ios-home"></i>
                                <span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
                            </li>
                            <li>
                                <i class="tf-ion-android-phone-portrait"></i>
                                <span>Phone: +880-31-000-000</span>
                            </li>
                            <li>
                                <i class="tf-ion-android-globe"></i>
                                <span>Fax: +880-31-000-000</span>
                            </li>
                            <li>
                                <i class="tf-ion-android-mail"></i>
                                <span>Email: hello@example.com</span>
                            </li>
                        </ul>
                        <!-- Footer Social Links -->
                        <div class="social-icon">
                            <ul>
                                <li><a class="fb-icon" href="https://www.facebook.com/themefisher"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="https://www.twitter.com/themefisher"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="https://themefisher.com/"><i class="tf-ion-social-dribbble-outline"></i></a></li>
                                <li><a href="https://themefisher.com/"><i class="tf-ion-social-googleplus-outline"></i></a></li>
                                <li><a href="https://themefisher.com/"><i class="tf-ion-social-pinterest-outline"></i></a></li>
                            </ul>
                        </div>
                        <!--/. End Footer Social Links -->
                    </div>
                    <!-- / End Contact Details -->



                </div> <!-- end row -->
            </div> <!-- end container -->
        </div>
    </section>

@stop
