<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Categoria extends CI_Controller {

		function __construct() {
		    parent::__construct();
			$this->load->model('frontend/Generales_model'); 
			$this->load->model('frontend/Categoria_model'); 
		}

		public function index()
		{
			$dataPrincipal = array();
			$seccion = 'categoria';
			$contenido = $this->Generales_model->getSeccion('categoria');
			$dataPrincipal['title'] = $contenido->title;
			$dataPrincipal['keywords'] = $contenido->keywords;
			$dataPrincipal['description'] = $contenido->description;
			$dataPrincipal['titulo'] = $contenido->titulo;
			$dataPrincipal['texto'] = $contenido->texto;

			$dataPrincipal['cuerpo'] = 'categoria_view';
			$dataPrincipal['seccion'] = 'categoria';
			
			$dataPrincipal['banners'] = $this->Categoria_model->getBanners();	
			$dataPrincipal['servicios'] = $this->Categoria_model->getServicios(8);
			$dataPrincipal['ultimos'] = $this->Categoria_model->getLastArticulos(4);	
            $dataPrincipal['nosotros'] = $this->Categoria_model->getTextosGenerales('nosotros');
            $dataPrincipal['paralax'] = $this->Categoria_model->getTextosGenerales('paralax');
            $dataPrincipal['texto_servicio'] = $this->Categoria_model->getTextosGenerales('texto_servicio');
            $dataPrincipal['categorias'] = $this->Categoria_model->getCategorias(2);
            $dataPrincipal['clientes'] = $this->Categoria_model->getClientes(2);
			$data = array();
			$data['title'] = $contenido->title;
			$data['keywords'] = $contenido->keywords;
			$data['description'] = $contenido->description;
			$dataPrincipal['header'] = $this->load->view('frontend/includes/header_view', $data, true);
			$dataPrincipal['footer'] = $this->load->view('frontend/includes/footer_view', $data, true);
			
			$this->load->view("frontend/includes/template", $dataPrincipal);
		}

	}
