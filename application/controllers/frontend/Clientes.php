<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Clientes extends CI_Controller {

		function __construct() {
		    parent::__construct();
			$this->load->model('frontend/Generales_model'); 
			$this->load->model('frontend/Clientes_model'); 
		}

		public function index()
		{
			$dataPrincipal = array();
			$seccion = 'clientes';
			$dataPrincipal['seccion'] = $seccion;

			$contenido = $this->Generales_model->getSeccion($seccion);
			$dataPrincipal['titulo'] = $contenido->titulo;
			$dataPrincipal['texto'] = $contenido->texto;
			$dataPrincipal['cuerpo'] = 'clientes_view';

			$dataPrincipal['textosweb'] = $this->Generales_model->getTextosWeb($seccion);
			$dataPrincipal['clientes'] = $this->Clientes_model->getClientes(8);
			$data = array();
			$data['seccion'] = $seccion;
			$data['title'] = $contenido->title;
			$data['keywords'] = $contenido->keywords;
			$data['description'] = $contenido->description;
			
			$dataPrincipal['header'] = $this->load->view('frontend/includes/header_view', $data, true);
			$dataPrincipal['footer'] = $this->load->view('frontend/includes/footer_view', $data, true);
			
			$this->load->view("frontend/includes/template", $dataPrincipal);
		}
	}
