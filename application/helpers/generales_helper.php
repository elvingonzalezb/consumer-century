<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function tipoDevice() {
    $CI =& get_instance();
    $CI->load->library('Uagent_info');
    $uagent_obj = new uagent_info();
    if( $uagent_obj->DetectMobileQuick() )
    {
        $device = 'movil';
    }
    else
    {
        $device = 'desktop';
    }
    return $device; 
}

// A convenience method for printing HTML paragraphs.
function PrintParagraph($text)
{
   print('<p>'.$text.'</p>\n');
}

//**************************
// A convenience method for explaining 0 or 1 using English words.
function ConvertToText($text)
{
   if ($text == 1)
      return 'true';
   else
      return 'false';
}

function mostrarFechaBlog($fecha)
{
    setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
    $fechablog = strftime('<li class="font-16 text-white font-weight-600">%d</li> <li class="font-12 text-white text-uppercase"> %b </li><li class="font-12 text-white font-weight-600"> %Y</li>', strtotime($fecha));
    return $fechablog;
}


function hayDosEmpates($frecuencias) {
    $num_empates = 0;
    foreach($frecuencias as $frecuencia)
    {
        if($frecuencia==2)
        {
            $num_empates++;
        }
    }
    if($num_empates>=2)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function hayEmpatePrimerLugar($resultados) {
    $aux = array_values($resultados);
    if($aux[0]==$aux[1])
    {
        return true;
    }
    else
    {
        return false;
    }
}

function clave2Digitos($resultados) {
    $aux = array_keys($resultados);
    $cadena = '';
    for($i=0; $i<2; $i++)
    {
        $current = $aux[$i];
        switch($current)
        {
            case "investigacion":
                $cadena .= 'I';
            break;

            case "convencional":
                $cadena .= 'C';
            break;

            case "realista":
                $cadena .= 'R';
            break;

            case "artistico":
                $cadena .= 'A';
            break;

            case "social":
                $cadena .= 'S';
            break;

            case "emprendedor":
                $cadena .= 'E';
            break;
        }
    }
    return $cadena;
}

function clave3Digitos($resultados) {
    $aux = array_keys($resultados);
    $cadena = '';
    for($i=0; $i<3; $i++)
    {
        $current = $aux[$i];
        switch($current)
        {
            case "investigacion":
                $cadena .= 'I';
            break;

            case "convencional":
                $cadena .= 'C';
            break;

            case "realista":
                $cadena .= 'R';
            break;

            case "artistico":
                $cadena .= 'A';
            break;

            case "social":
                $cadena .= 'S';
            break;

            case "emprendedor":
                $cadena .= 'E';
            break;
        }
    }
    return $cadena;
}

function hayIncompatibilidad($clave) {
    $ci =& get_instance();
    $sql = "SELECT * FROM tres_digitos WHERE clave='$clave'";
    $query = $ci->db->query($sql);
    $resultado = $query->row();
    $conflicto = $resultado->conflicto;
    if($conflicto==1)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function generaCodigoSMS() {
    $aux = mt_rand(248516, 976317);
    if($aux>248516)
    {
        return $aux;
    }
    else
    {
        $aux2 = 326185;
        return $aux2;
    }
}

function generaCodigoSMS_old() {
    $numeros=array();  
    $i=0;  
    while($i<6)  
    {  
        $num=rand(1,9);  
        if(in_array($num,$numeros)===false)  
        {  
            array_push($numeros,$num);  
            $i++;  
        }  
    }
    $generado = 0;
    for($i=0; $i<6; $i++)
    {
        $generado += $numeros[$i]*pow(10, $i);
    }
    if($generado>0)
    {
        return $generado;
    }
    else
    {
        $lalo = 143079;
        return $lalo;
    }
}

function redondeado($numero, $decimales) {
    $factor = pow(10, $decimales);
    $aux = (round($numero*$factor)/$factor);
    return $aux;
}

function tiempoRestante($fecha_ingreso, $caducidad) {
        $aux_hi = explode(" ", $fecha_ingreso);
        $aux_hi_2 = explode("-", $aux_hi[0]);
        $aux_hi_3 = explode(":", $aux_hi[1]);
        $time_ingreso = mktime($aux_hi_3[0], $aux_hi_3[1], $aux_hi_3[2], $aux_hi_2[1], $aux_hi_2[2], $aux_hi_2[0]);
        $aux_hc = explode(" ", $caducidad);
        $aux_hc_2 = explode("-", $aux_hc[0]);
        $aux_hc_3 = explode(":", $aux_hc[1]);
        $time_caducidad = mktime($aux_hc_3[0], $aux_hc_3[1], $aux_hc_3[2], $aux_hc_2[1], $aux_hc_2[2], $aux_hc_2[0]);
        $ahora = time();
        $diferencia = conversorSegundosHoras($time_caducidad - $ahora);
        return $diferencia;
}

function getInfo($seccion) {
    $ci =& get_instance();
    $ci->db->select('*');
    $ci->db->where('seccion', $seccion);
    $query = $ci->db->get('textos_web');
    if ($query->num_rows() > 0){
        $row = $query->row();
        return $row;
    }
    return 0;
}

function getCategorias() {
    $ci =& get_instance();
    $ci->db->select('*');
    $ci->db->order_by('orden');
    $ci->db->where('estado', 'A');
    $query = $ci->db->get('categorias_instituciones');
    return $query->result();
}

function getCategoriasCarreras() {
    $ci =& get_instance();
    $ci->db->select('*');
    $ci->db->order_by('orden');
    $ci->db->where('estado', 'A');
    $query = $ci->db->get('categorias_carreras');
    return $query->result();
}

function getCategoria($id) {
    $ci =& get_instance();
    $ci->db->select('*');
    $ci->db->where('id', $id);
    $query = $ci->db->get('categorias_instituciones');
    return $query->row();
}

function getInstitucion($id) {
    $ci =& get_instance();
    $ci->db->select('*');
    $ci->db->where('id', $id);
    $query = $ci->db->get('instituciones_educativas');
    return $query->row();    
}

function getCarrera($id) {
    $ci =& get_instance();
    $ci->db->select('*');
    $ci->db->where('id', $id);
    $query = $ci->db->get('carreras');
    return $query->row();    
}

function getNombreCarrera($id) {
    $ci =& get_instance();
    $ci->db->select('*');
    $ci->db->where('id', $id);
    $query = $ci->db->get('carreras');
    $resultado = $query->row();    
    return $resultado->title;
}

function getPais($id) {
    $ci =& get_instance();
    $sql = "SELECT * FROM paises WHERE id_pais='$id'";
    $query = $ci->db->query($sql);
    $aux = $query->row();
    $dpto = $aux->nombre;
    return $dpto;
}

function getDepartamento($id) {
    $ci =& get_instance();
    $sql = "SELECT * FROM departamentos WHERE id='$id'";
    $query = $ci->db->query($sql);
    $aux = $query->row();
    $dpto = $aux->departamento;
    return $dpto;
}

function getProvincia($id) {
    $ci =& get_instance();
    $sql = "SELECT * FROM provincias WHERE id='$id'";
    $query = $ci->db->query($sql);
    $aux = $query->row();
    $provincia = $aux->provincia;
    return $provincia;
}

function getDistrito($id) {
    $ci =& get_instance();
    $sql = "SELECT * FROM distritos WHERE id='$id'";
    $query = $ci->db->query($sql);
    $aux = $query->row();
    $distrito = $aux->distrito;
    return $distrito;
}

function getDepartamentos() {
    $ci =& get_instance();
    $ci->db->select('*');
    $ci->db->order_by('orden');
    $query = $ci->db->get('departamentos');
    $resultado = $query->result();
    $departamentos = array();
    foreach ($resultado as $value) {
        $temp = array();
        $temp['id'] = $value->id;
        $temp['departamento'] = $value->departamento;
        $temp['abrev'] = $value->abrev;
        $temp['url'] = $value->url;
        $num_x_departamento = getNumInstxDepartamento($value->id);
        $temp['num_instituciones'] = $num_x_departamento;
        if($num_x_departamento>0)
        {
            $departamentos[] = $temp;
        }            
    }
    return $departamentos;
}

function getNumInstxDepartamento($id_departamento) {
    $ci =& get_instance();
    $ci->db->where('id_departamento', $id_departamento);
    $query = $ci->db->get('instituciones_educativas');
    return $query->num_rows();
}

if ( ! function_exists('formatoFechaHora'))
{
	function formatoFechaHora($fecha) {
            $aux_0 = explode(" ", $fecha);
            $aux = explode("-", $aux_0[0]);
            $agno = $aux[2];
            $mes = $aux[1];
            $dia = $aux[0];
            $fechaFormat = $agno."-".$mes."-".$dia;
            
            $aux2 = explode(":", $aux_0[1]);
            if($aux2[0]>12)
            {
                $hora = $aux2[0] - 12;
                $horaFormat = $hora.":".$aux2[1]." p.m.";
            }
            else
            {
                $horaFormat = $aux2[0].":".$aux2[1]." a.m.";
            }
            $formateada = $fechaFormat." ".$horaFormat;
            return $formateada;
	}
}


if ( ! function_exists('getConfig'))
{
	function getConfig($llave) {
		$ci =& get_instance();
		$ci->db->select('valor');
		$ci->db->where('llave', $llave);
		$query = $ci->db->get('configuracion');
		if ($query->num_rows() > 0){
			$row = $query->row();
			return $row->valor;
		}
		return 0;
	}
}


	function getBanners() {
		$ci =& get_instance();
		$sql = "select * from banners where estado='A' order by orden";
		$query = $ci->db->query($sql);
		return $query->result_array();
	}


if ( ! function_exists('getSliders'))
{
    function getSliders() {
        $ci =& get_instance();
        $sql = "select * from slider_ollas order by orden";
        $query = $ci->db->query($sql);
        return $query->result_array();
    }
}

function formateaCadena($cadena) {
    $cadena = str_replace("á", "a", $cadena);
    $cadena = str_replace("é", "e", $cadena);
    $cadena = str_replace("í", "i", $cadena);
    $cadena = str_replace("ó", "o", $cadena);
    $cadena = str_replace("ú", "u", $cadena);
    $cadena = str_replace("Á", "A", $cadena);
    $cadena = str_replace("É", "E", $cadena);
    $cadena = str_replace("Í", "I", $cadena);
    $cadena = str_replace("Ó", "O", $cadena);
    $cadena = str_replace("Ú", "U", $cadena);
    $cadena = str_replace("ñ", "n", $cadena);
    $cadena = str_replace("Ñ", "N", $cadena);   
    $cadena = str_replace('"', "", $cadena);
    $cadena = str_replace("-", "", $cadena);
    $cadena = str_replace("¿", "", $cadena);
    $cadena = str_replace(",", "", $cadena);
    $cadena = str_replace("?", "", $cadena);
    $cadena = str_replace(" ", "-", $cadena);
    $cadena = str_replace("/", "-", $cadena);
    $cadena = str_replace(":", "-", $cadena);
    $cadena = str_replace("#", "N", $cadena);
    $cadena = str_replace("%", "", $cadena);
    $cadena = str_replace("'", "", $cadena);
    $cadena = str_replace("&", "", $cadena);                
    $cadena = str_replace("(", "", $cadena);
    $cadena = str_replace(")", "", $cadena);                
    $cadena = str_replace(",", "", $cadena);
    $cadena = str_replace(";", "", $cadena);                
    $cadena = strtolower($cadena);
    return $cadena;
}

function fixUrl($cadena) {
    $cadena = str_replace("á", "a", $cadena);
    $cadena = str_replace("é", "e", $cadena);
    $cadena = str_replace("í", "i", $cadena);
    $cadena = str_replace("ó", "o", $cadena);
    $cadena = str_replace("ú", "u", $cadena);
    $cadena = str_replace("Á", "A", $cadena);
    $cadena = str_replace("É", "E", $cadena);
    $cadena = str_replace("Í", "I", $cadena);
    $cadena = str_replace("Ó", "O", $cadena);
    $cadena = str_replace("Ú", "U", $cadena);
    $cadena = str_replace("ñ", "n", $cadena);
    $cadena = str_replace("Ñ", "N", $cadena);   
    $cadena = str_replace('"', "", $cadena);
    $cadena = str_replace("¿", "", $cadena);
    $cadena = str_replace(",", "", $cadena);
    $cadena = str_replace("?", "", $cadena);
    $cadena = str_replace(" ", "-", $cadena);
    $cadena = str_replace("/", "-", $cadena);
    $cadena = str_replace(":", "-", $cadena);
    $cadena = str_replace("#", "N", $cadena);
    $cadena = str_replace("%", "", $cadena);
    $cadena = str_replace("'", "", $cadena);
    $cadena = str_replace("&", "", $cadena);                
    $cadena = str_replace("(", "", $cadena);
    $cadena = str_replace(")", "", $cadena);                
    $cadena = str_replace(",", "", $cadena);
    $cadena = str_replace(";", "", $cadena);                
    $cadena = strtolower($cadena);
    return $cadena;
}

if ( ! function_exists('quitaAcentos'))
{
    function quitaAcentos($cadena) {
        $cadena = str_replace("á", "a", $cadena);
        $cadena = str_replace("é", "e", $cadena);
        $cadena = str_replace("í", "i", $cadena);
        $cadena = str_replace("ó", "o", $cadena);
        $cadena = str_replace("ú", "u", $cadena);
        $cadena = str_replace("Á", "A", $cadena);
        $cadena = str_replace("É", "E", $cadena);
        $cadena = str_replace("Í", "I", $cadena);
        $cadena = str_replace("Ó", "O", $cadena);
        $cadena = str_replace("Ú", "U", $cadena);
        return $cadena;
    }
}

if ( ! function_exists('Ymd_2_dmY'))
{
	function Ymd_2_dmY($fecha) {
		$aux = explode("-", $fecha);
		$agno = $aux[0];
		$mes = $aux[1];
		$dia = $aux[2];
		$formateada = $dia."-".$mes."-".$agno;
		return $formateada;
	}
}

if ( ! function_exists('dmYHora_2_Ymd'))
{
    function dmYHora_2_Ymd($fecha) {
        $aux_0 = explode(" ", $fecha);
        $aux = explode("-", $aux_0[0]);
        $agno = $aux[2];
        $mes = $aux[1];
        $dia = $aux[0];
        $formateada = $agno."-".$mes."-".$dia;
        return $formateada;
    }
}

if ( ! function_exists('Ymd_2_dmYHora'))
{
    function Ymd_2_dmYHora($fecha) {
        $aux_0 = explode(" ", $fecha);
        $aux = explode("-", $aux_0[0]);
        $agno = $aux[0];
        $mes = $aux[1];
        $dia = $aux[2];
        $formateada = $agno."-".$mes."-".$dia;
        return $formateada;
    }
}

if ( ! function_exists('YmdHora_2_dmY'))
{
	function YmdHora_2_dmY($fecha) {
            $aux_0 = explode(" ", $fecha);
            $aux = explode("-", $aux_0[0]);

            $agno = $aux[0];

            $mes = $aux[1];

            $dia = $aux[2];

            $formateada = $dia."-".$mes."-".$agno." ".$aux_0[1];

            return $formateada;

	}
}

if ( ! function_exists('YmdHora_2_dmYHora'))
{

    function YmdHora_2_dmYHora($fecha) {

        $aux_0 = explode(" ", $fecha);

        $aux = explode("-", $aux_0[0]);

        $agno = $aux[0];

        $mes = $aux[1];

        $dia = $aux[2];

        $formateada = $dia."-".$mes."-".$agno." ".$aux_0[1];

        return $formateada;

    }
}

if ( ! function_exists('conversorSegundosHoras'))
{

    function conversorSegundosHoras($tiempo_en_segundos) {

        $horas = floor($tiempo_en_segundos / 3600);

        $minutos = floor(($tiempo_en_segundos - ($horas * 3600)) / 60);

        $segundos = $tiempo_en_segundos - ($horas * 3600) - ($minutos * 60);

        //return $horas . ':' . $minutos . ":" . $segundos;

        if($horas>48)

        {

            return '<span class="label label-success">'.$horas . ' h y ' . $minutos.' min.</span>';

        }

        else if( ($horas<48) && ($horas>24) )

        {

            return '<span class="label label-alerta">'.$horas . ' h y ' . $minutos.' min.</span>';

        }

        else

        {

            return '<span class="label label-peligro">'.$horas . ' h y ' . $minutos.' min.</span>';

        }

    }
}

if ( ! function_exists('dmY_2_Ymd'))
{

	function dmY_2_Ymd($fecha) {

            $aux = explode("-", $fecha);

            $agno = $aux[2];

            $mes = $aux[1];

            $dia = $aux[0];

            $formateada = $agno."-".$mes."-".$dia;

            return $formateada;

	}
}

if ( ! function_exists('fecha_hoy_dmY'))
{

    function fecha_hoy_dmY() {

        $fecha = getdate();

        $dia = $fecha['mday'];

        if($dia<10) $dia="0".$dia;

        $mes = $fecha['mon'];

        if($mes<10) $mes="0".$mes;

        $agno = $fecha['year'];	

        $hoy = $dia."-".$mes."-".$agno;

        return $hoy;

    }
}

if ( ! function_exists('fecha_hoy_dmY2'))
{

    function fecha_hoy_dmY2() {

        $fecha = getdate();

        $dia = $fecha['mday'];

        if($dia<10) $dia="0".$dia;

        $mes = $fecha['mon'];

        if($mes<10) $mes="0".$mes;

        $agno = $fecha['year'];	

        $hoy = $dia."/".$mes."/".$agno;

        return $hoy;

    }
}

if ( ! function_exists('fecha_hoy_Ymd'))
{

    function fecha_hoy_Ymd() {

        $fecha = getdate();

        $dia = $fecha['mday'];

        if($dia<10) $dia="0".$dia;

        $mes = $fecha['mon'];

        if($mes<10) $mes="0".$mes;

        $agno = $fecha['year'];	

        $hoy = $agno."-".$mes."-".$dia;

        return $hoy;

    }
}

if ( ! function_exists('valRuc'))
{

    function ValidRucPeru($ruc){

        $factor= "5432765432";

        $ruc= trim($ruc);



        if ( (!is_numeric($ruc)) || (strlen($ruc) != 11) ){

            return false;

        }

        

        // verificar digitos iniciales

        $dig_valid= array("10", "20" ,"17", "15");

        $dig=substr($ruc, 0, 2);

        if (!in_array($dig, $dig_valid, true)) {

        return false;

        }

        

        $dig_verif= substr($ruc, 10, 1);

        

        for ($i=0; $i < 10; $i++){

        $arr[]= substr($ruc, $i, 1) * substr($factor, $i, 1);

        }



        $suma=0;

        foreach($arr as $a){

        $suma= $suma + $a;

        }



        //Calculamos el residuo

        $residuo= round(($suma/11),1);

        $residuo= substr($residuo, -1);

        $resta= 11 - $residuo;

        $dig_verif_aux= substr($resta, -1);



        if ($dig_verif == $dig_verif_aux){

            return true;

        } else {

            return false;

        }

    }
}

if ( ! function_exists('RandomString'))
{
    function RandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

if ( ! function_exists('tamano_archivo'))
{
    function tamano_archivo($peso , $decimales = 2 )
    {
        $clase = array(" Bytes", " KB", " MB", " GB", " TB"); 
        return round($peso/pow(1024,($i = floor(log($peso, 1024)))),$decimales ).$clase[$i];
    } 
}

if ( ! function_exists('VerificarrDireccionCorreo'))
{
    function VerificarDireccionCorreo($direccion)
    {
       $Sintaxis='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
       if(preg_match($Sintaxis,$direccion))
          return true;
       else
         return false;
    }
}
?>