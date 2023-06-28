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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
  <body>

    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom text-bg-dark">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex text-decoration-none marca logo">
          Mipostit!
        </a>
      </div>
<span class="marca logo">M!</span> 
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 ">
        <li><a href="#" class="nav-link px-2 text-white">Inicio</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Proyecto</a></li>
        <li><a href="#" class="nav-link px-2 text-warning">Contacto</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Preguntas</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-success me-2">Login</button>
        <button type="button" class="btn btn-primary me-2">Registrate</button>
      </div>
    </header>
    <div class="container">
        <div class="col-md-10 mx-auto">
            <div >
                <p class="text-justify"><span class="marca">Mipostit!</span> fue creado como mi proyecto final para el curso de Fullstack PHP de Codo a Codo. Me complace compartir que este proyecto es el resultado de mi dedicación y esfuerzo durante el curso. Utilizando mis conocimientos en desarrollo web, diseñé y desarrollé Mipostit, una aplicación web basada en un tablero Kanban con post-it virtuales. Este proyecto demuestra mi capacidad para aplicar conceptos y herramientas de PHP, así como mi pasión por la programación. Estoy orgulloso(a) de haber completado este proyecto y haberlo utilizado como una oportunidad para aprender y crecer en mis habilidades de desarrollo web.</p>
                <p>En mi proyecto Mipostit, estoy utilizando una combinación de tecnologías para crear una aplicación web funcional y atractiva. Estas son algunas de las tecnologías clave que estoy utilizando:</p>
            </div>
        </div>
    </div>


    <div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card post-it shadow">
      <div class="card-header">
          <span class="material-icons close">disabled_by_default</span>
        </div>
        <div class="card-body">
          <h5 class="card-title"><strong>HTML:</strong></h5>
          <p class="card-text">Utilizo HTML para estructurar y organizar el contenido de mi aplicación web. Con HTML, puedo definir la estructura de las páginas y los elementos que componen mi tablero Kanban con post-it virtuales.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card post-it shadow">
      <div class="card-header">
          <span class="material-icons close">disabled_by_default</span>
        </div>
        <div class="card-body">
          <h5 class="card-title"><strong>CSS:</strong></h5>
          <p class="card-text">Para dar estilo y personalizar la apariencia de Mipostit, utilizo CSS. Con CSS, puedo definir colores, fuentes, diseños y otros aspectos visuales para mejorar la presentación de mi aplicación.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card post-it shadow">
        <div class="card-header">
          <span class="material-icons close">disabled_by_default</span>
        </div>
        <div class="card-body">
          <h5 class="card-title"><strong>Bootstrap:</strong></h5>
          <p class="card-text">Estoy aprovechando el framework Bootstrap para facilitar el diseño y la responsividad de Mipostit. Bootstrap me brinda una serie de componentes y estilos predefinidos que puedo utilizar para crear interfaces atractivas y adaptativas.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card post-it shadow">
        <div class="card-header">
          <span class="material-icons close">disabled_by_default</span>
        </div>
        <div class="card-body">
          <h5 class="card-title"><strong>JavaScript:</strong></h5>
          <p class="card-text">Utilizo JavaScript para agregar interactividad y funcionalidad a mi aplicación web. Con JavaScript, puedo implementar características como arrastrar y soltar los post-it, guardar el estado de los tableros, y realizar acciones dinámicas en respuesta a la interacción del usuario.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card post-it shadow">
        <div class="card-header">
          <span class="material-icons close">disabled_by_default</span>
        </div>
        <div class="card-body">
          <h5 class="card-title"><strong>PHP:</strong></h5>
          <p class="card-text">Estoy utilizando MySQL como sistema de gestión de bases de datos relacional para almacenar y administrar la información de los post-it en mi proyecto Mipostit. MySQL me permite realizar consultas y operaciones eficientes en la base de datos, lo que garantiza un almacenamiento seguro y una recuperación rápida de los datos.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card post-it shadow">
        <div class="card-header">
          <span class="material-icons close">disabled_by_default</span>
        </div>
        <div class="card-body">
          <h5 class="card-title"><strong>MySQL:</strong></h5>
          <p class="card-text">Estoy utilizando MySQL como sistema de gestión de bases de datos relacional para almacenar y administrar la información de los post-it en mi proyecto Mipostit. MySQL me permite realizar consultas y operaciones eficientes en la base de datos, lo que garantiza un almacenamiento seguro y una recuperación rápida de los datos.</p>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>