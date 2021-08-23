@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.productos.store'])!!}
           <div class="form-group">
               
               {!! Form::label("categoria", "Seleccionar categoria") !!}
               {!! Form::select("cate_id", $categorias, null, ["class"=>'form-control']) !!}
            </div>
            <div class="form-group">
                    {!! Form::label("nombre", "Nombre") !!}
                   {!! Form::text("nombre", null, ["class"=>'form-control', 'placeholder'=>'Ingrese el nombre del producto']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("precio", "Precio") !!}
                   {!! Form::text("precio", null, ["class"=>'form-control', 'placeholder'=>'Ingrese el precio del producto']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("oferta", "Oferta") !!}
                   {!! Form::text("oferta", null, ["class"=>'form-control', 'placeholder'=>'Ingrese la oferta del producto']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("cantidad", "Cantidad") !!}
                   {!! Form::text("cantidad", null, ["class"=>'form-control', 'placeholder'=>'Ingrese la cantidad del producto']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("nombre", "Descripcion") !!}
                    {!! Form::textarea("descripcion", null, ["rows"=>3,"class"=>'form-control', 'placeholder'=>'Ingrese la descripcion']) !!}
                 </div>

                 {!! Form::submit("Crear producto", ["class"=>"btn btn-primary"]) !!}
 

            {!! Form::close()!!}
        </div>
    </div>
@stop