<!--Se crea el menu de navegación superior estático -->

<!DOCTYPE html>
<html lang="es">

    <head>
        <title>Colegio Vygotsky | @yield("titulo")</title>
        <meta charset="iso-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/estilos.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    </head>

    <body>
        <nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Vygotsky</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Noticias</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Proyecto Educativo</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Admisión</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Documentos Institucionales</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="espacio"></div>
        <main role="main" class="container">

            @yield("contenido")

        </main>

    </body>

</html>