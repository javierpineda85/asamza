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

                    <button class="btn btn-info ml-5" type="reset" name="button"> <a href="/listado-de-tramites">Listar todo</a></button>
                </div>
            </form>
        </div>
    </div>
    <h3 class="text-muted text-center mb-3 mt-3">Listado de Trámites</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr class="text-muted">
                <th class="hidden">Id</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Munis_Id</th>
                <th>Actualizar</th>
                <!-- <th>Eliminar</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($tramites as $tramite)
            <tr>
                <th class="hidden"> {{$tramite->id}}</th>
                <td><!--<textarea name="title" rows="2" cols="12"> -->{{$tramite->title}} </textarea></td>
                <td><!--<textarea name="description" rows="2" cols="53">-->{{$tramite->description}}</textarea></td>
                <td> {{$tramite->munis_id}}</td>
                <td><button class="btn btn-success btn-info ">Actualizar</button> </td>
                <!-- <td><button class="btn btn-danger  btn-secondary w-77 py-2"> Eliminar</button> </td> -->
            </tr>
            @endforeach

        </tbody>
    </table>
    <!-- pagination  -->
      {{$tramites->links()}}
    <!-- pagination  -->
</section>

@endsection
