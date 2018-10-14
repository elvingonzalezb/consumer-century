<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Galeria extends CI_Controller {

		function __construct() {
		    parent::__construct();
			$this->load->model('frontend/Generales_model'); 
			$this->load->model('frontend/Galeria_model'); 
		}

		public function index()
		{
			$aux = $this->uri->segment(2);
			if($aux!="")
			{
				$inicio = $aux;
			}
			else
			{
				$inicio = 0;
			}
			$dataPrincipal = array();
			$seccion = 'galeria';
			$dataPrincipal['seccion'] = $seccion;

			$contenido = $this->Generales_model->getSeccion($seccion);
			$dataPrincipal['titulo'] = $contenido->titulo;
			$dataPrincipal['texto'] = $contenido->texto;
			$dataPrincipal['cuerpo'] = 'galeria_view';

			$dataPrincipal['textosweb'] = $this->Generales_model->getTextosWeb($seccion);	
			/*********************** BEGIN PAGINACION GALERIA ***************/
			/*********************** BEGIN PAGINACION GALERIA ***************/
			/*********************** BEGIN PAGINACION GALERIA ***************/

			$num_total_fotos = $this->Galeria_model->numTotalFotos();
			$dataPrincipal['num_total_resultados'] = $num_total_fotos;
		    $config['base_url']	= base_url().'/galeria/';
		    $config['total_rows'] = $num_total_fotos;
		    $config['per_page'] = getConfig('fotos_x_pagina');
		    $config['uri_segment'] = 2;
		    $config['num_links'] = 5;

		    $config['full_tag_open'] = '<ul class="pagination theme-colored">';
		    $config['full_tag_close'] = '</ul>';

		    $config['first_link'] = false;
		    $config['last_link'] = false;

		    $config['first_tag_open'] = '<li class="disabled">';
		    $config['first_tag_close'] = '</li>';

		    $config['prev_link'] = 'Anterior';
		    $config['prev_tag_open'] = '<li class="">';
		    $config['prev_tag_close'] = '</li>';

		    $config['next_link'] = 'Siguiente';
		    $config['next_tag_open'] = '<li class="">';
		    $config['next_tag_close'] = '</li>';

		    $config['last_tag_open'] = '<li class="disabled">';
		    $config['last_tag_close'] = '</li>';

		    $config['cur_tag_open'] = '<li class="active"><a class="page-link" href="frontend/galeria" tabindex="-1">';
		    $config['cur_tag_close'] = '</a></li>';

		    $config['num_tag_open'] = '<li class="">';
		    $config['num_tag_close'] = '</li>';

		    $config['attributes'] = array('class' => 'page-link');

		    $this->pagination->initialize($config);
		    $fotos = $this->Galeria_model->getFotosxPagina($inicio, $config['per_page']);
		    $dataPrincipal["imgs_galeria"]   = $fotos;
		    $dataPrincipal["paginacion"]  = $this->pagination->create_links();

		    /*********************** END PAGINACION GALERIA ***************/
		    /*********************** END PAGINACION GALERIA ***************/
		    /*********************** END PAGINACION GALERIA ***************/	
			
	
			$data = array();
	
			$data['title'] = $contenido->title;
			$data['keywords'] = $contenido->keywords;
			$data['description'] = $contenido->description;

			$dataPrincipal['header'] = $this->load->view('frontend/includes/header_view', $data, true);
			$dataPrincipal['footer'] = $this->load->view('frontend/includes/footer_view', $data, true);
			
			$this->load->view("frontend/includes/template", $dataPrincipal);
		}	
}