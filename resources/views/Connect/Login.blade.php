@extends('connect.master')
@section('title','Login')

@section('content')

    <div class="box box_login shadow">

        <!--Logo-->
        <div class="header">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/Logo/logo.png/') }}" alt="">
            </a>
        </div>

        <div class="inside">

            <!--Action-->
            <form action="/Login" method="POST">
                @csrf

                <!--Correo Electronico-->
                <label for="email" class="mtop16" >Correo electrónico:</label>
                <div class="input-group">
                    <div class="input-group-lg">
                        <div class="input-group-text"><i class="fa-solid fa-envelope-open"></i></div>
                    </div>
                    <input type="email" name="email" class="form-control">
                </div>

                <!--Contraseña-->
                <label for="password" class="mtop16">Password:</label>
                <div class="input-group">
                    <div class="input-group-lg">
                        <div class="input-group-text"><i class="fas fa-lock"></i></div>
                    </div>
                    <input type="password" name="password" class="form-control">
                </div>

                <input type="submit" class="btn btn-success mtop16" value="Ingresar">
            </form>

            <!--Mostrara errores cuanto los haya-->
            @if(Session::has('message'))
                <div class= "container">
                    <div class="mtop16 alert alert-{{ Session::get('typealert') }}" style="display: none;">
                        {{Session::get('message')}}
                        @if($errors ->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <script>
                            $('.alert').slideDown();
                            setTimeout(function(){ $('.alert').slideUp; }, 10);
                        </script>
                    </div>
                </div>
            @endif

            <!--Enlaces de rutas-->
            <div class="footer mtop16">
                <a href="{{ url('/Register') }}">¿No tienes una cuenta?, Registrate</a>
                <a href="{{ url('/Recover') }}">Recuperar contraseña</a>
            </div>
        </div>
    </div>

@stop
