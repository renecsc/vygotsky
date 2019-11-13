<!--Se crea el menu de navegación superior estático -->

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
        <link rel="shortcut icon" href="logo.png"/>
    </head>

    <body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v5.0&appId=576015375838054&autoLogAppEvents=1"></script>
        <!-- Cabecera -->
        <header id="header" >  
             
                <nav id="navbar" class="navbar navbar-expand-lg fixed-top bg-light border  navbar-light">
                    <div id="cabecera" class="container">                        
                        <img class="navbar-brand logo"   src="logo.png" href="/home" alt="">
                        <a class="navbar-brand" href="/home"><p class="titulo">Colegio Vygotsky</p></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="navbar" class="collapse navbar-collapse">
                            <ul class="navbar-nav ">
                                <li class="nav-item active titulos">
                                    <a class="nav-link" href="/inicio">Noticias</a>
                                </li>
                                <li class="nav-item active titulos">
                                    <a class="nav-link" href="/proyecto">Proyecto Educativo</a>
                                </li>
                                <li class="nav-item active titulos">
                                    <a class="nav-link" href="#">Admisión</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link titulos" href="#">Documentos Institucionales</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                
            </div>
        </header>
        <!--<div class="espacio"></div>-->
        <main role="main" class="container col home" >
           @yield("contenido")
            @yield("media")   
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
                <h6 class="text-uppercase mb-4 font-weight-bold">Menu</h6>
                <p>
                    <a href="https://www.sistemadeadmisionescolar.cl/" target="_blank">Admisión Escolar</a>
                </p>
                <p>
                    <a href="#!">Galería de Imágenes</a>
                </p>
                <p>
                    <a href="javascript:openit(1)" >Guía de Padres para Ciberbullyng</a>
                    <div id="anuncio" style="right:30%;top:15%;align-text:center; position: fixed; z-index:100;text-align:center;visibility:hidden"> 
                            <div align="center" style="margin-bottom:-30px;"> 
                            <a href="javascript:closeit(1)"><font face="Courier" size="1">#CERRAR</font></a> 
                            </div> 
                            <br /> 
                            <iframe width="480" height="320"
                                src="https://www.youtube.com/embed/0r3owGHbUJ8?controls=1">
                                </iframe> 
                            </div> 

                            <div class="clear"> 
                    </div>
                    
                </p>
                <p>
                    <a href="javascript:openit(2)">Plan Familia Preparada</a>
                    <div id="anuncio_familia" style="right:30%;top:15%; position: fixed; z-index:100;text-align:center;visibility:hidden"> 
                            <div align="center" style="margin-bottom:-30px;"> 
                            <a href="javascript:closeit(2)"><font face="Courier" size="1">#CERRAR</font></a>
                            
                            </div> 
                            <br /> 
                            <iframe width="480" height="320"
                                src="https://www.youtube.com/embed/jtYB3HFaEvc?controls=1">
                                </iframe> 
                            </div> 

                            <div class="clear"> 
                    </div>
                    <script type="text/javascript"> 
                        //<![CDATA[ 

                        anuncio = document.getElementById("anuncio");
                        familia = document.getElementById("anuncio_familia");
                        function closeit(opcion){
                            if(opcion==1){
                                anuncio.style.visibility = "hidden";
                            }
                            if(opcion==2){
                                familia.style.visibility= "hidden";
                            } 
                         
                        } 
                        function openit(opcion){
                            if(opcion==1){
                                closeit(2);
                                anuncio.style.visibility = "visible";
                            
                            }
                            if(opcion==2){
                                closeit(1);
                                familia.style.visibility="visible";
                                
                            }
                        }
                        //]]> 
                    </script>
                
                </p>
                </div>
                <!-- Grid column -->
        
                <hr class="w-100 clearfix d-md-none">
        
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Link de Interés</h6>
                <p>
                    <a href="http://fullcollege.net/consulta/" target="_blank">Acceso a FullCollege</a>
                </p>
                <p>
                    <a href="http://www.simce.cl/ficha2017/?lista=1&rbd=16509&establecimiento=COLEGIO+CENTRO+EDUCACIONAL+VYGOTSKY&region=0&comuna=0" target="_blank">Resultados Simce 2017 </a>
                </p>
                <p>
                    <a href="#!">Inicio de ACLES y Reforzamientos</a>
                </p>>
                </div>
        
                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none">
        
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-5 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contacto</h6>
                <p>
                    <i class=" fa fa-home mr-3"></i>Camino a Zapallar Km. 0.65, Curicó</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> contacto@vygotsky.cl</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> (75)-2322216 - 2336765 - (9)84759648</p>
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
                        <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/colegio.vygotsky" target="_blank">
                        <i class="fab fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
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