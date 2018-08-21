<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Articulos extends CI_Controller {

		function __construct() {
		    parent::__construct();
			$this->load->model('frontend/Generales_model'); 
			$this->load->model('frontend/Articulos_model'); 
		}

		public function index()
		{
		
		}
		
		public function todosArticulos()
		{
	
			$dataPrincipal = array();
			$seccion = 'todosarticulos';
			$contenido = $this->Generales_model->getSeccion('articulos');
			$dataPrincipal['titulo'] = $contenido->titulo;
			$dataPrincipal['texto'] = $contenido->texto;

			$dataPrincipal['cuerpo'] = 'lista_rubros_view';
	

	
			$data = array();
			$data['seccion'] = $seccion;
			$data['title'] = $contenido->title;
			$data['keywords'] = $contenido->keywords;
			$data['description'] = $contenido->description;

			$data['og_type'] = "website";
			$data['og_url'] = BASE_URL;
			$data['og_image'] = "";

			$data['twitter_card'] = 'summary';
			$data['twitter_site'] = TWITTER_SITE;
			$data['twitter_creator'] = TWITTER_CREATOR;
			$data['twitter_url'] = BASE_URL;
			$data['twitter_image'] = '';

			$data['onload'] = '';
			$data['slider_ads'] = true;

			$data2 = array();
			$data2["ads"] = $this->Generales_model->getAds($seccion);
			$dataPrincipal['lateral'] = $this->load->view('frontend/includes/sidebar_view', $data2, true);

			$dataPrincipal['header'] = $this->load->view('frontend/includes/header_view', $data, true);
			$dataPrincipal['footer'] = $this->load->view('frontend/includes/footer_view', $data, true);
			
			$this->load->view("frontend/includes/template", $dataPrincipal);
		}

        public function individualArticulos() {
			$aux = $this->uri->segment(1);
			$aux2 = explode("-", $aux);
			$url_articulo = $aux2[0];
			$id_articulo = $aux2[1];
			$dataPrincipal = array();
			$articulo = $this->Articulos_model->getArticulos($id_articulo);
			$dataPrincipal["articulo"] = $articulo;
			$seccion = 'articulo';
			$dataPrincipal['seccion'] = $seccion;
			$dataPrincipal['titulo'] = 'articulo';
			$dataPrincipal['texto'] = "";
			$dataPrincipal['cuerpo'] = 'articulos_individual_view';
			
			$data = array();
			$data['title'] = 'articulo';
			$data['keywords'] = 'articulo';
			$data['description'] = 'articulo';
			$dataPrincipal['header'] = $this->load->view('frontend/includes/header_view', $data, true);
			$dataPrincipal['footer'] = $this->load->view('frontend/includes/footer_view', $data, true);
			
			$this->load->view("frontend/includes/template", $dataPrincipal);			
		}

		
	


	}
