<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Servicios extends CI_Controller {

		function __construct() {
		    parent::__construct();
			$this->load->model('frontend/Generales_model'); 
			$this->load->model('frontend/Servicios_model'); 
		}

		public function index()
		{
			$dataPrincipal = array();
			$seccion = 'servicios';
			$dataPrincipal['seccion'] = $seccion;

			$contenido = $this->Generales_model->getSeccion($seccion);
			$dataPrincipal['titulo'] = $contenido->titulo;
			$dataPrincipal['texto'] = $contenido->texto;
			$dataPrincipal['cuerpo'] = 'servicios_view';

			$dataPrincipal['textosweb'] = $this->Generales_model->getTextosWeb($seccion);
			$dataPrincipal['servicios'] = $this->Servicios_model->getServicios(8);
		
			$data = array();
			$data['seccion'] = $seccion;
			$data['title'] = $contenido->title;
			$data['keywords'] = $contenido->keywords;
			$data['description'] = $contenido->description;
			
			$dataPrincipal['header'] = $this->load->view('frontend/includes/header_view', $data, true);
			$dataPrincipal['footer'] = $this->load->view('frontend/includes/footer_view', $data, true);
			
			$this->load->view("frontend/includes/template", $dataPrincipal);
		}

 public function individualServicios() {
 			$aux = $this->uri->segment(1);
			$aux2 = explode("-", $aux);
			$id_servicio = $aux2[0];
			$url_servicio = $aux2[1];
			$dataPrincipal = array();
		
			$dataPrincipal['servicio']  = $this->Servicios_model->getServiciosU($id_servicio);

			$dataPrincipal['last_servicios'] = $this->Servicios_model->getLastServicios(6);
			$dataPrincipal['Dest_servicios'] = $this->Servicios_model->getArtServicios(9);	
			$dataPrincipal['prueba'] = $id_servicio;
			$seccion = 'servicios';
			$dataPrincipal['seccion'] = $seccion;
			$dataPrincipal['titulo'] = 'servicio';
			$dataPrincipal['texto'] = "";
			$dataPrincipal['cuerpo'] = 'servicios_detalles_view';
			
			$dataPrincipal['textosweb'] = $this->Generales_model->getTextosWeb($seccion);
			$data = array();
			$data['title'] = 'servicio';
			$data['keywords'] = 'servicio';
			$data['description'] = 'servicio';
			$dataPrincipal['header'] = $this->load->view('frontend/includes/header_view', $data, true);
			$dataPrincipal['footer'] = $this->load->view('frontend/includes/footer_view', $data, true);
			
			$this->load->view("frontend/includes/template", $dataPrincipal);			
		}


	}
