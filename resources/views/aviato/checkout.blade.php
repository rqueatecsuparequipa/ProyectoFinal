
@extends('layouts/plantillatienda')

@section('tituloHome', 'Crud con Laravel 8')

@section('contenidoHome')
    <div class="col-lg-7 mtop16" style="font-size: 15px">
        <h4>Productos</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
        </nav>
    </div>
    <hr>

<style>
    /* para todos*/

    /*interespaciado de inputs*/
    .mtop16{
        margin: 16px  0;
    }

    /*stl del form*/
    .box{
        background-color: #fff;
        border-radius: 8px;
        border: 1px solid #d6d6d6;
        /*padding: 16px;*/

    }


    /*stl button al 100%*/
    .box .btn-success {
        width: 100%;
        background-color: #4ed3a1;
        border: 0;
    }

    /*stl f*/
    .box .form-control :focus :active{
        outline: none;
        text-shadow: none;
    }

    /*Borders radius*/
    .box .input-group .input-group-lg .input-group-text{
        border-radius: 8px 0 0 8px;
        padding: 20px;
    }

    /*stl form*/
    .inside{
        padding: 16px;
    }

    .box .header {
        background-color: #00acff;
        padding: 30px;
        border-radius: 8px 8px 0 0 ;
    }


    /*centrado de formulario*/

    .box_register{
        left: calc(50% - 250px);
        top: calc(50% - 410px);
    }

    /*delete somb*/

</style>
<div class="col-md-9">
    <div class="box box_register shadow mtop16">

        <div class="inside">
            <!--Action-->
            <form action="{{url('adddetalle',$pru->id)}}" method="POST">
                @csrf
                @method("PUT")
                <!--Nombre-->
                <label for="name" class="mtop16" >Nombre:</label>
                <div class="input-group">
                    <input type="text" name="nombre" class="form-control"  placeholder="Nombre de Usuario" required>
                </div>

                <!--Apellido-->
                <label for="lastname" class="mtop16" >Apellido:</label>
                <div class="input-group">
                    <input type="text" name="apellido" class="form-control" placeholder="Apellido" required >
                </div>
                <label for="dni" class="mtop16" >DNI:</label>
                <div class="input-group">
                    <input type="text" name="dni" class="form-control" placeholder="DNI" required >
                </div>
                <label for="pais" class="mtop16" >País:</label>
                <div class="input-group">
                    <input type="text" name="pais" class="form-control" placeholder="Pais" required >
                </div>
                <label for="lastname" class="mtop16" >Departamento:</label>
                <div class="input-group">
                    <input type="text" name="departamento" class="form-control" placeholder="Departamento" required >
                </div>
                <label for="direccion" class="mtop16" >Dirección:</label>
                <div class="input-group">
                    <input type="text" name="direccion" class="form-control" placeholder="Dirección" required >
                </div>
                <strong><input type="submit" class="btn btn-success mtop16" value="Confirmar Compra"></strong>
            </form>
        </div>
    </div>
</div>
    <div class="col-md-3 shadow box mtop16">
        <label for="name" class="mtop16" >Nombre del Producto: </label>
        <p style="color: #0c0c0c">{{$pru->nombre}}</p>
        <label for="name" class="mtop16" >Precio:</label>
        <p style="color: #0c0c0c">S/.{{$pru->precio}}</p>
        <label for="name" class="mtop16" >Oferta: </label>
        <p style="color: #0c0c0c">{{$pru->oferta1}}</p>
    </div>
@endsection
