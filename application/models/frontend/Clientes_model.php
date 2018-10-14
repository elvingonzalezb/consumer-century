<?php
class Clientes_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

     public function getClientes($limite) {
           $this->db->where('state', '1');
           $query = $this->db->get("clientes", $limite);
           return $query->result();
        }

}