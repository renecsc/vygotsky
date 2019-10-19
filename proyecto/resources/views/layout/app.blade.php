<!DOCTYPE html>
<html lang="es">

    <head>
        <title>Colegio Vygotsky | @yield("titulo")</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/estilos.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
        <!-- Cabecera -->
        <header id="header" >  
                <!-- Barra de navegacion -->  
                <nav id="navbar" class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
                    <div class="container">                        
                        <img class="navbar-brand logo"  src="logo.png" href="/home" alt="">
                        <a class="navbar-brand" href="/home">Colegio Vygotsky</a>
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
                
            </div>
        </header>
        <!--<div class="espacio"></div>-->
        <main role="main" class="container col home">

            @yield("contenido")

        </main>
        <!-- Footer -->
        <footer class="page-footer font-small pt-4">

            <!-- Footer Links -->
            <div class="container text-center text-md-left">
        
            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3">
        
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6>
                <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                    consectetur
                    adipisicing elit.</p>
                </div>
                <!-- Grid column -->
        
                <hr class="w-100 clearfix d-md-none">
        
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                <p>
                    <a href="#!">MDBootstrap</a>
                </p>
                <p>
                    <a href="#!">MDWordPress</a>
                </p>
                <p>
                    <a href="#!">BrandFlow</a>
                </p>
                <p>
                    <a href="#!">Bootstrap Angular</a>
                </p>
                </div>
                <!-- Grid column -->
        
                <hr class="w-100 clearfix d-md-none">
        
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Enlaces</h6>
                <p>
                    <a href="#!">Your Account</a>
                </p>
                <p>
                    <a href="#!">Become an Affiliate</a>
                </p>
                <p>
                    <a href="#!">Shipping Rates</a>
                </p>
                <p>
                    <a href="#!">Ayuda</a>
                </p>
                </div>
        
                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none">
        
                <!-- Grid column -->
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contacto</h6>
                    <p>
                        <i class=" fa fa-home mr-3"></i>Camino a Zapallar Km. 0.65, Curicó</p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> contacto@vygotsky.cl</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> (75)-2322216 - 2336765 - (9)84759648
                    </p>
                </div>
                <!-- Grid column -->
        
            </div>
            <!-- Footer links -->
        
            <hr>
        
            <!-- Grid row -->
            <div class="row d-flex align-items-center">
        
                <!-- Grid column -->
                <div class="col-md-7 col-lg-8">
        
                <!--Copyright-->
                <p class="text-center text-md-left">© 2019 Copyright:
                    <a href="/home">
                    <strong> Centro Eduacional Vygotsky</strong>
                    </a>
                </p>
        
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 ml-lg-0">
        
                <!-- Social buttons -->
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">
                        <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/colegio.vygotsky">
                        <i class="fab fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://twitter.com/colegiovygotsky">
                            <i class="fab fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                        <i class="fab fa fa-linkedin"></i>
                        </a>
                    </li>
                    </ul>
                </div>
        
                </div>
                <!-- Grid column -->
        
            </div>
            <!-- Grid row -->
        
            </div>
            <!-- Footer Links -->
        
        </footer>
        <!-- Footer -->

    </body>



</html>