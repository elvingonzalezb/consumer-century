<?php
    class Ajax extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->model('mainpanel/Ajax_model');
        }

        public function cargaPrincipales() {
            $id_categoria = $_POST['id_categoria'];
            $aux= $this->Ajax_model->getPrincipales($id_categoria);
            $dato=array();
            $cont=0;
            foreach ($aux as $value) {
                $id = $value->id;
                $nombre = $value->title;
                $dato[] = $id.'$$'.$nombre;
                $cont +=1;
            }
            $envio=$cont.'@@'.implode("@@",$dato);
            $json['dato'] = $envio;
            echo json_encode($json);
        }

        public function cargaSgteSubcategoria() {
            $id_categoria = $_POST['id_categoria'];
            $num = $this->Ajax_model->ultimoSubC($id_categoria);
            $json['sgte'] = $num + 1;
            echo json_encode($json);
        }

        public function cargaSgteCategoria() {
            $id_padre = $_POST['id_padre'];
            $num = $this->Ajax_model->ultimoCategoria($id_padre);
            $json['sgte'] = $num + 1;
            echo json_encode($json);
        }

    }
?>