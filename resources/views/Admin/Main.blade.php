<div class="sidebar shadow">
    <div class="section-top">
        <div class="logo">
            <img src="{{ asset('images/logo.png/') }}"  class="img-fluid" alt="">
        </div>
        <div class="user">
            <span class="subtitle">Hola:</span>
            <div class="name">
                {{Auth::user()->name}} {{Auth::user()->lastname}}
                <a href="{{url('/Logout')}}" data-toggle="tooltip" data-popper-placement="top" title="Salir">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            </div>
            <div class="email">{{Auth::user()->email}}</div>
        </div>
    </div>
    <div class="main">
        <ul>
            <li>
                <a href="{{url('/Admin')}}"><i class="fa-solid fa-house"></i>Home</a>
            </li>
            <li>
                <a href="{{url('/Admin/Products')}}"><i class="fa-solid fa-boxes-stacked"></i>Productos</a>
            </li>
            <li>
                <a href="{{url('/Admin/Categories/0')}}"><i class="fa-solid fa-folder-open"></i>Categorias</a>
            </li>
            <li>
                <a href="{{url('/Admin/Users')}}"><i class="fa-solid fa-users"></i>Usuarios</a>
            </li>
        </ul>
    </div>
</div>
