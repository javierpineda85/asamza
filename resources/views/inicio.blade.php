@extends('layouts.plantilla')

@section('analytics')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148376301-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-148376301-1');
</script>
@endsection

@section('css')

<link rel="stylesheet" href="../../css/style-header.css">

@endsection


@section('title')
Inicio
@endsection


@section('main')

<section id="slider">


    <div class="bd-example position-relative bg-dark">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active m-x-auto centered-img">
                    <img src="img/slider/slider-.jpg" class="d-block contain" alt="...">
                    <div class="carousel-caption d-md-block montserrat centered">
                        <h5 class="content-orange">ASOCIACION SOLIDARIA DE ARQUITECTOS</h5>
                        <p>Construimos la casa... tú la conviertes en tu hogar.</p>
                    </div>
                </div>

                <div class="carousel-item m-x-auto centered-img">
                    <img src="img/slider/slider-2.jpg" class="d-block contain" alt="...">
                    <div class="carousel-caption d-md-block montserrat centered">
                        <h5 class="content-orange">CAPACITACIONES</h5>
                        <p>Porque sabemos que es importante estar siempre capacitado, es que ofrecemos este espacio para que puedas invertir en tu futuro. Mirá los cursos que A.S.A Mendoza tiene para ofrecerte.</p>
                        <a class="btn cta" href="/capacitaciones">Ver mas »</a>
                    </div>
                </div>

                <div class="carousel-item m-x-auto centered-img">
                    <img src="img/slider/slider-3.jpg" class="d-block contain" alt="...">
                    <div class="carousel-caption d-md-block montserrat centered">
                        <h5 class="content-orange">MUNICIPALIDADES</h5>
                        <p>Accedé a la guía completa de trámites por municipios. Además podés descargar toda la documentación necesaria desde aquí.</p>
                        <a class="btn cta" href="/municipalidades">Ver mas »</a>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<div class="inicio">

    <div class="container-fluid jumbotron pb-0 mb-0">
        <div class="row montserrat text-center font-small">
            <div class="col-md-6 capacitacion container-contacto">
                <h2 class="bg-orange color-white">CAPACITACIONES</h2>
                <p>
                    Porque nos interesa tu futuro, y queremos ayudarte a crecer. <br> Conocé los cursos que tenemos para ofrecerte
                </p>
                <p>
                    <a class="btn" href="/capacitaciones">Ver mas »</a>
                </p>
            </div>


            <div class="col-md-6 muni container-contacto">
                <h2 class="bg-black color-white">MUNICIPALIDADES</h2>
                <p>
                    Accedé a la guía completa de trámites por Municipalidades. <br> Además encontrarás un organigrama para ayudarte a completar los trámites
                </p>
                <p>
                    <a class="btn" href="/municipalidades">Ver mas »</a>
                </p>
            </div>
            <div class="col-md-6 proyectos container-contacto">
                <h2 class="bg-orange color-white">PROYECTOS</h2>
                <p>
                    Estamos en constante movimiento. Conocé más sobre nuestros proyectos. <br> También podés sumarte a ellos.
                </p>
                <p>
                    <a class="btn" href="/proyectos">Ver mas »</a>
                </p>
            </div>


            <div class="col-md-6 nosotros container-contacto">
                <h2 class="bg-black color-white">NOSOTROS</h2>
                <p>
                    Somos una organización sin fines de lucro. Conocénos un poco mas.
                </p>
                <p>
                    <a class="btn" href="/nosotros">Ver mas »</a>
                </p>
            </div>

            <div class="col-md-6 proyectos container-contacto">
                <h2 class="bg-orange color-white">TRAMITES ONLINE</h2>
                <p>
                    Podés acceder desde aca al Colegio de Arquitectos <br> o a la Caja previsional.
                </p>
                <p>
                    <a class="btn" href="/tramites-online">Ver mas »</a>
                </p>
            </div>


            <div class="col-md-6 nosotros container-contacto">
                <h2 class="bg-black color-white">NOTICIAS</h2>
                <p>
                    Enterate de las últimas novedades. Mirá las noticias desde aquí.
                </p>
                <p>
                    <a class="btn" href="#">Ver mas »</a>
                </p>
            </div>


        </div>
    </div>


</div>
<!--_____________________SECCIONES ESTATICAS-->
<!-- <section class="d-flex align-content-center flex-wrap container-fluid w-100 text-white bg-black p-3 m-auto align-items-center">
    <h2 class="m-auto"><span class="color-orange">2x1</span> en cursos!!!</h2>
</section>

<section class="d-flex container-fluid w-100 text-white bg-dark p-3 m-auto align-items-center">
    <div class="m-auto col-12 col-md-6" style="background: none;">
        <img src="img/tarjetas.png" width="100%" alt="tarjetas">
    </div>
</section> -->

@endsection
