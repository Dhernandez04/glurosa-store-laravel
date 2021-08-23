@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Categoria</h1>
@stop

@section('content')
@if (session('info'))

    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    
@endif
<div class="card">
    <div class="card-body">
        {!! Form::model($categoria,['route'=>['admin.categorias.update',$categoria],'method'=>'put'])!!}

            <div class="form-group">
               {!! Form::label("nombre", "Nombre") !!}
               {!! Form::text("nombre", null, ["class"=>'form-control', 'placeholder'=>'Ingrese el nombre de la categoria']) !!}
            </div>
            <div class="form-group">
                {!! Form::label("nombre", "Descripcion") !!}
                {!! Form::textarea("descripcion", null, ["rows"=>3,"class"=>'form-control', 'placeholder'=>'Ingrese el nombre de la categoria']) !!}
             </div>

             {!! Form::submit("Actualizar categoria", ["class"=>"btn btn-primary"]) !!}


        {!! Form::close()!!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop