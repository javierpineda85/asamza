@extends('layouts.dashboard')

@section('css')
<link rel="stylesheet" href="../../css/dashboard.css">
@endsection

@section('title')
Panel de Control
@endsection

@section('admin-section')
/ Listado de usuarios
@endsection

@section('main')
<section class="mt-5">
    <div class="buscar d-flex bg-light ml-auto">
        <div class="row m-auto">
            <form class="" action="/listado-de-usuariosPorMail" method="get">
                @csrf
                <div class="input-group">
                    <span><i class="fas fa-search text-danger mt-2"></i></span>
                    <input type="text" class="form-control search-input" name="email" value="" placeholder="Buscar por email">
                </div>
            </form>
            <form class="" action="/listado-de-usuariosPorApellido" method="get">
                @csrf
                <div class="input-group">
                    <span><i class="fas fa-search text-danger mt-2"></i></span>
                    <input type="text" class="form-control search-input" name="lastName" value="" placeholder="Buscar por apellido">
                </div>
            </form>
        </div>
        <button class="btn btn-info" type="reset" name="button"> <a href="/admin/usuarios/listado-de-usuarios">Listar todo</a></button>
    </div>
    <h3 class="text-muted text-center mb-3 mt-3">Listado de Usuarios</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr class="text-muted">
                <!--<th class="hidden">Id</th> -->
                <th>Apellido y Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Privilegios</th>
                <th>Actualizar</th>
                <!-- <th>Eliminar</th> -->
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <!--<th class="hidden"> {{$usuario->id}}</th> -->
                <td> {{$usuario->lastname}} {{$usuario->name}}</td>

                <td>{{$usuario->email}} </td>
                <td> {{$usuario->phone}}</td>
                <td> {{$usuario->level}}</td>
                <td><button class="btn btn-info btn-secondary"> <a href="/admin/usuarios/modificar-usuario-{{$usuario->id}}">Actualizar</a></button> </td>

            </tr>
            @endforeach

        </tbody>
    </table>
    <!-- pagination  -->

    {{$usuarios->links()}}

    <!-- pagination  -->



    <!-- modal -->
    <div class="modal fade" id="modificar-users">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Qué deseas realizar?</h4>
                    <button type="button" name="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    Presiona modificar para actualizar sus datos o <br>
                    eliminar para borrar permanentemente de la base de datos.

                </div>
                <div class="modal-footer">
                    <button type="button" name="button" class="btn btn-info" data-dismiss="modal">Continar</button>
                    <button type="button" name="button" class="btn btn-danger" data-dismiss="modal">Borrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
</section>

@endsection
