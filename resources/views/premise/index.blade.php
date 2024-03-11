@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Locales</h1>
@stop

@section('content')
<div class="card-header">
    <a href="{{route('premise.create')}}" class="btn btn-primary">Registrar Local</a>
</div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Representate</th>
                        <th>RUT</th>
                        <th>Patente</th>
                        <th>Direccón</th>
                        <th>Correo</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($premises as $premise)
                        <tr>
                            <td>{{$premise->ident}}</td>
                            <td>{{$premise->idc}}</td>
                            <td>{{$premise->rut}}</td>
                            <td>{{$premise->patent}}</td>
                            <td>{{$premise->address}}</td>
                            <td>{{$premise->email}}</td>
                            <td width="15px"><a href="{{route('premise.edit',$premise)}}" class="btn btn-primary btn-sm">Editar</a></td>
                            <td width="15px">
                                <form action="{{route('premise.destroy',$premise)}}" method="POST">
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
