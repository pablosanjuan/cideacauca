<!DOCTYPE html>
  <html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/estilos.css"  media="screen,projection"/>
      <!--..........metas............-->
      <title>CIDEA Cauca</title>
      <meta property="og:title" content="CIDEA Cauca" />
      <meta property="og:type" content="article" />
      <meta property="og:url" content="http://www.cideacauca.com.co" />
      <meta property="og:image" content="http://cideacauca.com.co/images/CIDEA.png" />
      <meta property="og:description" content="CIDEA Cauca. Comité Técnico Interinstitucional de Eduación Ambiental" />
      <meta itemprop="name" content="CIDEA Cauca">
      <meta itemprop="description" content="Yo ya estoy jugando Carrera Política y tu?">
      <meta itemprop="image" content="http://cideacauca.com.co/images/CIDEA.png">
      <meta name="twitter:image" content="http://cideacauca.com.co/images/CIDEA.png">
      <!--..........FavIcons............-->
      <link rel="icon" type="image/ico" sizes="16x16" href="http://cideacauca.com.co/images/favicon/favicon16.png">
      <link rel="icon" type="image/ico" sizes="32x32" href="http://cideacauca.com.co/images/favicon/favicon32.png">
      <link rel="icon" type="image/ico" sizes="48x48" href="http://cideacauca.com.co/images/favicon/favicon32.png">
      <link rel="icon" type="image/ico" sizes="64x64" href="http://cideacauca.com.co/images/favicon/favicon64.png">
      <link rel="icon" type="image/ico" sizes="128x128" href="http://cideacauca.com.co/images/favicon/favicon128.png">

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    </head>

<body onload="initialize(), Materialize.showStaggeredList('#opciones-nav')">
<!-- ................   INICIALIZACION DE FACEBOOK   ........................-->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=863470693719288";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<!-- ................   NAVIGATION BAR   ........................-->
  <nav id="barra-nav" class="navbar-fixed" style="margin-bottom:10px;">
    <div class="nav-wrapper be-black z-depth-4">
      <a href="index.html" class="hide-on-med-and-down brand-logo"><img src="images/cidea.png" width="50%"></a>
      <a href="index.html" class="hide-on-large-only brand-logo hidden"><img src="images/cidea_movil.png" width="50%"></a>
      <a href="index.hmtl" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down" id="opciones-nav">
        <li class="divider-vertical-second-menu"></li><li><a class="animation-nav active-nav" href="index.php">Inicio</a></li>
        <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="nosotros.php">Nosotros</a></li>
        <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="documentos.php">Documentos</a></li>
        <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="experiencias.php">Experiencias</a></li>
        <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="redecam.php">Redecam</a></li>
        <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="contacto.php">Contacto</a></li>
      </ul>
      <!-- ................  MOBILE NAVIGATION BAR   ........................-->
      <ul class="side-nav" id="mobile-demo">
        <li><a class="mobile-item-nav" href="index.php">Inicio</a></li>
        <li><a class="mobile-item-nav" href="nosotros.php">Nosotros</a></li>
        <li><a class="mobile-item-nav" href="documentos.php">Documentos</a></li>
        <li><a class="mobile-item-nav" href="experiencias.php">Experiencias</a></li>
        <li><a class="mobile-item-nav" href="redecam.php">Redecam</a></li>
        <li><a class="mobile-item-nav" href="contacto.php">Contacto</a></li>
      </ul>
    </div>
  </nav>
<!-- ................   FLOATING BUTTOM   ........................-->
  <div class="fixed-action-btn hide-on-med-and-down" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large">
      <i class="material-icons">reorder</i>
    </a>
    <ul>
      <li><a class="btn-floating" alt="Nosotros" href="index.html"><i class="material-icons">store</i></a></li>
      <li><a class="btn-floating red" alt="Nosotros" href="nosotros.html"><i class="material-icons">supervisor_account</i></a></li>
      <li><a class="btn-floating blue" alt="Documentos" href="docuemntos.html"><i class="material-icons">description</i></a></li>
      <li><a class="btn-floating green" alt="Experiencias" href="experiencias.html"><i class="material-icons">loyalty</i></a></li>
      <li><a class="btn-floating green" alt="Redecam" href="redecam.html"><i class="material-icons">loyalty</i></a></li>
      <li><a class="btn-floating yellow darken-1" alt="Contacto" href="contacto.html"><i class="material-icons">contact_phone</i></a></li>
    </ul>
  </div>
<!-- ................   SLIDER   ........................-->
  
   <div class="slider container" style="background:#fff; margin-top:5px;" id="id-slider">
    <ul class="slides">
      <li>
        <img src="images/image1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="images/image2.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="images/image3.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="images/image2.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
