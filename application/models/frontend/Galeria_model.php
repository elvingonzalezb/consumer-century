<?php
class Galeria_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

     public function getGaleria($limite) {
           $this->db->where('state', '1');
           $query = $this->db->get("galeria", $limite, 0);
           return $query->result();
        }

    public function numTotalFotos() {
         $this->db->where('state', '1');
        $this->db->order_by('orden');
        $query =  $this->db->get('galeria');
        return $query->num_rows();
    }

    public function getFotosxPagina($inicio, $limite) {
        $this->db->where('state', '1');
        $this->db->order_by('orden');
        $this->db->limit($limite, $inicio);
        $query =  $this->db->get('galeria');
        return $query->result();
    }





}