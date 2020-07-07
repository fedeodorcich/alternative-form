<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{

		parent::__construct();
		$this->load->model('Model_Noticias');
		$this->load->library('email');

	}


	public function index()
	{
		//$this-> load-> view ('formulario'); Para pruebas Poyuyo

		$data['contenido'] = 'home';
		$data['titulo']    = 'Anchipurac';
		$data['congresos'] = $this->fModel->getCongresos();

		$data['noticias'] = $this->Model_Noticias->noticiasListar();
		// var_dump($data['noticias']);die;
		$data['cantidadNoticias'] = count($data['noticias']);
		if($this->session->userdata('site_lang') == 'english'){
			$data['lang_nav']    = $this->lang->load('nav', 'english');
			$data['lang_avales'] = $this->lang->load('avales', 'english');		
			$data['lang']        = $this->lang->load('home', 'english');
		} else {

			$array = array(
				'site_lang' => 'spanish'
			);
			
			$this->session->set_userdata( $array );
			
			$data['lang_nav']  = $this->lang->load('nav', 'spanish');
			$data['lang_avales'] = $this->lang->load('avales', 'spanish');		
			$data['lang']  = $this->lang->load('home', 'spanish');
		}
		
		$this->load->view('template', $data);

	}
}
