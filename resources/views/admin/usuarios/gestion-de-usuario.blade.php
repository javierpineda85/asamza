@extends('layouts.dashboard')

@section('css')
<link rel="stylesheet" href="../../css/dashboard.css">
@endsection

@section('title')
Panel de Control
@endsection

@section('admin-section')
/ Gestión de usuarios
@endsection

@section('main')


<div class="row justify-content-md-center">
    <div class="col-xl-6 col-sm-6 p-2 mt-5">
        <div class="card card-common">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <i class="fas fa-user fa-3x text-info"></i>
                    <h1 class="text-center text-secondary"><span>Gestión de usuarios</span></h1>
                </div>
                <div class="text-left text-secondary pt-3">
                    <form action="#" class="pt-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="nombre" class="form-label pt-3 mr-3">Nombre:</label>
                            <input id="title" type="text" class="" name="title" value="{{$usuario->name}}">
                        </div>

                        <div class="mt-1">

                            <label for="nombre" class="form-label pt-3 mr-3">Apellido:</label>
                            <input id="title" type="text" class="" name="lastname" value="{{$usuario->lastname}}">
                        </div>

                        <div class="mt-1 pt-3">
                            <label for="nombre" class="form-label pt-3 mr-3">Teléfono:</label>
                            <input id="title" type="text" class="" name="phone" value="{{$usuario->phone}}">
                        </div>
                        <div class="mt-1 mb-3 pt-2 align-items-center">
                            <label for="nombre" class="form-label pt-3 mr-3">Nivel de usuario:</label>
                            <input id="title" type="text" class="w-auto" name="level" value="{{$usuario->level}}">
                        </div>

                        <button class="btn btn-success" type="submit" name="button">
                            Actualizar
                        </button>
                        <button class="btn btn-info" type="reset" name="button">
                            Limpiar Campos
                        </button>

                        <form class="" action="/admin/usuarios/eliminar-usuario" method="post">
                              @csrf
                              <input type="hidden" name="id" value="{{$usuario->id}}">
                              <button type="submit" class="btn btn-danger" onclick="deleletconfig()">Dar de Baja</button>
                          </form>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
