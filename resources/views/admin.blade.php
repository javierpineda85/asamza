@extends('layouts.dashboard')

@section('css')
<link rel="stylesheet" href="../../css/dashboard.css">
@endsection

@section('title')
Panel de Control
@endsection


@section('main')

<div class="row pt-md-5 mt-md-3 mb-5">
    <div class="col-xl-6 col-sm-6 p-2">
        <div class="card card-common">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-file-alt fa-3x text-info"></i>

                </div>
                <div class="text-right text-secondary">
                    <h5>Administrar trámites</h5>

                </div>
                <div class="card-footer text-secondary">

                    <span class="btn btn-success"> <a href="/agregar-tramite">Agregar</a></span>
                    <span class="btn btn-success"> <a href="/listado-de-tramites">Listar</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-sm-6 p-2">
        <div class="card card-common">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-globe-americas fa-3x text-info"></i>
                </div>
                <div class="text-right text-secondary">
                    <h5>Administrar Noticias</h5>
                </div>
                <div class="card-footer text-secondary">
                    <span class="btn btn-success"> <a href="#">Agregar</a></span>
                    <span class="btn btn-success"> <a href="#">Listar</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-sm-6 p-2">
        <div class="card card-common">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-users fa-3x text-info"></i>
                </div>
                <div class="text-right text-secondary">
                    <h5>Administrar usuarios</h5>
                </div>
                <div class="card-footer text-secondary">
                    <!-- <span class="btn btn-success"> <a href="#">Agregar</a></span> -->
                    <span class="btn btn-success"> <a href="/listado-de-usuarios">Listar</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-sm-6 p-2">
        <div class="card card-common">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-book-reader fa-3x text-success"></i>
                </div>
                <div class="text-right text-secondary">
                    <h5>Administrar capacitaciones</h5>
                </div>
                <div class="card-footer text-secondary">
                    <span class="btn btn-success"> <a href="#">Agregar</a></span>
                    <span class="btn btn-success"> <a href="#">Listar</a></span>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- end cards  -->



@endsection
