<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap" rel="stylesheet">
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
        <button type="button" class="btn btn-success me-2">Login</button>
        <button type="button" class="btn btn-primary me-2">Registrate</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>