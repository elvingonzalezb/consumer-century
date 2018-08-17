<?php 
	class Servicios extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library("validacion_mainpanel");
			$this->load->model("mainpanel/Servicios_model");
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
	        $datos2["current_section"] ="servicios";
	        $data['menu'] = $this->load->view('mainpanel/includes/menu', $datos2, true);
	        $dataPrincipal['header'] = $this->load->view('mainpanel/includes/header_view', $data, true);
	        $data['modal'] = $this->load->view('mainpanel/includes/modal_delete', $datos2, true);
	        $dataPrincipal['footer'] = $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $dataPrincipal["cuerpo"]="servicios/index_view";
	        $noticias = $this->Servicios_model->getLista();
	        $dataPrincipal["noticias"] = $noticias;
	        $this->load->view("mainpanel/includes/template", $dataPrincipal);
		}

		public function nuevo()
		{			
	        $this->validacion_mainpanel->validacion_login();
	        // GENERAL
	        $theme = $this->config->item('admin_theme');
	        $data['theme'] = $theme;
	        $datos2 = array();
	        $datos2["current_section"] ="servicios";
	        $data['menu'] = $this->load->view('mainpanel/includes/menu', $datos2, true);
	        $dataPrincipal['header'] = $this->load->view('mainpanel/includes/header_view', $data, true);
	        $data['modal'] = $this->load->view('mainpanel/includes/modal_delete', $datos2, true);
	        $dataPrincipal['footer'] = $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $dataPrincipal["cuerpo"]="servicios/nuevo_view";
	      
			$this->load->view("mainpanel/includes/template", $dataPrincipal);
		}

		public function grabar()
		{
			$this->validacion_mainpanel->validacion_login();
			// grabar los datos
			$data["titulo"]	   	   = $this->input->post("titulo");
			$data["url"]  		   = $this->input->post("url");
			$data["fulltext"] 	   = $this->input->post("fulltext");
			$data["state"]         = $this->input->post("state");
			$data["created"] 	   = dmY_2_Ymd($this->input->post("created"));
			$data["destacado"]     = $this->input->post("destacado");  
			$data["id_autor"]      = $this->session->userdata('id_admin');
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
	            $this->my_upload->process('./files/servicios/');
	            
	       
	            if($this->my_upload->processed == true)
	            {
	            	$data["imagen"] = $this->my_upload->file_dst_name;
	            	$this->my_upload->clean();
	            }
	            else
	            {
	            	$error= $this->my_upload->error;
	            	$this->session->set_userdata("error", 'IMAGEN:'.$error);
	            	redirect("mainpanel/servicios/nuevo");
	            }
			}
			else
			{
	     	}
	        $last_id = $this->Servicios_model->grabar($data);

	      
	        if($last_id>0)
	        {
	         	$this->session->set_userdata("success", "Se proceso correctamente la información");
				redirect("mainpanel/servicios/listado");
	        }
	        else
	        {
	         	$error="Ocurrio un error al procesar la información";
	         	$this->session->set_userdata("error", $error);
	         	redirect("mainpanel/servicios/nuevo");
	        }
		}

		public function edit($id)
		{
	        $this->validacion_mainpanel->validacion_login();
	        // GENERAL
	        $theme = $this->config->item('admin_theme');
	        $data['theme'] = $theme;
	        $datos2 = array();
	        $datos2["current_section"] ="servicios";
	        $data['menu'] = $this->load->view('mainpanel/includes/menu', $datos2, true);
	        $dataPrincipal['header'] = $this->load->view('mainpanel/includes/header_view', $data, true);
	        $data['modal'] = $this->load->view('mainpanel/includes/modal_delete', $datos2, true);
	        $dataPrincipal['footer'] = $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $dataPrincipal["cuerpo"]="servicios/edit_view";
	        // *****************************************************************
	        // 
	        // EDIT BANNER
	        $servicio = $this->Servicios_model->get($id);
	        $dataPrincipal['servicio'] = $servicio;
	     

	 
	        $this->load->view("mainpanel/includes/template", $dataPrincipal);
   		}

   		public function actualizar()
   		{
	        $this->validacion_mainpanel->validacion_login();
	        // EDITAR Clientes
	        $data = array();
	        $data["titulo"]	   	   = $this->input->post("titulo");
			$data["url"]  		   = $this->input->post("url");
			$data["fulltext"] 	   = $this->input->post("fulltext");
			$data["state"]         = $this->input->post("state");
			$data["created"] 	   = dmY_2_Ymd($this->input->post("created"));
			$data["destacado"]     = $this->input->post("destacado");  
			$data["id_autor"]      = $this->session->userdata('id_admin');
			$data["title"]         = $this->input->post("title");
			$data["description"]   = $this->input->post("description");
			$data["keywords"]      = $this->input->post("keywords");
		    $id_servicio           = $this->input->post('id');
		    //$name_image = date("YmdHis");
	        $this->my_upload->upload($_FILES["imgservicio"]);
	        if ( $this->my_upload->uploaded == true  )
	        {
	            $this->my_upload->allowed          		= array('image/*');
            	//$this->my_upload->file_new_name_body 	= $name_image;
	            $this->my_upload->image_resize     		= true;
	            $this->my_upload->image_ratio_crop 		= true;
	            $this->my_upload->image_x          		= 360;
	            $this->my_upload->image_y          		= 220;
	            $this->my_upload->process('./files/servicios/');

	       
	            if ($this->my_upload->processed == true )
	            {
	                $data['imagen'] = $this->my_upload->file_dst_name;
	                $this->my_upload->clean();
	            }
	            else
	            {
	                $error = $this->my_upload->error;
	                $this->session->set_userdata("error",'FOTO: '.$error);  
	                redirect('mainpanel/servicios/edit/'.$id_servicio); 
	            }
	        }
	        $result=$this->Servicios_model->update($id_servicio, $data);

	     
	        if($result==true)
	        {
	            $this->session->set_userdata("success",'Se procesó correctamente la información');
	            redirect('mainpanel/servicios/edit/'.$id_servicio);
	        }
	        else
	        {
	            $error='Ocurrió un error al procesar su información '.$error;
	            $this->session->set_userdata("error",$error);
	            redirect('mainpanel/servicios/edit/'.$id_servicio);            
	        }  
   		}
		
   		public function borrar($id)
   		{
   			$this->validacion_mainpanel->validacion_login();
   			$secciones= $this->Servicios_model->get($id);
   			$imagen = $secciones->imagen;
	   			@unlink("files/servicios/".$imagen);
	   			@unlink("files/servicios/medianas/".$imagen);
	   			@unlink("files/servicios/thumbs/".$imagen);
	   			$result = $this->Servicios_model->delete($id);
   			if($result==true)
   			{
   				$this->session->set_userdata("success", "Su información se procesó correctamente");
   				redirect("mainpanel/servicios/listado");
   			}
   			else
   			{
   				$this->session->set_userdata("error", "Ocurrió un error al procesar su información");
   				redirect("mainpanel/servicios/listado");
   			}
   		}

   		public function modifica() {
   			$noticias = $this->Servicios_model->getLista();
   			$i=1;
   			foreach($noticias as $noticia)
   			{
   				$id = $noticia->id;
   				$images = explode("|", $noticia->images);
   				$imagen = $images[0];
   				if($imagen!="")
   				{
   					echo $i.'.- '.$imagen.'<br>';
   					$i++;
   				}   				   				
   			}
   		}

	    public function corrigeFotos() {
			$servicios = $this->Servicios_model->getFotos();
			foreach ($servicios as $articulo) {
				//echo '<img src="'.base_url().'files/servicios/originales/'.$articulo->imagen.'"><br>';
				$this->my_upload->upload('./files/servicios/originales/'.$articulo->imagen);
		        if($this->my_upload->uploaded == true)
		        {
		            $this->my_upload->allowed               = array('image/*');
		            $this->my_upload->image_resize          = true;
		            $this->my_upload->image_ratio_crop      = true;
		            $this->my_upload->image_x               = 450;
		            $this->my_upload->image_y               = 300;
		            $this->my_upload->process('./files/servicios/medianas/');

		            $this->my_upload->image_resize          = true;
		            $this->my_upload->image_ratio_crop      = true;
		            $this->my_upload->image_x               = 75;
		            $this->my_upload->image_y               = 75;
		            $this->my_upload->process('./files/servicios/thumbs/');



		            //echo '<img src="'.base_url().'files/servicios/medianas/'.$articulo->imagen.'"><br><br>';
				}
			}
			echo '<h1>Termino</h1>'; die();
		}

	}
?>