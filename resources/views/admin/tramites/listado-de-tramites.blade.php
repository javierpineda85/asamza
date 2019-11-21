@extends('layouts.dashboard')

@section('css')
<link rel="stylesheet" href="../../css/dashboard.css">
@endsection

@section('title')
Panel de Control
@endsection

@section('admin-section')
/ Listado de trámites
@endsection

@section('main')
<section class="mt-5">
    <div class="buscar d-flex bg-light justify-content-between">

        <div class="m-auto">
            <form class="" action="/listado-por-municipio" method="get">
                @csrf
                <div class="input-group">

                    <span><i class="fas fa-search text-danger mt-2"></i></span>
                    <input type="text" class="form-control search-input" name="muni" value="" placeholder="Buscar por Municipio ">

                    <button class="btn btn-info ml-5" type="reset" name="button"> <a href="/admin/tramites/agregar-tramite">Agregar Trámite</a></button>
                </div>
            </form>

        </div>
    </div>
    <h3 class="text-muted text-center mb-3 mt-3">Listado de Trámites</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr class="text-muted">
                <th>Título</th>
                <th>Descripción</th>
                <th>Actualizar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tramites as $tramite)
            <tr>
                <td>{{$tramite->title}} </textarea></td>
                <td>{{$tramite->description}}</textarea></td>
                <td><button class="btn btn-info"><a href="/admin/tramites/modificar-tramite-{{$tramite->id}}">Actualizar</a></button> </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <!-- pagination  -->

    <!-- pagination  -->
</section>

@endsection
