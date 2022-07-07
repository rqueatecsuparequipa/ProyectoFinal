@extends('layouts/plantillatienda')

@section('tituloHome', 'Crud con Laravel 8')

@section('contenidoHome')
    <!-- Page Wrapper -->
    <section class="page-wrapper success-msg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="block text-center">
                        <h3>{{$pru1->nombre}}</h3>
                        <i class="tf-ion-android-checkmark-circle"></i>
                        <h2 class="text-center">Thank you! For your payment</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, sed.</p>
                        <a href="{{url('/Shop')}}" class="btn btn-main mt-20">Continue Shopping</a>
                        <a href="{{route('PDF',$pru1->id)}}" class="btn btn-main mt-20">Generar Factura</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.page-warpper -->

@endsection
