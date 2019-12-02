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
                {{--<td><a href="#" class="nav-link" data-toggle="modal" data-target="#actualizar">Actualizar</i></a></td>--}}
                <td><button class="btn btn-info"><a href="/admin/tramites/modificar-tramite-{{$tramite->id}}" >Actualizar</a></button> </td>
                {{--<td><button class="btn btn-danger"><a href="/admin/tramites/eliminar-tramite-{{$tramite->id}}">Eliminar</a></button> </td> --}}
            </tr>
            @endforeach

        </tbody>
    </table>
    <!-- pagination  -->

    <!-- pagination  -->

    <!-- modal -->
    <div class="modal fade" id="actualizar">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Qué acción deseas realizar?</h4>
            <button type="button" name="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            Selecciona una opción a realizar con este trámite
          </div>
          <div class="modal-footer">
            <button class="btn btn-info" type="button" name="button" class="btn btn-success" data-dismiss="modal"><a href="/admin/tramites/modificar-tramite-">Actualizar</a></button>
            <button type="button" name="button" class="btn btn-danger" data-dismiss="modal"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                {{ __('Cerrar Sesión') }}</a></button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal -->
</section>

@endsection
