<?php 
	class Clientes_model extends CI_Model
	{
		function __construct() 
		{
			parent::__construct();
		}
		public function getFotos() 
		{
			$sql = "SELECT id, imagen FROM clientes";
			$query = $this->db->query($sql);
			return $query->result();
		}

        public function getLista() 
        {
            $this->db->order_by('orden', 'desc');
            $query = $this->db->get('clientes');
            return $query->result();
        }

		public function grabar($data)
		{
			$resultado = $this->db->insert("clientes", $data);
			$id = $this->db->insert_id();
            return $id;
		}

		public function get($id)
		{
			$this->db->where("id", $id);
			$query=$this->db->get("clientes");
			return $query->row();
		}

		public function update($id, $data) 
		{
			$this->db->where("id", $id);
			$result = $this->db->update("clientes", $data);
			return $result;
		}

		public function delete($id)
		{
		   $this->db->where('id', $id);
		   $query = $this->db->delete("clientes");
		   return $query;
		}

  

	}
?>