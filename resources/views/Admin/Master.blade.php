<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - My Project</title>
    <!--para los formularios-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Ejecucion de route-->
    <meta name="routeName" content="{{Route::currentRouteName()}}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/Admin/Admin.css?v='.time()) }}">

    <!-- Fuentes de letra -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300&display=swap" rel="stylesheet">

   <!-- **************--------------------->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"
    />

    <!--Icons-->
    <script src="https://kit.fontawesome.com/a3767af1ed.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="{{url('js/Libs/ckeditor/ckeditor.js')}}"></script>
    <script src="{{url('js/JS/Admin.js')}}"></script>
    <script>
        $(document).ready(function (){
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</head>
<body>
<div class="wrapper">
    <!-- incrustar admin.Sidebar-->
    <div class="col1">@include('Admin.Main')</div>
    <div class="col2">
        <nav class="navbar navbar-expand-lg shadow">
            <dv class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{url('/Admin')}}" class="nav-link"><i class="fa-solid fa-house"></i>Home</a>
                    </li>
                </ul>
            </dv>
        </nav>

        <div class="page">
            <div class="container-fluid">
                <nav aria-label="breadcrumb shadow">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/Admin')}}"><i class="fa-solid fa-house"></i>Home</a>
                        </li>
                        @section('breadcrumb')
                        @show
                    </ol>
                </nav>
            </div>

            <!--Alerts-->
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

            @section('content')
            @show

        </div>
    </div>
</div>
</body>
</html>
