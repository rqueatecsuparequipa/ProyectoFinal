@extends('layouts/plantillatienda')

@section('tituloHome', 'Pagine Main')
{{--
@section('list')
    @foreach($liscarrito1 as $item2)
        <div class="media">
            <a class="pull-left" href="{{url($item2->articulos->imagen)}}" data-fancybox="gallery">
                <img class="media-object" src="{{url($item2->articulos->imagen)}}" alt="image" width="60"/>
            </a>
            <div class="media-body">
                <h4 class="media-heading"><a href="#!">{{ $item2->articulos->nombre}}</a></h4>
                <div class="cart-price">
                    <p>
                        <span>2 x</span>
                        <span>S/.{{($item2->articulos->precio+$item2->articulos->precio)-(($item2->articulos->precio+$item2->articulos->precio)*0.05)}}</span>
                    </p>
                </div>
                <h5><strong>S/.{{ $item2->articulos->precio}}</strong></h5>
            </div>
            <form action="{{route('Cart.destruir', $item2->id)}}" method="POST">
                <input type="hidden" value="{{Auth::user()->id }}" name="usuario">
                <input name="_method" type="hidden" value="DELETE">
                <button href="{{route('Cart',Auth::user()->id )}}" class="remove"><i class="tf-ion-close"></i></button>
            </form>
        </div><!-- / Cart Item -->
    @endforeach
@stop--}}

@section('contenidoHome')




<div class="hero-slider">
    @foreach($destacado as $des)
  <div class="slider-item th-fullpage hero-area" style="background-image: url('{{$des->imagen}}')" >
      <img src="{{'$des->imagen'}}" alt="">
    <div class="container">

      <div class="row">
        <div class="col-lg-8 text-center">
          <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS:<br>S/.{{$des->precio}}</p>
          <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">{{$des->nombre}}</h1>
          <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="{{url('/Shop')}}">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
    @endforeach
    @foreach($segundo as $seg)
  <div class="slider-item th-fullpage hero-area" style="background-image: url('{{$seg->imagen}}');">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-left">
            <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS:<br>S/.{{$seg->precio}}</p>
            <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">{{$seg->nombre}}</h1>
            <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="{{url('/Shop')}}">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
        @endforeach

        @foreach($tercero as $ter)
  <div class="slider-item th-fullpage hero-area" style="background-image: url('{{$ter->imagen}}');">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-right">
          <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS:<br>S/.{{$ter->precio}}</p>
          <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">{{$ter->nombre}}</h1>
          <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="{{url('/Shop')}}">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
        @endforeach

</div>


<!-- banner -->
<section class="products section bg-gray">
	<div class="container">
		<div class="row">
			<div class="title text-center">

				<h2>Trendy Products</h2>
			</div>
		</div>

		<div class="row">

            @foreach($listar as $item1)
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
                        <a href="{{$item1->imagen}}" data-fancybox="gallery">
						<span class="bage">See</span>
                        </a>
                        <img class="img-responsive" src="{{$item1->imagen}}" alt="product-img"  style="width: 400px; height: 400px"/>
						<div class="preview-meta">
							<ul>
								<li>

                                    <form method="post" action="{{url('addcarrito')}} " enctype="multipart/form-data">
                                        @csrf

                                        @guest
                                            @if (Route::has('Login'))
                                                <p  style="display:none">{{ $x='noyal' }}</p>
                                            @endif
                                            @if (Route::has('Register'))
                                                <p  style="display:none">{{ $x='noyal' }}</p>
                                            @endif

                                        @else

                                            <div class="form-group" style="display:none" >
                                                <label for="articulo_id">Articulo</label>
                                                <input type="text" class="form-control" name="articulo_id" value="{{$item1->id}}">
                                            </div>
                                            <div class="form-group" style="display:none" >
                                                <label for="usuario_id">Usuario</label>
                                                <input type="text" class="form-control" name="usuario_id" value="{{ Auth::user()->id }}">
                                            </div>
                                        @endguest


                                        <div class="form-group">
                                            @guest
                                                @if (Route::has('Login') )



                                                    <a href="{{ url('/Login') }}" ><i  class="tf-ion-android-cart"></i></a>

                                                @endif
                                            @else

                                                <div class="card-footer" style="background-color: rgba(13,202,240,0);">
                                                    <div class="row">
                                                        <button class="btn btn-outline-info  tooltip-test" title="add to cart" type="submit" >
                                                            <i class="fa fa-shopping-cart"></i> add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            @endguest
                                        </div>
                                    </form>

								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.html">{{$item1->nombre}}</a></h4>

						<p class="precio">S/.{{$item1->precio}}</p>
                        <p class="id">Stock {{$item1->stock}}</p>
					</div>

				</div>
			</div>
            @endforeach







		<!-- Modal -->
		<div class="modal product-modal fade" id="product-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<i class="tf-ion-close"></i>
			</button>
		  	<div class="modal-dialog " role="document">
		    	<div class="modal-content">
			      	<div class="modal-body">
			        	<div class="row">
			        		<div class="col-md-8 col-sm-6 col-xs-12">
			        			<div class="modal-image">
				        			<img class="img-responsive" src="images/shop/products/modal-product.jpg" alt="product-img" />
			        			</div>
			        		</div>
			        		<div class="col-md-4 col-sm-6 col-xs-12">
			        			<div class="product-short-details">
			        				<h2 class="product-title">GM Pendant, Basalt Grey</h2>
			        				<p class="product-price">$200</p>
			        				<p class="product-short-description">
			        					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
			        				</p>
			        				<a href="cart.blade.php" class="btn btn-main">Add To Cart</a>
			        				<a href="product-single.html" class="btn btn-transparent">View Product Details</a>
			        			</div>
			        		</div>
			        	</div>
			        </div>
		    	</div>
		  	</div>
		</div><!-- /.modal -->

		</div>
	</div>
</section>



<!--
Start Call To Action
==================================== -->

<section class="section instagram-feed">
	<div class="container">
		<div class="row">
			<div class="title">
				<h2>View us on instagram</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="instagram-slider" id="instafeed" data-accessToken="IGQVJYeUk4YWNIY1h4OWZANeS1wRHZARdjJ5QmdueXN2RFR6NF9iYUtfcGp1NmpxZA3RTbnU1MXpDNVBHTzZAMOFlxcGlkVHBKdjhqSnUybERhNWdQSE5hVmtXT013MEhOQVJJRGJBRURn"></div>
			</div>
		</div>
	</div>
</section>

@endsection
