@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Datos del Local {{ $premise->ident }}</h1>
@stop

@section('content')

    <div class="content-wrapper">

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-6">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Datos del Local</h3>
                            </div>


                            <form id="frmPremise" name="frmPremise" method="POST"
                                action="{{ route('premise.update', $premise) }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="idc">Cédula de Identidad del Responsable</label>
                                        <input type="text" class="form-control" id="premise_idc"
                                            name="premise_idc" value="{{ $premise->responsible_id }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="names">Código de Identificación del Sistema</label>
                                        <input type="text" class="form-control" id="rut" name="rut"
                                            value="{{ $premise->rut }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="names">RUT</label>
                                        <input type="text" class="form-control" id="rut" name="rut"
                                            value="{{ $premise->rut }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Patente</label>
                                        <input type="text" class="form-control" id="patent" name="patent"
                                            value="{{ $premise->patent }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Dirección</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            value="{{ $premise->address }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Correo Electrónico</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            value="{{ $premise->email }}">
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                                    </div>
                            </form>
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
