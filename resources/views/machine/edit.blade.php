@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Datos de la Máquina {{ $machine->code }}</h1>
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


                            <form id="frmMachine" name="frmMachine" method="POST"
                                action="{{ route('machine.update', $machine) }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="premise_ident">Código de la Máquina</label>
                                        <input type="text" class="form-control" id="code"
                                            name="code" value="{{ $machine->code }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="premise_ident">Código del Local</label>
                                        <input type="text" class="form-control" id="premise_ident"
                                            name="premise_ident" value="{{ $machine->premise_ident }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="last_names">Modelo</label>
                                        <input type="text" class="form-control" id="model" name="model"
                                        value="{{ $machine->model }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="names">Marca</label>
                                        <input type="text" class="form-control" id="brand" name="brand"
                                        value="{{ $machine->brand }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Serial</label>
                                        <input type="text" class="form-control" id="seriale" name="seriale"
                                        value="{{ $machine->seriale }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Fecha de Registro</label>
                                        <input type="text" class="form-control" id="registration_date" name="registration_date"
                                        value="{{ $machine->registration_date }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Estado</label>
                                        <input type="text" class="form-control" id="status" name="status"
                                        value="">
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
