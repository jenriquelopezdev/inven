<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#243f59!important;">
  <a class="navbar-brand" href="#">Inventario</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('inicio')}}">Inicio <i class="fa fa-home"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('equipos')}}">Equipos <i class="fa fa-laptop"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('impresoras')}}">Impresoras <i class="fa fa-print"></i></a>
      </li>


    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-user-circle"></i> {{Auth::user()->name}}
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <form method="post">
            <a class="dropdown-item" href="{{url('logout')}}">Cerrar sesión</a>
          </form>
        </div>
      </li>
    </ul>
  </div>
</nav>

{{-- @include('admin.catalogosAjax.ubicaciones') --}}
