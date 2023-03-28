<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--custom css-->
  </head>
  <body>
      <div class="container-fluid">
        <div class="row">
          <!-- Sidebar -->
          <form class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; height: 100vh;">
            <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
              <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
              <span class="fs-4">Storecontrol</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="/buscar" class="nav-link text-white {% if request.path == '/buscar' %}active{% endif %}">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                  Buscar
                </a>
              </li>
              <li class="nav-item">
                <a href="/add_producto" class="nav-link text-white {% if request.path == '/add_producto' %}active{% endif %}">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                  Agregar Producto
                </a>
              </li>
              <li class="nav-item">
                <a href="/add_empleado" class="nav-link text-white {% if request.path == '/add_empleado' %}active{% endif %}">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                  Registrar Empleado
                </a>
              </li>
              <li class="nav-item">
                <a href="/lista_empleados" class="nav-link text-white {% if request.path == '/lista_empleados' %}active{% endif %}">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                  Empleados Registrados
                </a>
              </li>
            </ul>
            <hr>
            <div class="dropdown">
              <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <strong>Opciones</strong>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="/login">Log out</a></li>
              </ul>
            </div>
          </form>
          <!-- Contenido principal -->
          <div class="col">
          @yield('content')
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>