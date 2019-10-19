@extends('layout.app')

@section('titulo', 'Pagina principal')
    
@section('contenido')
    <div class="altura-100">
        <div id="carruselPrincipal" class="carousel slide fondo-blur" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carruselPrincipal" data-slide-to="0" class="active"></li>
                <li data-target="#carruselPrincipal" data-slide-to="1"></li>
                <li data-target="#carruselPrincipal" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/banner.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>primer slide</h5>
                        <p>...</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 " src="/2.svg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>segundo slide</h5>
                        <p>...</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/3.svg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>tercer slide</h5>
                        <p>...</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carruselPrincipal" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Atras</span>
            </a>
            <a class="carousel-control-next" href="#carruselPrincipal" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Adelante</span>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="espacio"></div>
        <div class="row">
            <div class="col-7">
                <div class="light row">
                    <h2 class="col-12 title">Noticias</h2>
                </div>
                <div class="noticias">

                </div>
                <div class="col-12">
                    <a href="/noticias">
                        <span class="col-12 title">Ver más noticias</span>
                    </a>
                </div>
            </div>
            <div class="col-5">
                <div class="light row">
                    <h2 class="col-12 title">Eventos</h2>
                </div>
                <div class="eventos">

                </div>
                <div class="col-12">
                    <a href="/eventos">
                        <span class="col-12 title">Ver más eventos</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
