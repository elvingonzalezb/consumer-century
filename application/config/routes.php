<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'inicio';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// ADMINISTRACION
$route['mainpanel'] = "mainpanel/login";
$route['mainpanel/validar'] = "mainpanel/login/validar";
$route['mainpanel/inicio'] = "mainpanel/inicio/index";

$route['mainpanel/logout'] = "mainpanel/login/logout";
$route['mainpanel/error/([a-z_-]+)'] = "mainpanel/login/index/$1";



;
;


