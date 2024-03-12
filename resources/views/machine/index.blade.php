@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Máquinas</h1>
@stop

@section('content')
<div class="card-header">
    <a href="{{route('machine.create')}}" class="btn btn-primary">Registrar Máquina</a>
</div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Local</th>
                        <th>Modelo</th>
                        <th>Marca</th>
                        <th>Serial</th>
                        <th>Fecha de Activación</th>
                        <th>Fecha de Pago</th>
                        <th>Estatus</th>
                        <th colspan="4"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($machines as $machine)
                        <tr>
                            <td>{{$machine->code}}</td>
                            <td>{{$machine->premise_ident}}</td>
                            <td>{{$machine->model}}</td>
                            <td>{{$machine->brand}}</td>
                            <td>{{$machine->seriale}}</td>
                            <td>{{$machine->activation_date}}</td>
                            <td>{{$machine->payment_date}}</td>
                            @switch(true)
                                @case($machine->active_status==0)
                                    <td>Inactiva</td>
                                    <td width="15px"><a href="{{route('machine.createqr',$machine)}}" class="btn btn-warning btn-sm">Activar</a></td>
                                    @break
                                @case($machine->active_status==1)
                                    <td>Activa</td>
                                    <td width="15px"><a href="{{route('machine.createqr',$machine)}}" class="btn btn-warning btn-sm">Ver QR</a></td>
                                    @break
                                @default
                                    
                            @endswitch
                            
                            <td width="15px"><a href="{{route('machine.edit',$machine)}}" class="btn btn-primary btn-sm">Editar</a></td>
                            <td width="15px"><a href="{{route('machine.edit',$machine)}}" class="btn btn-success btn-sm">Pago</a></td>
                            <td width="15px">
                                <form action="{{route('machine.destroy',$machine)}}" method="POST">
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
