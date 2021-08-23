@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.categorias.store'])!!}

                <div class="form-group">
                   {!! Form::label("nombre", "Nombre") !!}
                   {!! Form::text("nombre", null, ["class"=>'form-control', 'placeholder'=>'Ingrese el nombre de la categoria']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("nombre", "Descripcion") !!}
                    {!! Form::textarea("descripcion", null, ["rows"=>3,"class"=>'form-control', 'placeholder'=>'Ingrese el nombre de la categoria']) !!}
                 </div>

                 {!! Form::submit("Crear categoria", ["class"=>"btn btn-primary"]) !!}
 

            {!! Form::close()!!}
        </div>
    </div>
@stop