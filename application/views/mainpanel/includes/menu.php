<ul class="nav nav-tabs nav-stacked main-menu">
<?php
    switch( $this->session->userdata('nivel') )
    {
        case 1:
?>
    <li class="nav-header hidden-tablet">SECCIONES</li>

    <li <?php if($current_section=='inicio'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/inicio"><i class="fa fa-home"></i><span class="hidden-tablet"> Inicio</span></a></li>    

    <li <?php if($current_section=='banners'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/banners/listado"><i class="fa fa-photo"></i><span class="hidden-tablet"> Banners</span></a></li>
      
   <!--<li><a class="ajax-link" href="mainpanel/rubros/categorias"><i class="fa fa-align-justify"></i><span class="hidden-tablet"> Flotas</span></a></li>-->

   <li <?php if($current_section=='servicios'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/servicios/listado"><i class="fa fa-align-justify"></i><span class="hidden-tablet"> Servicios</span></a></li>
    

    <li <?php if($current_section=='articulos'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/articulos/listado"><i class="fa fa-thumbs-up"></i><span class="hidden-tablet"> Artículos</span></a></li>

   <li class="nav-header hidden-tablet">INFORMACIÓN</li>

    <li <?php if($current_section=='informativa'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/informativa/listado"><i class="fa fa-lock"></i><span class="hidden-tablet"> Información General</span></a></li>



     
    <li class="nav-header hidden-tablet">CONFIGURACIÓN</li>

    <li <?php if($current_section=='configuracion'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/configuracion/listado"><i class="fa fa-lock"></i><span class="hidden-tablet"> Parámetros</span></a></li>

 
    <li <?php if($current_section=='usuarios'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/usuarios/listado"><i class="fa fa-tint"></i><span class="hidden-tablet"> Usuarios</span></a></li>

<?php
    break;

    case 2:
    case 3:
?>
    <li class="nav-header hidden-tablet">SECCIONES</li>
    <li <?php if($current_section=='articulos'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/blog/listado"><i class="fa fa-thumbs-up"></i><span class="hidden-tablet"> Artículos</span></a></li>
<?php
    break;
}
?>

</ul>