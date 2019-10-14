@extends('layout.app')

@section('titulo', 'Pagina principal')
    
@section('contenido')
    <div class="altura-100">
        <div id="carruselPrincipal" class="carousel slide" data-ride="carousel">
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
@stop
