@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CÓDIGO QR PARA LA MÁQUINA {{$machine->code}}</h1>

    <h1>POR FAVOR GUARDE EL CÓGIDO QR GENERADO</h1>
@stop

@section('content')
<div>
    {!!QrCode::size(200)->generate
    (
        'Codigo de la maquina: '.$machine->code.
        'Modelo: '.$machine->model.
        'Marca: '.$machine->brand.
        'Fecha de Registro: '.$machine->registration_date.
        'Estatus: '.$machine->active_status
    ) !!}
</div>
<div>
    <a href="{{route('machine.activatemachine',$machine)}}" class="btn btn-warning btn-sm">Activar Máquina</a>
</div>
    
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop