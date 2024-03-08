@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Representantes de locales</h1>
@stop

@section('content')
<div class="card-header">
    <a href="{{route('responsible.create')}}" class="btn btn-primary">Crear Representante</a>
</div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Cédula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($responsibles as $responsible)
                        <tr>
                            <td>{{$responsible->idc}}</td>
                            <td>{{$responsible->names}}</td>
                            <td>{{$responsible->last_names}}</td>
                            <td>{{$responsible->phone}}</td>
                            <td width="15px"><a href="{{route('responsible.edit',$responsible)}}" class="btn btn-primary btn-sm">Editar</a></td>
                            <td width="15px">
                                <form action="{{route('responsible.destroy',$responsible)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
