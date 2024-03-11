@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestionar Local</h1>
@stop

@section('content')


    <div class="content-wrapper">

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-6">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Datos del Representante</h3>
                            </div>


                            <form id="frmPremise" name="frmPremise" method="post" action="{{route('premise.store')}}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="idc">Cédula de Identidad del Responsable</label>
                                        <input type="text" class="form-control" id="idc"
                                            name="idc" placeholder="Ingresa CI">
                                    </div>
                                    <div class="form-group">
                                        <label for="last_names">Código</label>
                                        <input type="text" class="form-control" id="ident" name="ident"
                                            placeholder="Ingresa Código con el que se identificará en el sistema">
                                    </div>
                                    <div class="form-group">
                                        <label for="names">RUT</label>
                                        <input type="text" class="form-control" id="rut" name="rut"
                                            placeholder="Ingresa Rut del Local">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Patente</label>
                                        <input type="text" class="form-control" id="patent" name="patent"
                                            placeholder="Ingresa Patente">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Dirección</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="Ingresa Dirección">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Correo Electrónico</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Ingresa Correo">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Registrar</button>
                                </div>
                            </form>
                        </div>
                    @stop

                    @section('css')
                        {{-- Add here extra stylesheets --}}
                        {{-- <link rel="stylesheet" href="/css/admin_custom.css">  --}}
                    @stop

                    @section('js')
                        <script>
                            console.log("Hi, I'm using the Laravel-AdminLTE package!");
                        </script>
                    @stop
