@extends('layouts.plantilla')

@section('css')
<link rel="stylesheet" href="../../css/styleTramitesMuni.css">
@endsection

@section('title')
Trámites de {{$munis->name}}
@endsection

@section('js')
<script type="text/javascript" src="../../js/tramites.js">

</script>
@endsection

@section('main')
<div class="muni">

    <div class="banner-standard bg-muni mb-0">
        <h2 class="banner-texto-standard titulos-naranja"><span>TRAMITES DE {{$munis->name}}</span></h2>
    </div>
    <div class="secciones max-width bg-image py-5">
        {{-- <section class="seccionesmuni"> --}}
        @foreach ($tramites as $tramite)
        <ul>
            <section class="seccionesmuni">
                <li>
                    

                    <p>
                        <a href="/file/download/{{$tramite->file}}/{{$tramite->title}}"> {{$tramite->title}} </a>

                    </p>
                    <p>{{$tramite->description}}</p>


                </li>
        </ul>
        @endforeach
        </section>
    </div>
</div>
@endsection
