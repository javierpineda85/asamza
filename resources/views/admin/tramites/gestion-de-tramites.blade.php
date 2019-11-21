@extends('layouts.dashboard')

@section('css')
<link rel="stylesheet" href="../../css/dashboard.css">
@endsection

@section('title')
Panel de Control
@endsection

@section('admin-section')
/ Gestión de trámites
@endsection

@section('main')
<section class="mt-5">
    <div class="buscar d-flex bg-light justify-content-between">

        <div class="m-auto">
            <form class="" action="#" method="get">
                @csrf
                <div class="input-group">

                    <span><i class="fas fa-search text-danger mt-2"></i></span>
                    <input type="text" class="form-control search-input" name="muni" value="" placeholder="Buscar por Municipio ">

                    <button class="btn btn-info ml-5" type="reset" name="button"> <a href="/admin/tramites/agregar-tramite">Agregar Trámite</a></button>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <h3 class="text-muted text-center mb-5 mt-5">Gestión de trámites</h3>
        <div class="row mb-5 mt-5">
            <div class="d-flex">
                <ul class="muni">
                    @foreach ($munis as $muni)
                    <li class="btn btn-info m-2">
                        <div class="d-flex justify-content-center">
                            <a href="/admin/tramites/listado-por-municipio-{{$muni->id}}" class="a-btn">{{$muni->name}}</a>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>

</section>

@endsection
