@extends('Admin.Master')

@section('title', 'Users')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{url('/Admin/Users')}}"><i class="fa-solid fa-users"></i>Usuarios</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class="title"><a href="{{url('Admin/Users')}}"><i class="fa-solid fa-users"></i>Usuarios</a></h2>
            </div>
            <div class="inside">
                <table class="table">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Email</td>
                        <td>Rol</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td width="120">{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>
                            <td>
                                <div class="opts">
                                    {{--<a href="{{url('/admin/User/'.$user->id.'/Edit')}}" data-toggle="tooltip" data-popper-placement="top" title="Editar">
                                        <i class="fa-solid fa-user-pen"></i>
                                    </a>--}}
                                    <a href="{{url('/admin/User/'.$user->id.'/Delete')}}" data-toggle="tooltip" data-popper-placement="top" title="Eliminar">
                                        <i class="fa-solid fa-eraser"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
