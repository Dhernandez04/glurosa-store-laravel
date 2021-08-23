@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de categoria</h1>
@stop

@section('content')
@if (session('delete'))

    <div class="alert alert-danger">
        <strong>{{session('delete')}}</strong>
    </div>
    
@endif
@if (session('info'))

    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    
@endif
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.categorias.create')}}" class="btn btn-success btn-sm">Agregar categoria</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>activo</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria) 
                    <tr>
                        <td>{{$categoria->id}}</td>
                        <td>{{$categoria->nombre}}</td>
                        <td>{{$categoria->descripcion}}</td>
                        <td>{{$categoria->activo}}</td>
                        <td width="10">
                            <a href="{{route('admin.categorias.edit',$categoria)}}" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        <td width="10">
                            <form action="{{route('admin.categorias.destroy',$categoria)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
