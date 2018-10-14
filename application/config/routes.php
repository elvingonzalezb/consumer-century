<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'inicio';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['servicios'] = 'frontend/servicios';
$route['([0-9]+)-(.*)/servicios'] = 'frontend/servicios/individualServicios';

$route['articulos/([0-9]+)'] = 'frontend/articulos';
$route['articulos'] = 'frontend/articulos';
$route['([0-9]+)-(.*)'] = 'frontend/articulos/individualArticulos';

$route['galeria/([0-9]+)'] = 'frontend/galeria';
$route['galeria'] = 'frontend/galeria';


$route['clientes'] = 'frontend/clientes';
$route['contactanos'] = 'frontend/contactanos';
$route['flota'] = 'frontend/flota';
$route['nosotros'] = 'frontend/nosotros';
$route['privacidad'] = 'frontend/privacidad';

// ADMINISTRACION
$route['mainpanel'] = "mainpanel/login";
$route['mainpanel/validar'] = "mainpanel/login/validar";
$route['mainpanel/inicio'] = "mainpanel/inicio/index";

$route['mainpanel/logout'] = "mainpanel/login/logout";
$route['mainpanel/error/([a-z_-]+)'] = "mainpanel/login/index/$1";


