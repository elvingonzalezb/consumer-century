<?php
class Flota_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

     public function getFlota($limite) {
           $this->db->where('state', '1');
           $query = $this->db->get("flota", $limite, 0);
           return $query->result();
        }

}