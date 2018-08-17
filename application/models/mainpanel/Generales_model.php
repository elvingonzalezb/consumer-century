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

        public function update($seccion, $data) {
            $this->db->where('seccion', $seccion);
            $result = $this->db->update('textos_secciones', $data);
            return $result;
        } 
                
    }
?>