<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mipostit!</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
  <body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom text-bg-dark">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex text-decoration-none marca logo">
          Mipostit!
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 ">
        <li><a href="#" class="nav-link px-2 text-white">Inicio</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Proyecto</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Contacto</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Preguntas</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#modalRegistro">Registrate</button>
      </div>
    </header>
    <div class="container">
        <div class="col-md-5 mx-auto">
            <h1 class="text-center"><span class="marca">¡</span>Organiza tus tareas de manera sencilla y gratuita con <span class="marca">Mipostit!</span></h1>
            <div class="text-justify">
                <p>Imagina tener un mundo de post-it virtuales a tu disposición para mantener tus proyectos en orden.</p>
                <p>Con Mipostit, puedes crear, mover y actualizar tus tareas con facilidad.</p>
                <p>Desde proyectos personales hasta colaboraciones de equipo, Mipostit es la herramienta que necesitas para mantenerte organizado(a) y productivo(a).</p>
                <p>¡Y lo mejor de todo es que es completamente GRATIS! Únete a nuestra comunidad de usuarios satisfechos y descubre cómo hacer que tus tareas sean más manejables y gratificantes.</p>
                <p>Regístrate en Mipostit hoy mismo y comienza a liberar tu potencial.</p>
            </div>
        </div>
    </div>
    <div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card post-it">
        <div class="card-header">
          <button type="button" class="close" data-dismiss="card" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="card-body">
          <h5 class="card-title">Chiste #1</h5>
          <p class="card-text">¿Qué hace una abeja en el gimnasio? ¡Zum-ba!</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card post-it">
        <div class="card-header">
          <button type="button" class="close" data-dismiss="card" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="card-body">
          <h5 class="card-title">Chiste #2</h5>
          <p class="card-text">¿Cómo se llama el campeón de buceo japonés? Tokofondo.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card post-it">
        <div class="card-header">
          <button type="button" class="close" data-dismiss="card" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="card-body">
          <h5 class="card-title">Chiste #3</h5>
          <p class="card-text">¿Por qué los pájaros no usan Facebook? Porque ya tienen Twitter.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Modal login-->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="modalLogin" aria-hidden="true">
      <div class="modal-dialog color-borde">
        <div class="modal-content">
          <div class="modal-header color-secundario">
            <h1 class="modal-title fs-5" id="loginModal">Logueate en <span class="marca">Mipostit!</span></h1>
            <span class="material-icons close" data-bs-dismiss="modal" aria-label="Close">disabled_by_default</span>
          </div>
          <div class="modal-body color-secundario">
          <form class="mt-3" action="" method="post">
              <div class="row">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Ej. juan.perez@gmail.com" required>
                </div>                
              </div>
              <div class="row">
                <div class="mb-3">
                  <label for="pwd" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="pwd" name="pwd" required>
                </div>
              </div>
              <div class="row mt-5 mx-1">
                <button type="submit" class="btn btn-primary">Ingresar</button>
                <a class="text-center mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Me olvide la contraseña</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<!--Modal Registrar-->
<div class="modal fade" id="modalRegistro"" tabindex="-1" aria-labelledby="modalRegistro" aria-hidden="true">
      <div class="modal-dialog color-borde">
        <div class="modal-content">
          <div class="modal-header color-secundario">
            <h1 class="modal-title fs-5" id="modalRegistroLabel">Registrate en <span class="marca">Mipostit!</span></h1>
            <span class="material-icons close" data-bs-dismiss="modal" aria-label="Close">disabled_by_default</span>
          </div>
          <div class="modal-body color-secundario">
            <p>Completa tu registro llenando tus datos</p>
            <p>Es rápido y fácil.</p>
            <form class="mt-3" action="" method="post">
              <div class="row">
                <div class="col mb-3">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej. Juan" required>
                </div>
                <div class="col mb-3">
                  <label for="apellido" class="form-label">Apellido</label>
                  <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ej. Perez" required>
                </div>
              </div>
              <div class="row">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Ej. juan.perez@gmail.com" required>
                </div>                
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="pwd" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" required>
                  </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                      <label for="pwd2" class="form-label">Confirmar contraseña</label>
                      <input type="password" class="form-control" id="pwd2" name="pwd2" required>
                    </div>
                </div>
              </div>
              <div class="row mt-5 mx-1">
                <button type="submit" class="btn btn-primary">Registrar</button>
                <a class="text-center mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Ya tengo una cuenta</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>