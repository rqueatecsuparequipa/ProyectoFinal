
@extends('layouts/plantillatienda')

@section('list')
    @foreach($liscarrito as $item1)
        <div class="media">
            <a class="pull-left" href="{{url($item1->articulos->imagen)}}" data-fancybox="gallery">
                <img class="media-object" src="{{url($item1->articulos->imagen)}}" alt="image" width="60"/>
            </a>
            <div class="media-body">
                <h4 class="media-heading"><a href="#!">{{ $item1->articulos->nombre}}</a></h4>
                <div class="cart-price">
                    <p>
                        <span>2 x</span>
                        <span>S/.{{($item1->articulos->precio+$item1->articulos->precio)-(($item1->articulos->precio+$item1->articulos->precio)*0.05)}}</span>
                    </p>
                </div>
                <h5><strong>S/.{{ $item1->articulos->precio}}</strong></h5>
            </div>
            <form action="{{route('Cart.destruir', $item1->id)}}" method="POST">
                <input type="hidden" value="{{Auth::user()->id }}" name="usuario">
                <input name="_method" type="hidden" value="DELETE">
                <button href="{{route('Cart',Auth::user()->id )}}" class="remove"><i class="tf-ion-close"></i></button>
            </form>
        </div><!-- / Cart Item -->
    @endforeach
@stop


@section('contenidoHome')
    @guest
        @if (Route::has('Login'))
            <p  style="display:none">{{ $x='#' }}</p>
            <input  style="display:none"   type="text" class="form-control" name="usuario"  value="{{$x }}">
        @endif
        @if (Route::has('Register'))
            <p  style="display:none">{{ $x='#' }}</p>
            <input  style="display:none"   type="text" class="form-control" name="usuario"  value="{{$x }}">
        @endif
    @else
        <div class="container" style="margin-top: 80px">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/Shop">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                </ol>
            </nav>
            @if(session()->has('success_msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success_msg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            @if(session()->has('alert_msg'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session()->get('alert_msg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            @if(count($errors) > 0)
                @foreach($errors0>all() as $error)
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endforeach
            @endif
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <br>
                    @foreach($liscarrito as $item)
                        <div class="row">
                            <div class="col-lg-3">
                                <a href="{{url($item->articulos->imagen) }}" data-fancybox="gallery">
                                    <img src="{{url($item->articulos->imagen) }}" class="img-thumbnail" width="200" height="200">
                                </a>
                            </div>
                            <div class="col-lg-5">
                                <p>
                                    <b><a href="/Shop/{{ $item->articulos->slug }}">{{ $item->nombre }}</a></b><br>
                                    <b>Precio: </b>S/.{{ $item->articulos->precio }}<br>
                                    <b>Nombre: </b>S/.{{ $item->articulos->nombre }}<br>
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <a href="{{route('detalle',$item->articulo_id)}}" class="btn btn-outline-success mtop16" >Comprar</a>
                                    @csrf
                                    <form action="{{route('Cart.destruir', $item->id)}}" method="POST">
                                        <input type="hidden" value="{{Auth::user()->id }}" name="usuario">
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button href="{{route('Cart',Auth::user()->id )}}" class="btn btn-dark btn-sm mtop16" style="margin-right: 10px; font-size: large"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
            <br><br>
        </div>
    @endguest
@stop
