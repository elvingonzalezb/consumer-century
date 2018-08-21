<?php
    class Articulos_model extends CI_Model {
       public function __construct()
        {
                parent::__construct();
        }
        public function getArticulos($id) {
            $this->db->where('id', $id);
            $query =  $this->db->get('articulos');
            return $query->row();            
        }
        
       public function getCategorias($limite) {
            $this->db->where('estado', 'A');
            $query =  $this->db->get("categorias_articulos", $limite, 0);
            return $query->result();
        }
        
       public function getLastArticulos($limite) {
            $this->db->where('state', '1');
            $this->db->order_by("created", "desc");
            $query = $this->db->get("articulos", $limite, 0);
            return $query->result();
       }

     public function getArticulosDestacados() {
            $sql = "SELECT a.id as id, a.url as url, a.articulo as articulo, 
            a.imagen as imagen, count(*) as cuenta FROM articulos 
            a INNER JOIN categorias b 
            WHERE a.id=b.id_categoria AND a.estado='A' 
            GROUP BY b.id_categoria 
            ORDER BY cuenta 
            DESC LIMIT 8";
            $query =  $this->db->query($sql);
            return $query->result();
        }
       public function getUltimasEmpresas($cant) {
            $sql = "SELECT a.id, a.nombre, a.url, a.logo, b.banner FROM empresas a 
            INNER JOIN banners b 
            WHERE a.id=b.id_empresa 
                AND b.banner!='' 
                AND b.banner!='no_banner.jpg' 
            GROUP BY a.id 
            ORDER BY a.fecha_ingreso 
            DESC LIMIT $cant";
            $query = $this->db->query($sql);
            return $query->result();
        }

 
       }
?>