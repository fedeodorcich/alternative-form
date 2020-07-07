<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informacion extends CI_Controller {

	public function index()
	{

		$data['contenido'] = 'informacion';
		$data['titulo']    = 'Anchipurac';
		// $data['congresos'] = $this->fModel->getCongresos();
		
		if($this->session->userdata('site_lang') == 'spanish'){
			$data['lang_nav']  = $this->lang->load('nav', 'spanish');
			$data['lang']  = $this->lang->load('informacion', 'spanish');
		} else {
			$data['lang_nav']  = $this->lang->load('nav', 'english');			
			$data['lang']  = $this->lang->load('informacion', 'english');
		}
		
		$this->load->view('template', $data);

	}
}