<!-- ..........social.......... -->
<div class="be-light-grey">
    <div class="container  row valign-wrapper">
      <div class="col l8 m8 s12">
         <h1 class="valign titulo1 center-align">CIDEA Social</h1>
      </div>
      <div class="valign center-align col l1 m1 s12" style="margin-top:20px;">
        <img width="90%" src="images/facebook.png">
      </div>
      <div class="valign center-align col l1 m1 s12" style="margin-top:20px;">
       <img width="90%" src="images/twitter.png">
      </div>
    </div>
</div>
<!-- ................   LEFT ASIDE  - NOTICIAS ........................-->
<div class="divider container"></div>
<div class="row container" style="background:#fff">
<div class="largo-fijo col l8 m8 s12">
<center>
  <h1 class="titulo1">Noticias</h1>
</center>
  <div class="card hoverable">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/image3.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Titulo Noticia<i class="material-icons right">more_vert</i></span>
      <p><a href="https://www.facebook.com/">Visitar Link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Titulo Noticia<i class="material-icons right">close</i></span>
      <small>Publicado: 1-dic-2015</small>
      <p>Esta es la informacion de la noticia que se quiere publicar</p>
    </div>
  </div>
  <div class="card hoverable">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/image2.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
  <div class="card hoverable">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/image1.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
</div>
<!-- ................   RIGHT ASIDE  - REDES SOCIALES ........................-->  
  <div class="col l4 m4 s12">
    <center>
    </br>
        <img src="images/CIDEA.png" alt="REDECAM" width="100%" height="100%">
        <p>REDECAM BANNER</p>
        </br>
    </center>
    <center>
        <div class="cabecera-facebook text-center">Facebook</div>
        <div class="fb-page" data-href="https://www.facebook.com/DSTecOnLine/?fref=ts" data-width="6000px" data-height="650px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/DSTecOnLine/?fref=ts"><a href="https://www.facebook.com/DSTecOnLine/?fref=ts">DSTec</a></blockquote></div></div>
    </center>
    
  </div>
</div>
<!-- ..........VIDEO INSTITUCIONAL .......... -->

      <div class="video-container container">
        <iframe width="400" height="280" src="//www.youtube.com/embed/C5rf55t14s0?rel=0" frameborder="1" allowfullscreen></iframe>
      </div>





<div class="divider container"></div>
<!-- ................   PATROCINADORES   ........................--> 
<hr>
 <ul class="row container" style="background:#fff" id="vinculos">
      <li class="col s6 m4 l1">1</li>
      <li class="col s6 m4 l1">2</li>
      <li class="col s6 m4 l1">3</li>
      <li class="col s6 m4 l1">4</li>
      <li class="col s6 m4 l1">5</li>
      <li class="col s6 m4 l1">6</li>
      <li class="col s6 m4 l1">7</li>
      <li class="col s6 m4 l1">8</li>
      <li class="col s6 m4 l1">9</li>
      <li class="col s6 m4 l1">10</li>
      <li class="col s6 m4 l1">11</li>
      <li class="col s6 m4 l1">12</li>
</ul>
<hr>
 <!-- ................   FOOTER   ........................-->
<footer class="be-grey">
  <div class="container">
    <div class="row">
      <div class="col l6 m6 s12">
          <div id="map_canvas" style="width:auto; height:250px; margin-top:20px"></div>
      </div>
      <div class="col l3 m3 s12" style="margin-top:20px;">
        <h5 class="titulo-informativo">Contacto</h5>
          <h3 class="contenido-informativo"><i class="tiny material-icons">contact_phone</i> +57 (2) 8332211</h3>
          <h3 class="contenido-informativo"><i class="tiny material-icons">phonelink_ring</i> 321 646 8106</h3>
          <h3 class="contenido-informativo"><i class="tiny material-icons">comment</i> pablosanjuanm@gmail.com</h3>
          <h3 class="contenido-informativo"><i class="tiny material-icons">person_pin</i> Calle 30 N # 4-50</h3>
          <h3 class="contenido-informativo"><i class="tiny material-icons">location_on</i> Popayan - Cauca</h3>
      </div>
      <div class="col l3 m3 s12" style="margin-top:20px;">
        <h5 class="titulo-informativo">Redes Sociales</h5>
          <h3 class="valign contenido-informativo"><span><img class="valign" width="9%" src="images/facebook.png"></span> Facebook</h3>
          <h3 class="valign contenido-informativo"><span><img class="valign" width="9%" src="images/twitter.png"></span> Twitter</h3>
      </div>
  </div>
</footer>
<div class="be-dark-black">
    <div>
      Desarrollado por DSTec Soluciones Tecnologicas
      <a class="grey-text text-lighten-4 right" href="http://dstec.co/">DSTEC.co</a>
    </div>
</div>
<!-- ................   LIBRERIAS  JQUERY   ........................-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
    <script type="text/javascript">
    var options = [
    {selector: '#vinculos', offset: 350, callback: 'Materialize.showStaggeredList("#vinculos")' }
    ];
    Materialize.scrollFire(options);
    </script>
 </body>
</html>