<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Personal CSS -->

    <link rel="stylesheet" href="../../css/dashboard.css">
    @yield('css')

    <!--Icono -->
    <link rel="shortcut icon" href="img/faviconasa.ico">

    <!--FontAwesome -->
    <script src="https://kit.fontawesome.com/7907a05fb3.js"></script>
    @yield('js')

</head>

<body>
    <header>
      <!-- navbar -->
      <nav class="navbar navbar-expanded-md navbar-expand-lg navbar-light">
        <button class="navbar-toggler ml-auto mb-2 bg-light"class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation" >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
          <div class="container-fluid">
            <div class="row">
              <!-- sidebar -->
              <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top" style="min-width: 250px;">
                <a class="navbar-brand text-white d-block text-center py-03 mb-4 bottom-border"href="/"><img src="../../img/asalogo2.png" alt="asa" width="50px" border-radius="50%" class="mt-3 mb-3"></a>

                <div class="bottom-border mb-4 align-items-center ">

                  @if (Auth::check())
                  <label class="usuario text-light justify-content-center">
                    @if(Auth::user()->avatar !=null)
                      <img src="storage/{{Auth::user()->avatar}}" alt="" width="40px" border-radius="50%">
                    @else
                      <span><i class=" fas fa-user text-light fa-lg mr-3"></i></span>
                    @endif

                      ¡Hola <b>{{Auth::user()->name}}</b>!

                  </label>
                  @endif

                </div>
                <ul class="navbar-nav flex-column mt-4">
                  <li class="nav-item"> <a href="/admin/admin" class="nav-link text-white p-3 mb-2 current"> <i class=" fas fa-home text-light fa-lg mr-3"></i>Panel de Control</a> </li>
                  <li class="nav-item"> <a href="/admin/tramites/gestion-de-tramites" class="nav-link text-white p-3 mb-2 sidebar-link"> <i class=" fas fa-file-alt text-light fa-lg mr-3"></i>Trámites</a></li>
                  <li class="nav-item"> <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"> <i class=" fas fa-globe-americas text-light fa-lg mr-3"></i>Noticias </a></li>
                  <li class="nav-item"> <a href="/admin/usuarios/listado-de-usuarios" class="nav-link text-white p-3 mb-2 sidebar-link"><i class=" fas fa-users text-light fa-lg mr-3"></i>Usuarios</a></li>
                  <li class="nav-item"> <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"> <i class=" fas fa-book-reader text-light fa-lg mr-3"></i>Capacitaciones</a> </li>

                </ul>
              </div>
              <!-- end sidebar -->

              <!-- top navbar -->
              <div class="col-xl-10 col-lg-9 col-md-8 ml-auto fixed-top py-2 top-navbar">
                <div class="row align-items-center">
                  <div class="col-md-8">
                    <h4 class="text-light mb-0 ml-4">PANEL DE CONTROL @yield('admin-section')</h4>
                  </div>

                  <div class="col-md-3">
                    <ul class="navbar-nav">

                      <li class="nav-item ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                    </ul>
                  </div>

                </div>

              </div>
              <!-- end top navbar -->
            </div>

          </div>
        </div>
      </nav>

      <!--end  navbar -->


      <!-- modal -->
      <div class="modal fade" id="sign-out">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Deseas cerrar sesión?</h4>
              <button type="button" name="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              Presiona cerrar sesión para salir
            </div>
            <div class="modal-footer">
              <button type="button" name="button" class="btn btn-success" data-dismiss="modal">Permanecer</button>
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
    </header>

    <main>
      <div class="container-fluid ">
        <div class="row justify-content-md-center">
          <div class="col-xl-9 col-lg-9 col-md-8 ml-auto">

            @yield('main')

          </div>
        </div>
      </div>

    </main>


</body>

</html>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/up.js"></script>
