<!DOCTYPE html>
  <html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="Sin_titulo1.css" rel="stylesheet">
      <link href="index.css" rel="stylesheet">
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
        <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="index.php">Inicio</a></li>
        <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="nosotros.php">Nosotros</a></li>
        <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="documentos.php">Documentos</a></li>
        <li class="divider-vertical-second-menu"></li><li><a class="animation-nav  active-nav" href="experiencias.php">Experiencias</a></li>
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
      <li><a class="btn-floating green" alt="Redecam" href="experiencias.html"><i class="material-icons">loyalty</i></a></li>
      <li><a class="btn-floating yellow darken-1" alt="Contacto" href="contacto.html"><i class="material-icons">contact_phone</i></a></li>
    </ul>
  </div>

<!-- ................   Contenido   ........................-->
<div class="row container center-align">
    <img class="image" width="70%" src="images/Imagen5.png">
</div>
<!-- ................   PATROCINADORES   ........................-->
<div class="divider container"></div>
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
<div class="divider container"></div>
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
          <h3 class="contenido-informativo"><span><img width="9%" src="images/facebook.png"></span> Facebook</h3>
          <h3 class="contenido-informativo"><span><img width="9%" src="images/twitter.png"></span> Twitter</h3>
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
    
      <script src="jquery-1.11.1.min.js"></script>
      <script src="jquery.ui.effect.min.js"></script>
      <script src="jquery.ui.effect-fade.min.js"></script>
      <script src="wb.slideshow.min.js"></script>

    <script>
    $(document).ready(function()
    {
       $("#SlideShow1").slideshow(
       {
          interval: 1000,
          type: 'sequence',
          effect: 'fade',
          direction: '',
          pagination: false,
          effectlength: 1000
       });
    });
    </script>
 </body>
</html>