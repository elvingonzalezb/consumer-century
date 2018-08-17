<?php
    class Ajax_model extends CI_Model {
        public function __construct()
        {
                parent::__construct();
        }

        public function getPrincipales($id_categoria) {
            $this->db->select('id, title');
            $this->db->where('id_categoria', $id_categoria);
            $this->db->where('tipo_sede', 'principal');
            $this->db->order_by('title');
            $query =  $this->db->get('instituciones_educativas');
            return $query->result();
        }

        public function departamentos() {
            $this->db->order_by('departamento');
            $query =  $this->db->get('departamentos');
            return $query->result();
        }

        public function getProvincias($id_departamento) {
            $this->db->where('id_departamento', $id_departamento);
            $this->db->order_by('provincia');
            $query =  $this->db->get('provincias');
            return $query->result();
        }

        public function getDistritos($id_provincia) {
            $this->db->where('id_provincia', $id_provincia);
            $this->db->order_by('distrito');
            $query =  $this->db->get('distritos');
            return $query->result();
        }
        
    }
?>