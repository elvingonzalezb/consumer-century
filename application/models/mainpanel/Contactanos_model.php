<?php 
	class Contactanos_model extends CI_Model
	{
		function __construct() 
		{
			parent::__construct();
		}

  		 public function getMapa() {
            $this->db->order_by("id_mapa", "desc");
            $query = $this->db->get("mapa");
            return $query->row();          
        }
	

        public function get($id)
		{
			$this->db->where("id", $id);
			$query=$this->db->get("servicios");
			return $query->row();
		}

		public function updateMapa($id_mapa, $datamapa) 
		{
			$this->db->where("id_mapa", $id_mapa);
			$result = $this->db->update("mapa", $datamapa);
			return $result;
		}

	
}
?>