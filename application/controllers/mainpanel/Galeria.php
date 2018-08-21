<?php 
	class Galeria extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library("validacion_mainpanel");
			$this->load->model("mainpanel/Galeria_model");
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
	        $datos2["current_section"] ="galeria";
	        $data['menu'] = $this->load->view('mainpanel/includes/menu', $datos2, true);
	        $dataPrincipal['header'] = $this->load->view('mainpanel/includes/header_view', $data, true);
	        $data['modal'] = $this->load->view('mainpanel/includes/modal_delete', $datos2, true);
	        $dataPrincipal['footer'] = $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $dataPrincipal["cuerpo"]="galeria/index_view";
	        $galerias = $this->Galeria_model->getLista();
	        $dataPrincipal["galerias"] = $galerias;
	        $this->load->view("mainpanel/includes/template", $dataPrincipal);
		}

		public function nuevo()
		{			
	        $this->validacion_mainpanel->validacion_login();
	        // GENERAL
	        $theme = $this->config->item('admin_theme');
	        $data['theme'] = $theme;
	        $datos2 = array();
	        $datos2["current_section"] ="galeria";
	        $data['menu'] = $this->load->view('mainpanel/includes/menu', $datos2, true);
	        $dataPrincipal['header'] = $this->load->view('mainpanel/includes/header_view', $data, true);
	        $data['modal'] = $this->load->view('mainpanel/includes/modal_delete', $datos2, true);
	        $dataPrincipal['footer'] = $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $dataPrincipal["cuerpo"]="galeria/nuevo_view";
	      
			$this->load->view("mainpanel/includes/template", $dataPrincipal);
		}

		public function grabar()
		{
			$this->validacion_mainpanel->validacion_login();
			// grabar los datos
			$data["titulo"]	   	   = $this->input->post("titulo");
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
	            $this->my_upload->image_x          		= 1200;
	            $this->my_upload->image_y          		= 760;
	            $this->my_upload->process('./files/galeria/');
	            
	       
	            if($this->my_upload->processed == true)
	            {
	            	$data["imagen"] = $this->my_upload->file_dst_name;
	            	$this->my_upload->clean();
	            }
	            else
	            {
	            	$error= $this->my_upload->error;
	            	$this->session->set_userdata("error", 'IMAGEN:'.$error);
	            	redirect("mainpanel/galeria/nuevo");
	            }
			}
			else
			{
	     	}
	        $last_id = $this->Galeria_model->grabar($data);

	      
	        if($last_id>0)
	        {
	         	$this->session->set_userdata("success", "Se proceso correctamente la información");
				redirect("mainpanel/galeria/listado");
	        }
	        else
	        {
	         	$error="Ocurrio un error al procesar la información";
	         	$this->session->set_userdata("error", $error);
	         	redirect("mainpanel/galeria/nuevo");
	        }
		}

		public function edit($id)
		{
	        $this->validacion_mainpanel->validacion_login();
	        // GENERAL
	        $theme = $this->config->item('admin_theme');
	        $data['theme'] = $theme;
	        $datos2 = array();
	        $datos2["current_section"] ="galeria";
	        $data['menu'] = $this->load->view('mainpanel/includes/menu', $datos2, true);
	        $dataPrincipal['header'] = $this->load->view('mainpanel/includes/header_view', $data, true);
	        $data['modal'] = $this->load->view('mainpanel/includes/modal_delete', $datos2, true);
	        $dataPrincipal['footer'] = $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $dataPrincipal["cuerpo"]="galeria/edit_view";
	        // *****************************************************************
	        // 
	        // EDIT BANNER
	        $galeria = $this->Galeria_model->get($id);
	        $dataPrincipal['galeria'] = $galeria;
	     	 
	        $this->load->view("mainpanel/includes/template", $dataPrincipal);
   		}

   		public function actualizar()
   		{
	        $this->validacion_mainpanel->validacion_login();
	        // EDITAR galeria
	        $data = array();
			$data["titulo"]	   	   = $this->input->post("titulo");
			$data["url"]  		   = $this->input->post("url");
			$data["state"]         = $this->input->post("state");
			$data["orden"]         = $this->input->post("orden");
			$data["title"]  	   = $this->input->post("title");
			$data["description"]   = $this->input->post("description");
			$data["keywords"]      = $this->input->post("keywords");
		    $id_galeria            = $this->input->post('id');
		    //$name_image = date("YmdHis");
	        $this->my_upload->upload($_FILES["imggaleria"]);
	        if ( $this->my_upload->uploaded == true  )
	        {
	            $this->my_upload->allowed          		= array('image/*');
            	//$this->my_upload->file_new_name_body 	= $name_image;
	            $this->my_upload->image_resize     		= true;
	            $this->my_upload->image_ratio_crop 		= true;
	            $this->my_upload->image_x          		= 1200;
	            $this->my_upload->image_y          		= 760;
	            $this->my_upload->process('./files/galeria/');

	       
	            if ($this->my_upload->processed == true )
	            {
	                $data['imagen'] = $this->my_upload->file_dst_name;
	                $this->my_upload->clean();
	            }
	            else
	            {
	                $error = $this->my_upload->error;
	                $this->session->set_userdata("error",'FOTO: '.$error);  
	                redirect('mainpanel/galeria/edit/'.$id_galeria); 
	            }
	        }
	        $result=$this->Galeria_model->update($id_galeria, $data);

	     
	        if($result==true)
	        {
	            $this->session->set_userdata("success",'Se procesó correctamente la información');
	            redirect('mainpanel/galeria/edit/'.$id_galeria);
	        }
	        else
	        {
	            $error='Ocurrió un error al procesar su información '.$error;
	            $this->session->set_userdata("error",$error);
	            redirect('mainpanel/galeria/edit/'.$id_galeria);            
	        }  
   		}
		
   		public function delete($id)
   		{
   			$this->validacion_mainpanel->validacion_login();
   			$secciones= $this->Galeria_model->get($id);
   			$imagen = $secciones->imagen;
	   			@unlink("files/galeria/".$imagen);
	   			$result = $this->Galeria_model->delete($id);
   			if($result==true)
   			{
   				$this->session->set_userdata("success", "Su información se procesó correctamente");
   				redirect("mainpanel/galeria/listado");
   			}
   			else
   			{
   				$this->session->set_userdata("error", "Ocurrió un error al procesar su información");
   				redirect("mainpanel/galeria/listado");
   			}
   		}

   		

	   

	}
?>