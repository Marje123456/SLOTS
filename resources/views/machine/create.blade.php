@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestionar Máquina</h1>
@stop

@section('content')


    <div class="content-wrapper">

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-6">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Datos de la Máquina</h3>
                            </div>


                            <form id="frmMachine" name="frmMachine" method="post" action="{{route('machine.store')}}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="premise_ident">Código de la Máquina</label>
                                        <input type="text" class="form-control" id="code"
                                            name="code" placeholder="Ingresa Código">
                                    </div>
                                    <div class="form-group">
                                        <label for="premise_ident">Código del Local</label>
                                        <input type="text" class="form-control" id="premise_ident"
                                            name="premise_ident" placeholder="Ingresa Código">
                                    </div>
                                    <div class="form-group">
                                        <label for="last_names">Modelo</label>
                                        <input type="text" class="form-control" id="model" name="model"
                                            placeholder="Ingresa Modelo">
                                    </div>
                                    <div class="form-group">
                                        <label for="names">Marca</label>
                                        <input type="text" class="form-control" id="brand" name="brand"
                                            placeholder="Ingresa Marca">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Serial</label>
                                        <input type="text" class="form-control" id="seriale" name="seriale"
                                            placeholder="Ingresa Serial">
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
