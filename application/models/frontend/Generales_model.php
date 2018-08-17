<?php
    class Generales_model extends CI_Model {
        public function __construct()
        {
                parent::__construct();
        }

             
        public function getSeccion($seccion) {
            $this->db->where('seccion', $seccion);
            $query =  $this->db->get('textos_secciones');
            return $query->row();
        }

        public function Compartir($url, $article){
            $value_fb = 'https://www.facebook.com/sharer/sharer.php?u='.BASE_URL.'blog/'.$url;
            $value_tw = 'https://twitter.com/intent/tweet?url='.BASE_URL.'blog/'.$url.'&text='.$article;
            $value_gp = 'https://plusone.google.com/_/+1/confirm?hl=en&url='.BASE_URL.'blog/'.$url;

            $resultado = array(
                0 => ['RS' => $value_fb, 'RS_COLOR' => '#3A5795', 'RS_TITLE' => 'Facebook', 'RS_CLASS' => 'facebook'],
                1 => ['RS' => $value_tw, 'RS_COLOR' => '#55ACEE', 'RS_TITLE' => 'Twitter', 'RS_CLASS' => 'twitter'],
                2 => ['RS' => $value_gp, 'RS_COLOR' => '#A11312', 'RS_TITLE' => 'Google+', 'RS_CLASS' => 'google-plus'],
            );
            return $resultado;
        }

        public function grabarMensaje($data)
        {
            $resultado = $this->db->insert("contactenos", $data);
            $id = $this->db->insert_id();
            return $id;
        }

    public function getFechaFormateada($fecha) {
            $aux = explode(" ", $fecha);
            $aux2 = substr($fecha, 0, 10);
            $fecha = $aux2[0];
            $numeroDia = date('d', strtotime($fecha));
            $dia = date('l', strtotime($fecha));
            $mes = date('F', strtotime($fecha));
            $anio = date('Y', strtotime($fecha));
            $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
            $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
            $nombredia = str_replace($dias_EN, $dias_ES, $dia);
            $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
            $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
            $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
            return $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;
        }

    }
?>