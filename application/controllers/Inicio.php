<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Inicio extends CI_Controller {

		function __construct() {
		    parent::__construct();
			$this->load->model('frontend/Generales_model'); 
			$this->load->model('frontend/Inicio_model'); 
		}

		public function index()
		{
			$dataPrincipal = array();
			$seccion = 'inicio';
			$contenido = $this->Generales_model->getSeccion('inicio');
			$dataPrincipal['title'] = $contenido->title;
			$dataPrincipal['keywords'] = $contenido->keywords;
			$dataPrincipal['description'] = $contenido->description;
			$dataPrincipal['titulo'] = $contenido->titulo;
			$dataPrincipal['texto'] = $contenido->texto;

			$dataPrincipal['cuerpo'] = 'inicio_view';
			$dataPrincipal['seccion'] = 'inicio';
			
			$dataPrincipal['banners'] = $this->Inicio_model->getBanners();	
			$dataPrincipal['servicios'] = $this->Inicio_model->getServicios(8);
			$dataPrincipal['ultimos'] = $this->Inicio_model->getLastArticulos(4);	
            $dataPrincipal['nosotros'] = $this->Inicio_model->getTextosGenerales('nosotros');
            $dataPrincipal['paralax'] = $this->Inicio_model->getTextosGenerales('paralax');
            $dataPrincipal['texto_servicio'] = $this->Inicio_model->getTextosGenerales('texto_servicio');
            $dataPrincipal['categorias'] = $this->Inicio_model->getCategorias(2);
            $dataPrincipal['clientes'] = $this->Inicio_model->getClientes(2);
			$data = array();
			$data['title'] = $contenido->title;
			$data['keywords'] = $contenido->keywords;
			$data['description'] = $contenido->description;
			$dataPrincipal['header'] = $this->load->view('frontend/includes/header_view', $data, true);
			$dataPrincipal['footer'] = $this->load->view('frontend/includes/footer_view', $data, true);
			
			$this->load->view("frontend/includes/template", $dataPrincipal);
		}

	}
