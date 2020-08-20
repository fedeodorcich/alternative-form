<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VisitasCovid extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this -> load -> helper('url');
		
	}
		

	public function index()
	{
		$this -> load -> view('covid-form/visitas-covid');
		
	}
	
}