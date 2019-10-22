@extends('layouts.dashboard')
@section('css')
<link rel="stylesheet" href="../../css/dashboard.css">
@endsection
@section('title')
Panel de Control
@endsection

@section('main')
<section class="mt-5">
    <div class="buscar d-flex bg-light justify-content-between">

        <div class="m-auto">
            <span class="label label-default">Filtrar por municipio: </span>
            <select class=" @error('muni') is-invalid @enderror" name="muni" id="muni">
            @foreach ($munis as $muni)

            <option value="{{$muni->id}}" {{$muni->id == old('muni') ? "selected": ""}}>{{$muni->name}}</option>
            @endforeach
                </select>
                @error('municipio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

        </div>
        <div class="m-auto">
            <form class="" action="/modificar-tramite" method="get">
              @csrf
                <div class="input-group">
                    <input type="text" class="form-control search-input" name="" value="" placeholder="Buscar por nombre">
                    <button type="button" name="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
                </div>
            </form>
        </div>
    </div>
    <h3 class="text-muted text-center mb-3">Listado de Trámites</h3>
    <table class="table table-dark  table-hover text-center">
        <thead>
            <tr class="text-muted">
                <th class="hidden">Id</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Munis_Id</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tramites as $tramite)
            <tr>
                <th class="hidden"> {{$tramite->id}}</th>
                <td><textarea name="title" rows="2" cols="12"> {{$tramite->title}} </textarea></td>
                <td><textarea name="description" rows="2" cols="53">{{$tramite->description}}</textarea></td>
                <td> {{$tramite->munis_id}}</td>
                <td><button class="btn btn-success btn-secondary w-77 py-2"> Modificar</button> </td>
                <td><button class="btn btn-danger  btn-secondary w-77 py-2"> Eliminar</button> </td>
            </tr>
          @endforeach

        </tbody>
    </table>
    <!-- pagination  -->
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link py-2 px-3" href="#"><span>Anterior</span> </a>
        </li>
        <li class="page-item active">
            <a class="page-link py-2 px-3" href="#"><span>1</span> </a>
        </li>
        <li class="page-item">
            <a class="page-link py-2 px-3" href="#"><span>2</span> </a>
        </li>
        <li class="page-item">
            <a class="page-link py-2 px-3" href="#"><span>Posterior</span> </a>
        </li>

    </ul>
    <!-- pagination  -->
</section>

@endsection
