<?php 
	class Articulos extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library("validacion_mainpanel");
			$this->load->model("mainpanel/Articulos_model");
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
	        $datos2["current_section"] ="articulos";
	        $data['menu'] = $this->load->view('mainpanel/includes/menu', $datos2, true);
	        $dataPrincipal['header'] = $this->load->view('mainpanel/includes/header_view', $data, true);
	        $data['modal'] = $this->load->view('mainpanel/includes/modal_delete', $datos2, true);
	        $dataPrincipal['footer'] = $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $dataPrincipal["cuerpo"]="articulos/index_view";
	        $noticias = $this->Articulos_model->getLista();
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
	        $datos2["current_section"] ="articulos";
	        $data['menu'] = $this->load->view('mainpanel/includes/menu', $datos2, true);
	        $dataPrincipal['header'] = $this->load->view('mainpanel/includes/header_view', $data, true);
	        $data['modal'] = $this->load->view('mainpanel/includes/modal_delete', $datos2, true);
	        $dataPrincipal['footer'] = $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $dataPrincipal["cuerpo"]="articulos/nuevo_view";
	        $dataPrincipal["categorias"] = $this->Articulos_model->categorias();
	       
			$this->load->view("mainpanel/includes/template", $dataPrincipal);
		}

		public function grabar()
		{
			$this->validacion_mainpanel->validacion_login();
			// grabar los datos
			$data["id_categoria"]  = $this->input->post('id_categoria');
			$data["titulo"]	   	   = $this->input->post("titulo");
			$data["url"]  		   = $this->input->post("url");
			$data["introtext"] 	   = $this->input->post("introtext");
			$data["fulltext"] 	   = $this->input->post("fulltext");
			$data["state"]         = $this->input->post("state");
			$data["created"] 	   = dmY_2_Ymd($this->input->post("created"));
			$data["destacado"]         = $this->input->post("destacado");  
			$data["id_autor"]      = $this->session->userdata('id_admin');
			$data["title"]   = $this->input->post("title");
			$data["description"]        = $this->input->post("description");
			$data["keywords"]        = $this->input->post("keywords");
			//$name_image = date("YmdHis");
			$this->my_upload->upload($_FILES["imagen"]);
			if($this->my_upload->uploaded == true)
			{
	            $this->my_upload->allowed          		= array('image/*');
            	//$this->my_upload->file_new_name_body 	= $name_image;
	            $this->my_upload->image_resize     		= true;
	            $this->my_upload->image_ratio_crop 		= true;
	            $this->my_upload->image_x          		= 900;
	            $this->my_upload->image_y          		= 600;
	            $this->my_upload->process('./files/articulos/');
	            
	            $this->my_upload->allowed          		= array('image/*');
            	//$this->my_upload->file_new_name_body 	= $name_image;
	            $this->my_upload->image_resize     		= true;
	            $this->my_upload->image_ratio_crop 		= true;
	            $this->my_upload->image_x          		= 450;
	            $this->my_upload->image_y          		= 300;
	            $this->my_upload->process('./files/articulos/medianas/');
	            
	            $this->my_upload->allowed          		= array('image/*');
            	//$this->my_upload->file_new_name_body 	= $name_image;
	            $this->my_upload->image_resize     		= true;
	            $this->my_upload->image_ratio_crop 		= true;
	            $this->my_upload->image_x          		= 75;
	            $this->my_upload->image_y          		= 75;
	            $this->my_upload->process('./files/articulos/thumbs/');
	            if($this->my_upload->processed == true)
	            {
	            	$data["imagen"] = $this->my_upload->file_dst_name;
	            	$this->my_upload->clean();
	            }
	            else
	            {
	            	$error= $this->my_upload->error;
	            	$this->session->set_userdata("error", 'IMAGEN:'.$error);
	            	redirect("mainpanel/articulos/nuevo");
	            }
			}
			else
			{
	     	}
	        $last_id = $this->Articulos_model->grabar($data);

	      
	        if($last_id>0)
	        {
	         	$this->session->set_userdata("success", "Se proceso correctamente la información");
				redirect("mainpanel/articulos/listado");
	        }
	        else
	        {
	         	$error="Ocurrio un error al procesar la información";
	         	$this->session->set_userdata("error", $error);
	         	redirect("mainpanel/articulos/nuevo");
	        }
		}

		public function edit($id)
		{
	        $this->validacion_mainpanel->validacion_login();
	        // GENERAL
	        $theme = $this->config->item('admin_theme');
	        $data['theme'] = $theme;
	        $datos2 = array();
	        $datos2["current_section"] ="articulos";
	        $data['menu'] = $this->load->view('mainpanel/includes/menu', $datos2, true);
	        $dataPrincipal['header'] = $this->load->view('mainpanel/includes/header_view', $data, true);
	        $data['modal'] = $this->load->view('mainpanel/includes/modal_delete', $datos2, true);
	        $dataPrincipal['footer'] = $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $dataPrincipal["cuerpo"]="articulos/edit_view";
	        // *****************************************************************
	        // 
	        // EDIT BANNER
	        $articulo = $this->Articulos_model->get($id);
	        $dataPrincipal['articulo'] = $articulo;
	        $dataPrincipal["categorias"] = $this->Articulos_model->categorias();

	 
	        $this->load->view("mainpanel/includes/template", $dataPrincipal);
   		}

   		public function actualizar()
   		{
	        $this->validacion_mainpanel->validacion_login();
	        // EDITAR Clientes
	        $data = array();
	        $data["id_categoria"]  = $this->input->post('id_categoria');
			$data["titulo"]	   	   = $this->input->post("titulo");
			$data["url"]  		   = $this->input->post("url");
			$data["introtext"] 	   = $this->input->post("introtext");
			$data["fulltext"] 	   = $this->input->post("fulltext");
			$data["state"]         = $this->input->post("state");
			$data["created"] 	   = dmY_2_Ymd($this->input->post("created"));
			$data["destacado"]         = $this->input->post("destacado");  
			$data["id_autor"]      = $this->session->userdata('id_admin');
			$data["title"]   = $this->input->post("title");
			$data["description"]        = $this->input->post("description");
			$data["keywords"]        = $this->input->post("keywords");
		    $id_articulo           = $this->input->post('id');
		    //$name_image = date("YmdHis");
	        $this->my_upload->upload($_FILES["imgnovedad"]);
	        if ( $this->my_upload->uploaded == true  )
	        {
	            $this->my_upload->allowed          		= array('image/*');
            	//$this->my_upload->file_new_name_body 	= $name_image;
	            $this->my_upload->image_resize     		= true;
	            $this->my_upload->image_ratio_crop 		= true;
	            $this->my_upload->image_x          		= 900;
	            $this->my_upload->image_y          		= 600;
	            $this->my_upload->process('./files/articulos/');

	            $this->my_upload->allowed         	 	= array('image/*');
            	//$this->my_upload->file_new_name_body 	= $name_image;
	            $this->my_upload->image_resize     		= true;
	            $this->my_upload->image_ratio_crop 		= true;
	            $this->my_upload->image_x          		= 450;
	            $this->my_upload->image_y          		= 300;
	            $this->my_upload->process('./files/articulos/medianas/');

	            $this->my_upload->allowed          		= array('image/*');
            	//$this->my_upload->file_new_name_body 	= $name_image;
	            $this->my_upload->image_resize     		= true;
	            $this->my_upload->image_ratio_crop 		= true;
	            $this->my_upload->image_x          		= 75;
	            $this->my_upload->image_y         		= 75;
	            $this->my_upload->process('./files/articulos/thumbs/');
	            if ($this->my_upload->processed == true )
	            {
	                $data['imagen'] = $this->my_upload->file_dst_name;
	                $this->my_upload->clean();
	            }
	            else
	            {
	                $error = $this->my_upload->error;
	                $this->session->set_userdata("error",'FOTO: '.$error);  
	                redirect('mainpanel/articulos/edit/'.$id_articulo); 
	            }
	        }
	        $result=$this->Articulos_model->update($id_articulo, $data);

	     
	        if($result==true)
	        {
	            $this->session->set_userdata("success",'Se procesó correctamente la información');
	            redirect('mainpanel/articulos/edit/'.$id_articulo);
	        }
	        else
	        {
	            $error='Ocurrió un error al procesar su información '.$error;
	            $this->session->set_userdata("error",$error);
	            redirect('mainpanel/articulos/edit/'.$id_articulo);            
	        }  
   		}
		
   		public function borrar($id)
   		{
   			$this->validacion_mainpanel->validacion_login();
   			$secciones= $this->Articulos_model->get($id);
   			$imagen = $secciones->imagen;
	   			@unlink("files/articulos/".$imagen);
	   			@unlink("files/articulos/medianas/".$imagen);
	   			@unlink("files/articulos/thumbs/".$imagen);
	   			$result = $this->Articulos_model->delete($id);
   			if($result==true)
   			{
   				$this->session->set_userdata("success", "Su información se procesó correctamente");
   				redirect("mainpanel/articulos/listado");
   			}
   			else
   			{
   				$this->session->set_userdata("error", "Ocurrió un error al procesar su información");
   				redirect("mainpanel/articulos/listado");
   			}
   		}

   		public function modifica() {
   			$noticias = $this->Articulos_model->getLista();
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


   		/*********************** CATEGORIAS ***************************/
   		/*********************** CATEGORIAS ***************************/
   		/*********************** CATEGORIAS ***************************/
   		/*********************** CATEGORIAS ***************************/

	    public function categorias() {
	        $this->validacion_mainpanel->validacion_login();
	        // GENERAL
	        $theme = $this->config->item('admin_theme');
	        $data['theme'] = $theme;
	        $datos2 = array();
	        $datos2["current_section"] = "articulos";        
	        $data['menu'] = $this->load->view('mainpanel/includes/menu', $datos2, true);
	        $dataPrincipal['header'] = $this->load->view('mainpanel/includes/header_view', $data, true);
	        $data['modal'] = $this->load->view('mainpanel/includes/modal_delete', $datos2, true);
	        $dataPrincipal['footer'] = $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $dataPrincipal["cuerpo"]="articulos/index_categorias_view";
	        // LISTA BANNERS
	        $dataPrincipal['categorias'] = $this->Articulos_model->getListaCategorias();
	        $resultado = $this->uri->segment(4);
	        $dataPrincipal["resultado"] = $resultado;
	        $this->load->view("mainpanel/includes/template", $dataPrincipal);        
	    }

	    public function nuevacategoria() {
	        $this->validacion_mainpanel->validacion_login();
	        // GENERAL
	        $theme = $this->config->item('admin_theme');
	        $data['theme'] = $theme;
	        $datos2 = array();
	        $datos2["current_section"] = "articulos";        
	        $data['menu'] = $this->load->view('mainpanel/includes/menu', $datos2, true);
	        $dataPrincipal['header'] = $this->load->view('mainpanel/includes/header_view', $data, true);
	        $data['modal'] = '';
	        $dataPrincipal['footer'] = $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $dataPrincipal["cuerpo"]="articulos/nueva_categoria_view";
	        // NUEVO BANNER
	        $resultado = $this->uri->segment(4);
	        if($resultado=="error")
	        {
	            $error = $this->uri->segment(5);
	        }
	        else
	        {
	            $error = '';
	        }
	        $dataPrincipal["resultado"] = $resultado;
	        $dataPrincipal["error"] = $error;
	        $this->load->view("mainpanel/includes/template", $dataPrincipal);        
	    }

	    public function grabarCategoria() {
	        $this->validacion_mainpanel->validacion_login();
	        // GRABAR BANNER
	        $categoria  = $this->input->post('categoria');
	        $url        = $this->input->post('url');
	        $orden      = $this->input->post('orden');
	        $estado     = $this->input->post('estado');
	        $title      = $this->input->post('title');
	        $keywords   = $this->input->post('keywords');
	        $description= $this->input->post('description');
	      

	        $data = array(
	            'categoria'   => $categoria,
	            'url'         => $url,
	            'orden'       => $orden,
	            'estado'      => $estado,
	            'title'       => $title,
	            'keywords'    => $keywords,
	            'description' => $description
	            );
	        
	        $this->my_upload->upload($_FILES["imagen"]);
	        if($this->my_upload->uploaded == true)
	        {
	            $this->my_upload->allowed               = array('image/*');
	            //$this->my_upload->file_new_name_body  = $name_image;
	            $this->my_upload->image_resize          = true;
	            $this->my_upload->image_ratio_crop      = true;
	            $this->my_upload->image_x               = 1000;
	            $this->my_upload->image_y               = 500;
	            $this->my_upload->process('./files/categorias/');
	            if($this->my_upload->processed == true)
	            {
	                $data["banner"] = $this->my_upload->file_dst_name;
	                $this->my_upload->clean();
	            }
	            else
	            {
	                $error= $this->my_upload->error;
	                $this->session->set_userdata("error", 'IMAGEN:'.$error);
	                redirect("mainpanel/articulos/nuevacategoria/error/imagen");
	            }
	        }
	        else
	        {
	            $data["banner"] = 'imagen_ie.jpg';
	        }

	        $resultado = $this->Articulos_model->grabarCategoria($data);
	        if($resultado==1)
	        {
	            redirect('mainpanel/articulos/categorias/success');
	        }
	        else
	        {
	            redirect('mainpanel/articulos/nuevacategoria/error/bd');
	        }
	    }

	    public function editCategoria() {
	        $this->validacion_mainpanel->validacion_login();
	        // GENERAL
	        $theme = $this->config->item('admin_theme');
	        $data['theme'] = $theme;
	        $datos2 = array();
	        $datos2["current_section"] = "articulos";        
	        $data['menu'] = $this->load->view('mainpanel/includes/menu', $datos2, true);
	        $dataPrincipal['header'] = $this->load->view('mainpanel/includes/header_view', $data, true);
	        $data['modal'] = '';
	        $dataPrincipal['footer'] = $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $dataPrincipal["cuerpo"]="articulos/edit_categoria_view";
	        // EDIT BANNER
	        $id_cat = $this->uri->segment(4);
	        $resultado = $this->uri->segment(5);
	        $dataPrincipal['categoria'] = $this->Articulos_model->getCategoria($id_cat);
	        $dataPrincipal["resultado"] = $resultado;
	        $this->load->view("mainpanel/includes/template", $dataPrincipal);
	    }
	    
	    public function actualizarCategoria() {
	        $this->validacion_mainpanel->validacion_login();
	        // EDITAR BANNER
	        $id  		  = $this->input->post('id');
	        $categoria    = $this->input->post('categoria');
	        $url   		  = $this->input->post('url');
	        $orden        = $this->input->post('orden');
	        $estado       = $this->input->post('estado');
	        $title        = $this->input->post('title');
	        $keywords     = $this->input->post('keywords');
	        $description  = $this->input->post('description');
	      

	        $data = array(
	            'categoria'   => $categoria,
	            'url'         =>  $url,
	            'orden'       => $orden,
	            'estado'      => $estado,
	            'title'       => $title,
	            'keywords'    => $keywords,
	            'description' => $description
	        );

	        $this->my_upload->upload($_FILES["imagen"]);
	        if($this->my_upload->uploaded == true)
	        {
	            $this->my_upload->allowed               = array('image/*');
	            //$this->my_upload->file_new_name_body  = $name_image;
	            $this->my_upload->image_resize          = true;
	            $this->my_upload->image_ratio_crop      = true;
	            $this->my_upload->image_x               = 500;
	            $this->my_upload->image_y               = 500;
	            $this->my_upload->process('./files/categorias/');
	            if($this->my_upload->processed == true)
	            {
	                $data["banner"] = $this->my_upload->file_dst_name;
	                $this->my_upload->clean();
	            }
	            else
	            {
	                $error= $this->my_upload->error;
	                $this->session->set_userdata("error", 'IMAGEN:'.$error);
	                redirect("mainpanel/articulos/edit/".$id);
	            }
	        }
	        else
	        {
	            
	        }

	        $this->Articulos_model->updateCategoria($id, $data);
	        redirect('mainpanel/articulos/editCategoria/'.$id.'/success');
	    }
	    
	    public function deleteCategoria() {
	        $this->validacion_mainpanel->validacion_login();
	        $id = $this->uri->segment(4);
	        $this->Articulos_model->deleteCategoria($id);
	        redirect('mainpanel/articulos/categorias/success');
	    }

	 

		    public function corrigeFotos() {
			$articulos = $this->Articulos_model->getFotos();
			foreach ($articulos as $articulo) {
				//echo '<img src="'.base_url().'files/articulos/originales/'.$articulo->imagen.'"><br>';
				$this->my_upload->upload('./files/articulos/originales/'.$articulo->imagen);
		        if($this->my_upload->uploaded == true)
		        {
		            $this->my_upload->allowed               = array('image/*');
		            $this->my_upload->image_resize          = true;
		            $this->my_upload->image_ratio_crop      = true;
		            $this->my_upload->image_x               = 450;
		            $this->my_upload->image_y               = 300;
		            $this->my_upload->process('./files/articulos/medianas/');

		            $this->my_upload->image_resize          = true;
		            $this->my_upload->image_ratio_crop      = true;
		            $this->my_upload->image_x               = 75;
		            $this->my_upload->image_y               = 75;
		            $this->my_upload->process('./files/articulos/thumbs/');



		            //echo '<img src="'.base_url().'files/articulos/medianas/'.$articulo->imagen.'"><br><br>';
				}
			}
			echo '<h1>Termino</h1>'; die();
		}

	}
?>