<?php 
	class Flota_model extends CI_Model
	{
		function __construct() 
		{
			parent::__construct();
		}
		public function getFotos() 
		{
			$sql = "SELECT id, imagen FROM flota";
			$query = $this->db->query($sql);
			return $query->result();
		}

        public function getLista() 
        {
            $this->db->order_by('orden', 'desc');
            $query = $this->db->get('flota');
            return $query->result();
        }

		public function grabar($data)
		{
			$resultado = $this->db->insert("flota", $data);
			$id = $this->db->insert_id();
            return $id;
		}

		public function get($id)
		{
			$this->db->where("id", $id);
			$query=$this->db->get("flota");
			return $query->row();
		}

		public function update($id, $data) 
		{
			$this->db->where("id", $id);
			$result = $this->db->update("flota", $data);
			return $result;
		}

		public function delete($id)
		{
		   $this->db->where('id', $id);
		   $query = $this->db->delete("flota");
		   return $query;
		}

  

	}
?>