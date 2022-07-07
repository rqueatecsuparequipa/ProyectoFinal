@extends('Admin.Master')

@section('title', 'Edit Products')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{url('Admin/Products')}}"><i class="fa-solid fa-boxes-stacked"></i>Productos</a>
    </li>

@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="panel shadow">
            <div class="header">
                <h2 class="title"><i class="fa-solid fa-file-pen"></i>Editar Producto</h2>
            </div>
            <div class="inside">
                <form action="/Admin/Products/{{$product->id}}/Edit" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--Nombre del producto-->
                    <div class="row">

                        <div class="col-md-6">
                            <label for="name">Nombre del Producto</label>
                            <div class="input-group">
                                <div class="input-group-lg">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></span>
                                </div>
                                <input type="text" name="name" class="form-control" value="{{$product->nombre}}">
                            </div>
                        </div>

                        <!--Categoria-->
                        <div class="col-md-3">
                            <label for="category">Categoria</label>
                            <div class="input-group">
                                <div class="input-group-lg">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></span>
                                </div>
                                <select name="category" id="module" class="form-control custom-select custom-select-lg mb-3">
                                    @foreach($cats as $cat)
                                        <option value="{{$cat->id}}">{{$cat->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!--Imagen-->
                        <div class="col-md-3">
                            <label for="name">Imagen Destacado</label>
                            <div class="custom-file">
                                <input type="file" name="img" class="custom-file-input" id="customFile" accept="image/*">
                                <label class="custom-file-label" for="customFile"></label>
                            </div>
                        </div>

                    </div>

                    <div class="row mtop16">
                        <div class="col-md-3">
                            <label for="price">Precio:</label>
                            <div class="input-group">
                                <div class="input-group-lg">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></span>
                                </div>
                                <input type="number" name="price" class="form-control" min="0.00" step="any" value="{{$product->precio}}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="price">¿En Descuento?</label>
                            <div class="input-group">
                                <div class="input-group-lg">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-tags"></i></span>
                                </div>
                                <select name="discount" class="form-control custom-select custom-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>No</option>
                                    <option value="0">No</option>
                                    <option value="1">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="price">Descuento:</label>
                            <div class="input-group">
                                <div class="input-group-lg">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-tags"></i></span>
                                </div>
                                <input type="number" name="indiscount" class="form-control" min="0.00" step="any" value="0">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="price">Stock:</label>
                            <div class="input-group">
                                <div class="input-group-lg">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></span>
                                </div>
                                <input type="number" name="stock" class="form-control" min="0" value="{{$product->stock}}">
                            </div>
                        </div>

                    </div>

                    <div class="row mtop16">
                        <div class="col-md-9">
                            <label for="content">Descripcion</label>
                            <textarea type="text" name="contents" class="form-control" id="editor"></textarea>
                        </div>

                        <div class="col-md-3">
                            <label for="price">Estado:</label>
                            <div class="input-group">
                                <div class="input-group-lg">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-tags"></i></span>
                                </div>
                                <select name="status" class="form-control custom-select custom-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Borrador</option>
                                    <option value="0">Borrador</option>
                                    <option value="1">Publico</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mtop16">
                        <div class="col-md-12">
                            <input type="submit" value="Actualizar" class="btn btn-success" >
                        </div>
                    </div>

                </form>

            </div>
        </div>
            </div>
            <div class="col-md-3">
                <div class="panel shadow">
                    <div class="header">
                        <h2 class="title"><i class="fa-solid fa-image"></i>Imagen Destacado</h2>
                        <div class="inside">
                            <a href="{{url($product->imagen)}}" data-fancybox="gallery">
                                <img src="{{url($product->imagen)}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
