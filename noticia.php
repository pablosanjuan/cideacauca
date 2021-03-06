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
      <meta property="og:image" content="http://cideacauca.com.co/images/cidea.png" />
      <meta property="og:description" content="CIDEA Cauca. Comité Técnico Interinstitucional de Eduación Ambiental" />
      <meta itemprop="name" content="CIDEA Cauca">
      <meta itemprop="description" content="CIDEA Cauca. Comité Técnico Interinstitucional de Eduación Ambiental">
      <meta itemprop="image" content="http://cideacauca.com.co/images/cidea.png">
      <meta name="twitter:image" content="http://cideacauca.com.co/images/cidea.png">
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
        <li class="titulo2">Menu Cidea</li>
        <li><a class="mobile-item-nav contenido1" href="index.php" value="hola">Inicio</a></li>
        <li><a class="mobile-item-nav contenido1" href="nosotros.php">Nosotros</a></li>
        <li><a class="mobile-item-nav contenido1" href="documentos.php">Documentos</a></li>
        <li><a class="mobile-item-nav contenido1" href="experiencias.php">Experiencias</a></li>
        <li><a class="mobile-item-nav contenido1" href="redecam.php">Redecam</a></li>
        <li><a class="mobile-item-nav contenido1" href="contacto.php">Contacto</a></li>
      </ul>
    </div>
  </nav>
<!-- ................   FLOATING BUTTOM   ........................-->
<div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
  <a class="btn-floating btn-large">
    <i class="material-icons">menu</i>
  </a>
  <ul>
    <li><a class="btn-floating tooltipped" data-position="left" data-delay="10" data-tooltip="Inicio" alt="Nosotros" href="index.php"><i class="material-icons">store</i></a></li>
    <li><a class="btn-floating red tooltipped" data-position="left" data-delay="10" data-tooltip="Nosotros" alt="Nosotros" href="nosotros.php"><i class="material-icons">supervisor_account</i></a></li>
    <li><a class="btn-floating blue tooltipped" data-position="left" data-delay="10" data-tooltip="Documentos" alt="Documentos" href="documentos.php"><i class="material-icons">description</i></a></li>
    <li><a class="btn-floating purple darken-3 tooltipped" data-position="left" data-delay="10" data-tooltip="Experiencias" alt="Experiencias" href="experiencias.php"><i class="material-icons">loyalty</i></a></li>
    <li><a class="btn-floating green tooltipped" data-position="left" data-delay="10" data-tooltip="Redecam" alt="Redecam" href="redecam.php"><i class="material-icons">brightness_5</i></a></li>
    <li><a class="btn-floating red accent-3 tooltipped" data-position="left" data-delay="10" data-tooltip="Contacto" alt="Contacto" href="contacto.php"><i class="material-icons">contact_phone</i></a></li>
  </ul>
</div>
<!-- ................   LEFT ASIDE  - NOTICIAS ........................-->
<div class="divider container"></div><br>
<div class="row container" style="background:#fff">
  <div class="col l8 m8 s12">
  <?php
    include_once("models/Datasource.php");
    include_once("models/NoticiasDao.php");
    include_once("models/Noticias.php");
    include_once("models/Variables.php");
    $conn=new Datasource($dbhost,$dbName,$dbUser,$dbPassword);  
    $ndao=new NoticiasDao();
    $idproducto=$_GET["id"];
    $noticias=$ndao->loadAll($conn);
    ?>
   <center>
      <h1 class="titulo1"><?php echo($noticias[$idproducto]->getTitulo()) ?></h1>
    </center>
      <small>Publicado: 1-dic-2015</small>
      <br>
      <img class="responsive-img col s12 m12 l12 materialboxed" data-caption='<?php echo($noticias[$idproducto]->getTitulo()) ?>' src="images/noticias/noticia2.jpg">
      <br>
      <h1 class="contenido3"><?php echo($noticias[$idproducto]->getDescripcion()) ?></h1>
  </div>
<!-- ................   RIGHT ASIDE  - REDES SOCIALES ........................-->  
  <div class="col l4 m4 s12">
  <!-- ..........social.......... -->
    <div class="be-light-grey">
        <div class="container  row valign-wrapper">
            <h1 class="valign titulo1 center-align">CIDEA Social</h1>
        </div>
        <div class="valign center-align col l1 m1 s12" style="margin-top:20px;">
            <img width="90%" src="images/facebook.png">
        </div>
        <div class="valign center-align col l1 m1 s12" style="margin-top:20px;">
           <img width="90%" src="images/twitter.png">
        </div>
    </div>
    historial
</div>
</div>
<!-- ................   PATROCINADORES   ........................--> 
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
<!-- ................   FOOTER   ........................-->
<footer class="be-grey">
  <div class="container">
    <div class="row">
      <div class="col l6 m6 s12">
          <div id="map_canvas" style="width:auto; height:250px; margin-top:20px"></div>
      </div>
      <div class="col l3 m3 s12" style="margin-top:20px;">
        <h5 class="titulo-informativo">Contacto</h5>
        <?php        
            include_once("models/Datasource.php");
            include_once("models/ContactoDao.php");
            include_once("models/Contacto.php");
            include_once("models/Variables.php");
            $conn=new Datasource($dbhost,$dbName,$dbUser,$dbPassword);  
            $contactdao=new ContactoDao();
            $fijo=$contactdao->getObject($conn,1);
            $celular=$contactdao->getObject($conn,2);
            $correo=$contactdao->getObject($conn,3);
            $direccion=$contactdao->getObject($conn,4);
          ?> 
          <h3 class="contenido-informativo"><i class="tiny material-icons">contact_phone</i><?php echo('  '.$fijo->getDescripcion());?></h3>
          <h3 class="contenido-informativo"><i class="tiny material-icons">phonelink_ring</i><?php echo('  '.$celular->getDescripcion());?></h3>
          <h3 class="contenido-informativo"><i class="tiny material-icons">comment</i><?php echo('  '.$correo->getDescripcion());?></h3>
          <h3 class="contenido-informativo"><i class="tiny material-icons">person_pin</i><?php echo('  '.$direccion->getDescripcion());?></h3>
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