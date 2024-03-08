@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestionar Representante de Local</h1>
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


                            <form id="frmResponsible" name="frmResponsible" method="post" action="{{route('responsible.store')}}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="idc">Cédula de Identidad</label>
                                        <input type="text" class="form-control" id="idc" name="idc" placeholder="Ingresa CI">
                                    </div>
                                    <div class="form-group">
                                        <label for="names">Nombre</label>
                                        <input type="text" class="form-control" id="names" name="names" placeholder="Ingresa Nombres">
                                    </div>
                                    <div class="form-group">
                                        <label for="last_names">Apellidos</label>
                                        <input type="text" class="form-control" id="last_names" name="last_names" placeholder="Ingresa Apellidos">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Teléfono</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Ingresa Teléfono">
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
