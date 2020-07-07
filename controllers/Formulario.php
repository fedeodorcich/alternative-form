<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {

	function __construct()
	{

		parent::__construct();
		$this->load->library('email');

	}

	public function index()
	{

		$data['contenido'] = 'formulario';
		$data['titulo']    = 'Anchipurac';
		// $data['congresos'] = $this->fModel->getCongresos();
		
		if($this->session->userdata('site_lang') == 'spanish'){
			$data['lang_nav']  = $this->lang->load('nav', 'spanish');
			$data['lang']  = $this->lang->load('formulario', 'spanish');
		} else {
			$data['lang_nav']  = $this->lang->load('nav', 'english');			
			$data['lang']  = $this->lang->load('formulario', 'english');
		}
		
		$this->load->view('template', $data);

	}

	public function enviar(){

		if($_POST){


			

			$mensaje = '<html>
			<body>
			<h4>Nombre: '.$_POST['nombre'].'</h4>
			<h4>Apellido: '.$_POST['apellido'].'</h4>
			<h4>DNI: '.$_POST['dni'].'</h4>
			<h4>Nacionalidad: '.$_POST['nacion'].'</h4>
			<h4>Ocupación: '.$_POST['ocupacion'].'</h4>
			<h4>Establecimiento: '.$_POST['establec'].'</h4>
			<h4>Teléfono personal: '.$_POST['tel_pers'].'</h4>
			<h4>Teléfono de contacto: '.$_POST['tel_cont'].'</h4>
			<h4>E-mail: '.$_POST['email'].'</h4>
			<h4>Consulta: '.$_POST['consulta'].'</h4>
			</body>
			</html>';

			$titulo = 'Consulta desde la web.';

			// $config = Array(
			// 	'protocol' => 'smtp',
			// 	'smtp_host' => MAIL_HOST,
			// 	'smtp_port' => MAIL_PORT,
			// 	'smtp_user' => MAIL_CONTACTO,
			// 	'smtp_pass' => PASS_MAIL_CONTACTO,
			// 	'charset'   => 'UTF-8'
			// );

			// $this->load->library('email', $config);
			// $this->email->set_mailtype("html");
			// $this->email->set_newline("\r\n");

			// $this->email->from(MAIL_CONTACTO, CLIENTE);
			// $this->email->to('rodrigokokot@gmail.com');
			// $this->email->subject($titulo);
			// $this->email->message($mensaje);
			// // $this->email->reply_to($_POST['email'],$_POST['nombre']);
			// $send = $this->email->send();

			// if($send){
			// 	echo 'ok';
			// } else {
			// 	echo 'error';
			// }
			$this->email->initialize( $this->configEmail() );

			$this->email->from('asesoresculturales@anchipurac.com', 'Anchipurac' );
			$this->email->to('asesoresculturales@anchipurac.com');

			$this->email->subject($titulo);
			$this->email->message($mensaje);

			$res = $this->email->send();

			// return ($res?$res:$this->email->print_debugger());
			echo ($res? 'ok' : 'error' );

		} else {
			redirect('formulario','location');
		}

	}

	private function configEmail()
	{


		
      // Configure email library
		$config['useragent'] = 'CodeIgniter';
		$config['protocol'] = 'smtp';
      //$config['mailpath'] = '/usr/sbin/sendmail';
		// $config['smtp_host'] = 'ssl://smtp.googlemail.com';
		$config['smtp_host'] = 'ssl://c1180326.ferozo.com';
		$config['smtp_user'] = 'asesoresculturales@anchipurac.com';
		$config['smtp_pass'] = 'Usuario10';
		$config['smtp_port'] = 465; 
		$config['smtp_timeout'] = 5;
		$config['wordwrap'] = TRUE;
		$config['wrapchars'] = 76;
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['validate'] = FALSE;
		$config['priority'] = 3;
		$config['crlf'] = "\r\n";
		$config['newline'] = "\r\n";
		$config['bcc_batch_mode'] = FALSE;
		$config['bcc_batch_size'] = 200;
		return $config;
	}

}