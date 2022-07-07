@extends('connect.master')

@section('title','Registrarse')

@section('content')
    <div class="box box_register shadow">

        <!--Logo-->
        <div class="header">
            <a href="{{ url('/') }}">
                <img src="{{ url('images/Logo/logo.png/') }}" alt="">
            </a>
        </div>

        <div class="inside">
            <!--Action-->
            <form action="/Register" method="POST">
                @csrf

                <!--Nombre-->
                <label for="name" class="mtop16" >Nombre:</label>
                <div class="input-group">
                    <div class="input-group-lg">
                        <div class="input-group-text" type="text" ><i class="fa-solid fa-user"></i></div>
                    </div>
                    <input type="text" name="name" class="form-control" >
                </div>

                <!--Apellido-->
                <label for="lastname" class="mtop16" >Apellido:</label>
                <div class="input-group">
                    <div class="input-group-lg">
                        <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                    </div>
                    <input type="text" name="lastname" class="form-control" >
                </div>

                <!--Correo Electronico-->
                <label for="email" class="mtop16" >Correo electrónico:</label>
                <div class="input-group">
                    <div class="input-group-lg">
                        <div class="input-group-text"><i class="fa-solid fa-envelope-open"></i></div>
                    </div>
                    <input type="email" name="email" class="form-control" >
                </div>


                <!--Contraseña-->
                <label for="password" class="mtop16">Password:</label>
                <div class="input-group">
                    <div class="input-group-lg">
                        <div class="input-group-text"><i class="fas fa-lock"></i></div>
                    </div>
                    <input type="password" name="password" class="form-control" >
                </div>

                <!--Confirmar Contraseña-->
                <label for="cpassword" class="mtop16">Confirmar Password:</label>
                <div class="input-group">
                    <div class="input-group-lg">
                        <div class="input-group-text"><i class="fas fa-lock"></i></div>
                    </div>
                    <input type="password" name="cpassword" class="form-control" >
                </div>

                <input type="submit" class="btn btn-success mtop16" value="Registrarse">
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

            <!--redericcion a la pagina  Login-->
            <div class="footer mtop16">
                <a href="{{ url('/Login') }}">Iniciar Sesión</a>
            </div>
        </div>
    </div>

@stop
