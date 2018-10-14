<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Flota extends CI_Controller {

		function __construct() {
		    parent::__construct();
			$this->load->model('frontend/Generales_model'); 
			$this->load->model('frontend/Flota_model'); 
		}

		public function index()
		{
			$dataPrincipal = array();
			$seccion = 'flota';
			$dataPrincipal['seccion'] = $seccion;

			$contenido = $this->Generales_model->getSeccion($seccion);
			$dataPrincipal['titulo'] = $contenido->titulo;
			$dataPrincipal['texto'] = $contenido->texto;
			$dataPrincipal['cuerpo'] = 'flota_view';

			$dataPrincipal['textosweb'] = $this->Generales_model->getTextosWeb($seccion);
			$dataPrincipal['flotas'] = $this->Flota_model->getFlota(6);
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
