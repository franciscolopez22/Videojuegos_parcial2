<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">The Pou's Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Juegos
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="registrarDatos.php">Registrar</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="consultarJuegos.php">Consultar</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Juegos Proximos
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="registrarDatosProximos.php">Registrar</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="consultarJuegosProximos.php">Consultar</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="GET" action="resultadoBusqueda.php">
        <input name="termino" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>