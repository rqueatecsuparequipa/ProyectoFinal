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
                        <form action="/Admin/Category/{{$cat->id}}/Store" method="POST">
                            @csrf
                            <!--Nombre del producto-->
                            <label for="name">Nombre:</label>
                            <div class="input-group">
                                <div class="input-group-lg">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></span>
                                </div>
                                <input type="text" name="name" value="{{$cat->nombre}}" class="form-control">
                            </div>

                            <label for="module" class="mtop16">Modulo:</label>
                            <div class="input-group">
                                <div class="input-group-lg">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></span>
                                </div>
                                <select name="modole" id="module" class="form-control custom-select custom-select-lg mb-3">
                                    @foreach(ModulesArray() as $module => $valor)
                                        <option value="{{$module}}">{{$valor}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <label for="name">Icono:</label>
                            <div class="input-group">
                                <div class="input-group-lg">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></span>
                                </div>
                                <input type="text" name="icon" value="{{$cat->icon}}" class="form-control">
                            </div>

                            <input type="submit" name="save" value="Guardar" class="btn btn-success mtop16">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
