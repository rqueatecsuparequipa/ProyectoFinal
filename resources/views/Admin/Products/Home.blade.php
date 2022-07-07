@extends('Admin.Master')

@section('title', 'Products')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{url('Admin/Products')}}"><i class="fa-solid fa-boxes-stacked"></i>Productos</a>
    </li>
@endsection


@section('content')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class="title"><a href="{{url('Admin/Products')}}"><i class="fa-solid fa-boxes-stacked"></i>Productos</a></h2>
            </div>
            <div class="inside">
                <div class="btns">
                    <a href="{{url('Admin/Products/Add')}}" class="btn btn-primary">
                        <i class="fa-solid fa-circle-plus" ></i>Agregar Producto
                    </a>
                </div>
                <table class="table table-striped mtop16">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td></td>
                            <td>Nombre</td>
                            <td>Categoria</td>
                            <td>Precio</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Product as $pr)
                            <tr>
                                <td>{{$pr->id}}</td>
                                <td >
                                    <a href="{{url($pr->imagen)}}" data-fancybox="gallery">
                                    <img src="{{url($pr->imagen)}}" width="100" alt="">
                                    </a>
                                </td>
                                <td>{{$pr->nombre}}</td>
                                <td >{{$pr->categoria}}</td>
                                <td>S/.{{$pr->precio}}</td>
                                <td width="120">
                                    <div class="opts">
                                        <a href="{{url('/Admin/Products/'.$pr->id.'/Edit')}}" data-toggle="tooltip" data-popper-placement="top" title="Editar">
                                            <i class="fa-solid fa-user-pen"></i>
                                        </a>
                                        <a href="{{url('/Admin/Products/'.$pr->id.'/Delete')}}" data-toggle="tooltip" data-popper-placement="top" title="Eliminar">
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
