@extends('Admin.Master')

@section('title', 'Categories')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{url('/Admin/Categories/0')}}"><i class="fa-solid fa-folder-open"></i>Categorias</a>
    </li>

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="panel shadow">
                    <div class="header">
                        <h2 class="title"><i class="fa-solid fa-circle-plus" ></i>Agregar Categorias</h2>
                    </div>
                    <div class="inside">
                        <form action="/Admin/Category/Add" method="POST">
                            @csrf
                            <!--Nombre del producto-->

                            <label for="name">Nombre:</label>
                            <div class="input-group">
                                <div class="input-group-lg">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></span>
                                </div>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <label for="module" class="mtop16">Modulo:</label>
                            <div class="input-group">
                                <div class="input-group-lg">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></span>
                                </div>
                                <select name="modole" id="module" class="form-control custom-select custom-select-lg mb-3">
                                    <option selected>Seleccione un modulo</option>
                                    @foreach(ModulesArray() as $module => $valor)
                                        <option value="{{$module}}" >{{$valor}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <label for="name">Icono:</label>
                            <div class="input-group">
                                <div class="input-group-lg">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></span>
                                </div>
                                <input type="text" name="icon" class="form-control">
                            </div>

                            <input type="submit" name="save" value="Guardar" class="btn btn-success mtop16">
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel shadow">
                    <div class="header">
                        <h2 class="title"><i class="fa-solid fa-folder-open"></i>Categorias</h2>
                    </div>
                    <div class="inside">
                        <nav class="nav nav-pills">
                            @foreach(ModulesArray() as $mode => $value)
                                <a class="nav-link" href="{{url('/Admin/Categories/'.$mode)}}"><i class="fa-solid fa-clipboard-list"></i> {{$value}}</a>
                            @endforeach
                        </nav>
                        <table class="table mtop16">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td>Nombre</td>
                                    <td width="120"></td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($cats as $cat)
                                <tr>
                                    <td width="32">{!! $cat->icon !!}</td>
                                    <td>{{$cat->nombre}}</td>
                                    <td>
                                        <div class="opts">
                                            <a href="{{url('/Admin/Category/'.$cat->id.'/Edit')}}" data-toggle="tooltip" data-popper-placement="top" title="Editar">
                                                <i class="fa-solid fa-user-pen"></i>
                                            </a>
                                            <a href="{{url('/Admin/Category/'.$cat->id.'/Delete')}}" data-toggle="tooltip" data-popper-placement="top" title="Eliminar">
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
        </div>
    </div>
@endsection
