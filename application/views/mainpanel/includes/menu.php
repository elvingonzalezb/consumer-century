<ul class="nav nav-tabs nav-stacked main-menu">
<?php
    switch( $this->session->userdata('nivel') )
    {
        case 1:
?>
   
    <li <?php if($current_section=='inicio' or $current_section=='banners'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/inicio"><i class="fa fa-home"></i><span class="hidden-tablet"> Inicio</span></a></li>    

    <li <?php if($current_section=='nosotros'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/nosotros/listado" ><i class="fa fa-align-justify"></i><span class="hidden-tablet"> Quienes Somos</span></a></li> 

    <li <?php if($current_section=='servicios'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/servicios/listado"><i class="fa fa-align-justify"></i><span class="hidden-tablet"> Servicios</span></a></li>

    <li <?php if($current_section=='flota'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/flota/listado"><i class="far fa-image"></i><span class="hidden-tablet"> Flota</span></a></li>

    <li <?php if($current_section=='galeria'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/galeria/listado"><i class="far fa-image"></i><span class="hidden-tablet"> Galeria</span></a></li>
    
    <li <?php if($current_section=='clientes'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/clientes/listado"><i class="fas fa-user-circle"></i><span class="hidden-tablet"> Clientes</span></a></li>

    <li <?php if($current_section=='articulos'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/articulos/listado"><i class="far fa-newspaper"></i><span class="hidden-tablet"> Artículos</span></a></li>
    
    <li <?php if($current_section=='contactanos'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/contactanos/editTexto"><i class="far fa-newspaper"></i><span class="hidden-tablet"> Contáctanos</span></a></li>
   
    
    <li class="nav-header hidden-tablet">CONFIGURACIÓN</li>

    <li <?php if($current_section=='configuracion'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/configuracion/listado"><i class="fas fa-cog"></i><span class="hidden-tablet"> Parámetros</span></a></li>

 
    <li <?php if($current_section=='usuarios'){echo 'class="active"';}?>><a class="ajax-link" href="mainpanel/usuarios/listado"><i class="fas fa-user"></i><span class="hidden-tablet"> Usuarios</span></a></li>

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