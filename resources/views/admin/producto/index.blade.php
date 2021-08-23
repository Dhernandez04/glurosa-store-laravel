@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de producto</h1>
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
            <a href="{{route('admin.productos.create')}}" class="btn btn-success btn-sm">Agregar producto</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>activo</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto) 
                    <tr>
                        <td>{{$producto->id}}</td>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->descripcion}}</td>
                        <td>{{$producto->precio}}</td>
                        <td>{{$producto->cantidad}}</td>
                        <td>{{$producto->activo}}</td>
                        <td width="10">
                            <a href="{{route('admin.productos.edit',$producto)}}" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        <td width="10">
                            <form action="{{route('admin.productos.destroy',$producto)}}" method="post">
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
