<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institucional extends CI_Controller {

	public function index()
	{

		$data['contenido'] = 'institucional';
		$data['titulo']    = 'Anchipurac';
		// $data['congresos'] = $this->fModel->getCongresos();
		
		if($this->session->userdata('site_lang') == 'english'){
			$data['lang_nav']    = $this->lang->load('nav', 'english');
			$data['lang_avales'] = $this->lang->load('avales', 'english');		
			$data['lang']        = $this->lang->load('institucional', 'english');
		} else {

			$array = array(
				'site_lang' => 'spanish'
			);
			
			$this->session->set_userdata( $array );
			
			$data['lang_nav']  = $this->lang->load('nav', 'spanish');
			$data['lang_avales'] = $this->lang->load('avales', 'spanish');		
			$data['lang']  = $this->lang->load('institucional', 'spanish');
		}
		
		$this->load->view('template', $data);

	}
}