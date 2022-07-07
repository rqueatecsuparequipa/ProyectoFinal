@extends('layouts.plantillatienda')

@section('tituloHome', 'Shop')

@section('contenidoHome')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Productos</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($pr as $pro)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <a href="{{$pro->imagen}}" data-fancybox="gallery">
                                    <img src="{{$pro->imagen}}"
                                         class="card-img-top mx-auto"
                                         style="height: 150px; width: 150px;display: block;"
                                         alt=""
                                    ></a>
                                <div class="card-body">
                                    <a href=""><h6 class="card-title">{{ $pro->nombre }}</h6></a>
                                    <p>S/.{{ $pro->precio }}</p>
                                    <form action="{{url('addcarrito1')}}" method="POST">
                                        @csrf
                                        @guest
                                            @if (Route::has('Login'))
                                                <p  style="display:none">{{ $x='noyal' }}</p>
                                            @endif
                                            @if (Route::has('Register'))
                                                <p  style="display:none">{{ $x='noyal' }}</p>
                                            @endif
                                        @else
                                            <input type="hidden" value="{{ $pro->id }}" name="articulo_id">
                                            <input type="hidden" value="{{ $pro->nombre }}" id="name" name="name">
                                            <input type="hidden" value="{{ $pro->precio }}" id="price" name="price">
                                            <input type="hidden" value="{{ $pro->imagen }}" id="img" name="img">
                                            <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                            <input type="hidden" value="1" id="quantity" name="quantity">
                                            <input type="hidden" name="usuario_id" value="{{ Auth::user()->id }}">
                                        @endguest
                                        @guest
                                            @if (Route::has('Login') )
                                                <a href="{{ url('/Login') }}" class="btn btn-outline-info  tooltip-test" >
                                                    <i class="fa fa-shopping-cart"></i> add to cart
                                                </a>
                                            @endif
                                        @else
                                            <div class="card-footer" style="background-color: white;">
                                                <div class="row">
                                                    <button class="btn btn-outline-info  tooltip-test" title="add to cart" type="submit">
                                                        <i class="fa fa-shopping-cart"></i> add to cart
                                                    </button>
                                                </div>
                                            </div>
                                        @endguest
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
