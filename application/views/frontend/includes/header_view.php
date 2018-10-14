
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="author" content="<?php echo $title; ?>">

<!-- Page Title -->
<title><?php echo NOMBRE_SITIO; ?></title>
<base href="<?php echo base_url(); ?>" />
<!-- Favicon and Touch Icons -->
<link href="assets/frontend/images/favicon.png" rel="shortcut icon" type="image/png">
<link rel="apple-touch-icon" sizes="57x57" href="assets/frontend/images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/frontend/images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/frontend/images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/frontend/images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/frontend/images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/frontend/images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/frontend/images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/frontend/images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/frontend/images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="assets/frontend/images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/frontend/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/frontend/images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/frontend/images/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/frontend/images//ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- Stylesheet -->
<link href="assets/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/frontend/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="assets/frontend/css/animate.css" rel="stylesheet" type="text/css">
<link href="assets/frontend/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="assets/frontend/css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="assets/frontend/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="assets/frontend/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->

<!-- CSS | Custom Margin Padding Collection -->
<link href="assets/frontend/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="assets/frontend/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="assets/frontend/css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="assets/frontend/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="assets/frontend/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="assets/frontend/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="assets/frontend/css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="assets/frontend/js/jquery-2.2.4.min.js"></script>
<script src="assets/frontend/js/jquery-ui.min.js"></script>
<script src="assets/frontend/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="assets/frontend/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="assets/frontend/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/frontend/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>


<?php
if($seccion=="contactanos")
{
   $onload = 'initialize()';
}
else
{
    $onload = '';
}
  ?>
</head>


<body class="has-side-panel side-panel-right fullwidth-page" onload="<?php echo $onload ?>">
<div id="wrapper">

  
  <!-- Header -->
  <header id="header" class="header" >
    <div class="header-top bg-light sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="widget">
              <i class="fa fa-clock-o text-theme-colored"></i> <?php echo getConfig('horario');?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="widget">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center">
                <li><i class="fa fa-phone text-theme-colored"></i> Llamenos al <a href="#">+<?php echo getConfig('telefono');?></a></li>
                <li><i class="fa fa-envelope-o text-theme-colored"></i> <a href="#"><?php echo getConfig('correo');?></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default no-bg"><a class="menuzord-brand pull-left flip mb-15" href="./"><img src="assets/frontend/images/logo-wide.jpg" alt=""></a>
            <ul class="list-inline nav-side-icon-list pull-right">
              <li>
               <!-- <a href="#" id="inline-fullwidth-search-btn"><i class="search-icon fa fa-search"></i></a>-->
                <div id="inline-fullwidth-search-form" class="clearfix">
                  <form method="GET">
                    <input type="text" name="s" value="" placeholder="Type and Press Enter..." autocomplete="off">
                  </form>
                  <a href="#" id="close-search-btn"><i class="icon_close"></i></a>
                </div>
              </li>
            </ul>
   
  <ul class="menuzord-menu">
  <li
    <?php if($seccion=="inicio") echo ' class="active"'; ?>><a href="./">Home</a>
  </li>
   <li
     <?php if($seccion=="nosotros")echo'class="active"';?>><a href="nosotros">Quienes Somos</a>
  </li>
   <li
    <?php if($seccion=="servicios") echo ' class="active"'; ?>><a href="servicios">Servicios</a>
  </li>
   <li
   <?php if($seccion=="flota") echo ' class="active"'; ?>><a href="flota">Nuestra Flota</a>
 </li>
   <li
   <?php if($seccion=="galeria") echo ' class="active"'; ?>><a href="galeria">Galeria</a>
 </li>
   <li
   <?php if($seccion=="clientes") echo ' class="active"'; ?>><a href="clientes">Clientes</a>
 </li>
   <li
   <?php if($seccion=="articulos") echo ' class="active"'; ?>><a href="articulos">Artículos</a>
 </li>
   <li
   <?php if($seccion=="contactanos") echo ' class="active"'; ?>><a href="contactanos">Contáctanos</a>

 </li>




</ul>
</nav>
        </div>
      </div>
    </div>
  </header>
