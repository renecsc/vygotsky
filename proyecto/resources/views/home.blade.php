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
                    <img class="d-block w-100" src="images/cover1.jpg" alt="First slide" >
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Academicos</h5>
                        <p>Ultima junta de profesores</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 " src="images/cover2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Inclusion, otro tipo de educacion</h5>
                        <p>Actividades extra Academicas</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/cover3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Diversidad</h5>
                        <p>Celebramos todos los evento en comunidad </p>
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

@section('media')
<div id="noticias">
    <h2><p>Noticias</p></h2>
    <div class="row">
    <div class="col-sm-4">    
        <div class="fb-page " data-href="https://www.facebook.com/Centro-Educacional-Vygotsky-113606376757391/" data-tabs="timeline" data-width="500" data-height="600" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/Centro-Educacional-Vygotsky-113606376757391/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Centro-Educacional-Vygotsky-113606376757391/">Centro Educacional Vygotsky</a>
            </blockquote>
        </div>
    </div>
    <div class="col-sm-6 ">
<div class="row">
        <div class="col-sm-6">
    <h2>Palabras de Nuestro Director </h2>
</div>
        <div class="col-sm-6">
            <div >
            <img id="administrativo" src="/images/director.jpg" alt="Avatar" width="200px" height="200px">
</div>
</div>
<div id="intro" class="container" />
    <h5><b>¿Cómo conversamos en tiempos de Whatsapps y Selfies ?</b></h5>
    <div class="contenido">
<p>
Querida comunidad escolar, durante el primer año de mi Post-grado en la universidad de  Talca el año 2003, presenté un trabajo que causó mucho debate, polémica y por qué no decirlo burlas entre los compañeros del magister. El trabajo se titulaba, “La acción comunicativa del Chat, una comunicación sin rostro”.  En ese trabajo mi idea central era la necesidad de plantear que una comunicación efectiva y real entre dos o más personas,  requiere del contacto visual y la verdadera identidad, eran claves para mantener el contenido del mensaje, como también la intención y las emociones involucradas en ello.  Quiero dejar muy en claro que bajo ningún motivo, mi idea era criticar o atacar el desarrollo y la utilización de la tecnología, sino más bien, declarar la intención de lucha por aquellos elementos que aportan un valor a la acción comunicativa que en ocasiones se pierde o distorsiona.
</p>
</div>
<div id="palabraDirector" class="contenido" >
<p>

Hoy, después de 15 años enfrentamos un desarrollo tecnológico descomunal y eso es un gran aporte a muchas áreas de la existencia humana, pero mantengo mis dudas sobre la efectividad de los mensajes, el contenido de estos y la transformación humana detrás de la tecnología.  
</p><p>
Queridas familias de nuestra comunidad escolar, hoy y mañana tenemos un gran desafío, ¿Cómo conversamos en tiempos de Whatsapps y Selfies?, ¿Cómo usamos y NO abusamos de la tecnología de las comunicaciones?, ¿Cómo recuperamos la empatía, sensibilidad y  evitamos la comunicación sin rosto?
</p><p>
Como Educadores y Educandos debemos dominar la tecnología y no dejarnos dominar por ella, debemos aprender a aprender, a interpretar y comprender  la lectura de los verdaderos códigos que están detrás de un mensaje, debemos empatizar y humanizar el desarrollo de estos elementos bajo esquemas de supervisión y control.  Sí, control, porque para aceptar una verdadera conquista tecnológica, debemos  universalmente aceptarla de manera consensuada, graduada y acompañada. No podemos dejar que un niño o niña interactúe primero con un dispositivo tecnológico antes de aprender a comunicarse con sus pares, debemos evitar que minimicen el lenguaje y procurar trabajar por ampliar el vocabulario, debemos conseguir que se emocionen y sorprendan con cosas cotidianas y todo lo que les rodea, bajo una acción contemplativa y constructiva. Debemos enseñarles a programar estos dispositivos y utilizar nuevos lenguajes, pero antes que nada, a lograr comunicarse entre pares con valores, dando énfasis al respeto.
</p><p>
Padres y madres, no busquen reemplazos, control  y compensaciones en la tecnología, recuerden que deben acompañar a sus hijos e hijas desde sus primeros pasos, sus primeras caídas, sus primeras luchas, sus primeras conquistas, sus logros, sus emociones, sus amores, sus tristezas  y alegrías. Enseñemos  a nuestros hijos vivir en comunidad, con participación y entrega por los demás. No busquen refugio ni comprensión en grupos de Whatsapps, salgan de sus estados de confort a trabajar por sus hijos, su tiempo es valioso e incuantificable, no importando la magnitud de sus hazañas o lo evidente de sus ausencias.
</p><p>
Tengo la esperanza que debemos recuperar la comunicación, aquella  que nos permite mirar a los ojos, sentir, interpretar, discrepar y perdonar.
</p><p><b>
#MáspapásmenosWhatsapps</b>
</p><p>
Luis Rodrigo Pérez Montero
</p><p>
Director Fundación Educacional Vygotsky
</p><p>
Magister en Política y Gestión Educacional 
</p>
</p>
</div>
<summary id="verMas"><a>ver más</a></summary>
<summary id="verMeno"><a>ver menos</a></summary>
</div>
</div>

</div> 
<script>
$(document).ready(function(){
    $("#palabraDirector").hide();
    $("#verMeno").hide();
    $("#verMas").click(function(){
        $("#palabraDirector").show();
        $("#verMas").hide();
        $("#verMeno").show();
    });
    
    
    $("#verMeno").click(function(){
        $("#palabraDirector").hide();
        $("#verMeno").hide();
        $("#verMas").show();
    });
});
</script>

@stop
