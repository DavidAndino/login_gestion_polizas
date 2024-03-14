<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('styles/dashboard.css')}}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />
    <title>Página Principal Administrador</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user me-2"></i>Funder</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=""></i>Empleados</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=""></i>Usuarios</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=""></i>Roles</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=""></i>Asegurados</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=""></i>Polizas</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=""></i>Reportes</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=""></i>Copiar de base de datos</a>
                <a href="{{ route('login.destroy') }}" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Cerrar Sesión</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Ocultar</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Administrador
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li><a class="dropdown-item" href="#">Configuración</a></li>
                                <li><a class="dropdown-item" href="{{ route('login.destroy') }}">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-success me-md-4" type="button">Nuevo empleado</button>
                    <button class="btn btn-success me-md-4" type="button">Editar empleado</button>
                    <button class="btn btn-success me-md-4" type="button">Button</button>
                    <button class="btn btn-success me-md-4" type="button">Button</button>
                  </div>
                <!-- poner tabla -->
                <table class="table table-success table-striped table-bordered my-4" id="table-asegurados">
                    <thead>
                      <tr>
                        <th scope="col">DNI</th>
                        <th scope="col">Nombre Completo</th>
                        <th scope="col">Apellido Completo</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Estado Civil</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Lugar de Nacimiento</th>
                        <th scope="col">Tipo de Persona</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">6</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">7</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">8</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">9</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">10</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">11</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">12</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">13</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">14</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">15</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">16</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">17</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">18</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">19</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">20</th>
                        <td>Donaldo Josue</td>
                        <td>Rivera Martinez</td>
                        <td>Masculino</td>
                        <td>Soltero</td>
                        <td>07/10/1994</td>
                        <td>Marcala la Paz</td>
                        <td>Natural</td>
                        <td>29</td>
                        <td>fefef@gmail.com</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Acciones">
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                        </td>
                      </tr>
                     <tbody>
                      <!-- Agrega más filas según tus datos -->
                    </tbody>
                  </table>
               
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="../../Js/asegurado.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>