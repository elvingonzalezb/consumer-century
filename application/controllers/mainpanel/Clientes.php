<?php 
	class Clientes extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library("validacion_mainpanel");
			$this->load->model("mainpanel/Clientes_model");
			$this->load->library('my_upload');
			$this->load->helper('generales_helper');
		}

		public function listado()
		{
	        $this->validacion_mainpanel->validacion_login();
	        // GENERAL
	        $theme = $this->config->item('admin_theme');
	        $data['theme'] = $theme;
	        $datos2 = array();
	        $datos2["current_section"] ="clientes";
	        $data['menu'] = $this->load->view('mainpanel/includes/menu', $datos2, true);
	        $dataPrincipal['header'] = $this->load->view('mainpanel/includes/header_view', $data, true);
	        $data['modal'] = $this->load->view('mainpanel/includes/modal_delete', $datos2, true);
	        $dataPrincipal['footer'] = $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $dataPrincipal["cuerpo"]="clientes/index_view";
	        $clientes = $this->Clientes_model->getLista();
	        $dataPrincipal["clientes"] = $clientes;
	        $this->load->view("mainpanel/includes/template", $dataPrincipal);
		}

		public function nuevo()
		{			
	        $this->validacion_mainpanel->validacion_login();
	        // GENERAL
	        $theme = $this->config->item('admin_theme');
	        $data['theme'] = $theme;
	        $datos2 = array();
	        $datos2["current_section"] ="clientes";
	        $data['menu'] = $this->load->view('mainpanel/includes/menu', $datos2, true);
	        $dataPrincipal['header'] = $this->load->view('mainpanel/includes/header_view', $data, true);
	        $data['modal'] = $this->load->view('mainpanel/includes/modal_delete', $datos2, true);
	        $dataPrincipal['footer'] = $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $dataPrincipal["cuerpo"]="clientes/nuevo_view";
	      
			$this->load->view("mainpanel/includes/template", $dataPrincipal);
		}

		public function grabar()
		{
			$this->validacion_mainpanel->validacion_login();
			// grabar los datos
			$data["nombre"]	   	   = $this->input->post("nombre");
			$data["url"]  		   = $this->input->post("url");
			$data["state"]         = $this->input->post("state");
			$data["orden"]         = $this->input->post("orden");
			$data["title"]  	   = $this->input->post("title");
			$data["description"]   = $this->input->post("description");
			$data["keywords"]      = $this->input->post("keywords");
			//$name_image = date("YmdHis");
			$this->my_upload->upload($_FILES["imagen"]);
			if($this->my_upload->uploaded == true)
			{
	            $this->my_upload->allowed          		= array('image/*');
            	//$this->my_upload->file_new_name_body 	= $name_image;
	            $this->my_upload->image_resize     		= true;
	            $this->my_upload->image_ratio_crop 		= true;
	            $this->my_upload->image_x          		= 360;
	            $this->my_upload->image_y          		= 220;
	            $this->my_upload->process('./files/clientes/');
	            
	       
	            if($this->my_upload->processed == true)
	            {
	            	$data["imagen"] = $this->my_upload->file_dst_name;
	            	$this->my_upload->clean();
	            }
	            else
	            {
	            	$error= $this->my_upload->error;
	            	$this->session->set_userdata("error", 'IMAGEN:'.$error);
	            	redirect("mainpanel/clientes/nuevo");
	            }
			}
			else
			{
	     	}
	        $last_id = $this->Clientes_model->grabar($data);

	      
	        if($last_id>0)
	        {
	         	$this->session->set_userdata("success", "Se proceso correctamente la información");
				redirect("mainpanel/clientes/listado");
	        }
	        else
	        {
	         	$error="Ocurrio un error al procesar la información";
	         	$this->session->set_userdata("error", $error);
	         	redirect("mainpanel/clientes/nuevo");
	        }
		}

		public function edit($id)
		{
	        $this->validacion_mainpanel->validacion_login();
	        // GENERAL
	        $theme = $this->config->item('admin_theme');
	        $data['theme'] = $theme;
	        $datos2 = array();
	        $datos2["current_section"] ="clientes";
	        $data['menu'] = $this->load->view('mainpanel/includes/menu', $datos2, true);
	        $dataPrincipal['header'] = $this->load->view('mainpanel/includes/header_view', $data, true);
	        $data['modal'] = $this->load->view('mainpanel/includes/modal_delete', $datos2, true);
	        $dataPrincipal['footer'] = $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $dataPrincipal["cuerpo"]="clientes/edit_view";
	        // *****************************************************************
	        // 
	        // EDIT BANNER
	        $cliente = $this->Clientes_model->get($id);
	        $dataPrincipal['cliente'] = $cliente;
	     	 
	        $this->load->view("mainpanel/includes/template", $dataPrincipal);
   		}

   		public function actualizar()
   		{
	        $this->validacion_mainpanel->validacion_login();
	        // EDITAR Clientes
	        $data = array();
			$data["nombre"]	   	   = $this->input->post("nombre");
			$data["url"]  		   = $this->input->post("url");
			$data["state"]         = $this->input->post("state");
			$data["orden"]         = $this->input->post("orden");
			$data["title"]  	   = $this->input->post("title");
			$data["description"]   = $this->input->post("description");
			$data["keywords"]      = $this->input->post("keywords");
		    $id_cliente            = $this->input->post('id');
		    //$name_image = date("YmdHis");
	        $this->my_upload->upload($_FILES["imgcliente"]);
	        if ( $this->my_upload->uploaded == true  )
	        {
	            $this->my_upload->allowed          		= array('image/*');
            	//$this->my_upload->file_new_name_body 	= $name_image;
	            $this->my_upload->image_resize     		= true;
	            $this->my_upload->image_ratio_crop 		= true;
	            $this->my_upload->image_x          		= 360;
	            $this->my_upload->image_y          		= 220;
	            $this->my_upload->process('./files/clientes/');

	       
	            if ($this->my_upload->processed == true )
	            {
	                $data['imagen'] = $this->my_upload->file_dst_name;
	                $this->my_upload->clean();
	            }
	            else
	            {
	                $error = $this->my_upload->error;
	                $this->session->set_userdata("error",'FOTO: '.$error);  
	                redirect('mainpanel/clientes/edit/'.$id_cliente); 
	            }
	        }
	        $result=$this->Clientes_model->update($id_cliente, $data);

	     
	        if($result==true)
	        {
	            $this->session->set_userdata("success",'Se procesó correctamente la información');
	            redirect('mainpanel/clientes/edit/'.$id_cliente);
	        }
	        else
	        {
	            $error='Ocurrió un error al procesar su información '.$error;
	            $this->session->set_userdata("error",$error);
	            redirect('mainpanel/clientes/edit/'.$id_cliente);            
	        }  
   		}
		
   		public function delete($id)
   		{
   			$this->validacion_mainpanel->validacion_login();
   			$secciones= $this->Clientes_model->get($id);
   			$imagen = $secciones->imagen;
	   			@unlink("files/clientes/".$imagen);
	   			$result = $this->Clientes_model->delete($id);
   			if($result==true)
   			{
   				$this->session->set_userdata("success", "Su información se procesó correctamente");
   				redirect("mainpanel/clientes/listado");
   			}
   			else
   			{
   				$this->session->set_userdata("error", "Ocurrió un error al procesar su información");
   				redirect("mainpanel/clientes/listado");
   			}
   		}

   		public function modifica() {
   			$clientes = $this->Clientes_model->getLista();
   			$i=1;
   			foreach($clientes as $cliente)
   			{
   				$id = $cliente->id;
   				$images = explode("|", $cliente->images);
   				$imagen = $images[0];
   				if($imagen!="")
   				{
   					echo $i.'.- '.$imagen.'<br>';
   					$i++;
   				}   				   				
   			}
   		}

	    public function corrigeFotos() {
			$clientes = $this->Clientes_model->getFotos();
			foreach ($clientes as $articulo) {
				//echo '<img src="'.base_url().'files/clientes/originales/'.$articulo->imagen.'"><br>';
				$this->my_upload->upload('./files/clientes/originales/'.$articulo->imagen);
		        if($this->my_upload->uploaded == true)
		        {
		            $this->my_upload->allowed               = array('image/*');
		            $this->my_upload->image_resize          = true;
		            $this->my_upload->image_ratio_crop      = true;
		            $this->my_upload->image_x               = 450;
		            $this->my_upload->image_y               = 300;
		            $this->my_upload->process('./files/clientes/medianas/');

		            $this->my_upload->image_resize          = true;
		            $this->my_upload->image_ratio_crop      = true;
		            $this->my_upload->image_x               = 75;
		            $this->my_upload->image_y               = 75;
		            $this->my_upload->process('./files/clientes/thumbs/');



		            //echo '<img src="'.base_url().'files/clientes/medianas/'.$articulo->imagen.'"><br><br>';
				}
			}
			echo '<h1>Termino</h1>'; die();
		}

	}
?>