<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mipostit!</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom text-bg-dark">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex text-decoration-none marca logo">
          Mipostit!
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 ">
        <li><a href="#" class="nav-link px-2 text-white"><i class="bi bi-columns"></i> Mis Tableros</a></li>
        <li><a href="#" class="nav-link px-2 text-white"><i class="bi bi-people-fill"></i> Colaboraciones</a></li>
        <li><a href="#" class="nav-link px-2 text-white"><i class="bi bi-bell-fill"></i> Notificaciones</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 ">
            <li class="nav-item dropdown">
            <a class="nav-link px-2 text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i> Usuario
            </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person-lines-fill"></i> Perfil</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-power"></i> Cerrar sesión</a></li>
                </ul>
            </li>
        </ul>
      </div>
    </header>
    <!--lista de tableros -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card post-it shadow">
                    <div class="card-body">
                        <h5 class="card-title">Bienvenido!!</h5>
                        <p class="card-text">Te cuento lo que me contó un pajarito, pronto podrás invitar personas externas al proyecto para que vean tus tableros</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row ">
                    <div class="col titulo">Estos son tus tableros</div>
                    <div class="col titulo text-end">
                        <button class="btn btn-success"><i class="bi bi-plus-square"></i> Nuevo Tablero</button>
                    </div>
                </div>
                <table class="table table-striped table-hover mt-3 shadow">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">Nombre del Tablero</th>
                        <th scope="col">Cantidad de Tareas</th>
                        <th class="text-end"scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Tablero 1</td>
                        <td>5</td>
                        <td class="text-end">
                            <button class="btn btn-success"><i class="bi bi-door-open"></i></button>
                            <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                        </tr>
                        <tr>
                        <td>Tablero 2</td>
                        <td>8</td>
                        <td class="text-end">
                            <button class="btn btn-success"><i class="bi bi-door-open"></i></button>
                            <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                        </tr>
                        <!-- Agrega más filas según tus necesidades -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>