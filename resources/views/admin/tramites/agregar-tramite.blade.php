@extends('layouts.dashboard')

@section('css')

<link rel="stylesheet" href="../../css/dashboard.css">
@endsection

@section('admin-section')
/ Agregar trámites
@endsection
@section('title')
Agregar trámites
@endsection


@section('main')
<div class="row justify-content-md-center">
<div class="col-xl-6 col-sm-6 p-2 mt-5">
    <div class="card card-common">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <i class="fas fa-file-alt fa-3x text-info"></i>
                <h1 class="text-center text-secondary"><span>Agregar trámite</span></h1>
            </div>
            <div class="text-left text-secondary pt-3">
                <form action="/agregar-tramite" class="pt-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="nombre" class="form-label pt-3 mr-3">Nombre del archivo:</label>
                        <input id="title" type="text" class="form-input @error('title') is-invalid @enderror" name="title" placeholder="Título" value="{{ old('title') }}" autofocus required>
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mt-1">

                        <label for="nombre" class="form-label pt-2" style="width:100%;">Agregar descripción:</label>

                        <textarea id="description" style="width:95%;" class=" @error('description') is-invalid @enderror"
                        name="description" placeholder="Agrega una descripción o información adicional del trámite" value="{{ old('description') }}" autofocus required></textarea>
                        @error ('description')

                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mt-1 pt-3" style="width:100%">

                        A cuál municipio pertenece?:
                        <select class="  @error('muni') is-invalid @enderror" name="muni" id="muni">

                        @foreach ($munis as $muni)

                        <option value="{{$muni->id}}" {{$muni->id == old('muni') ? "selected": ""}}>{{$muni->name}}</option>
                        @endforeach>
                            </select>
                            @error('municipio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    <div class="mt-1 mb-3 pt-2 align-items-center" id="file">
                        <p class="info"><br>Seleccioná el archivo que vas a subir. <br>
                        <b>El archivo no debe superar los 5Mb de tamaño </b></p>

                        <input id="file" class="file @error('file') is-invalid @enderror" type="file" name="file" value= "{{ old('file') }}">
                        @error('file')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button class="btn btn-info" type="submit" name="button">
                        {{ __('Guardar') }}
                    </button>
                    <button class="btn btn-info" type="reset" name="button">
                        {{ __('Limpiar Campos') }}
                    </button>


                </form>

            </div>

        </div>
    </div>
</div>
</div>

@endsection
