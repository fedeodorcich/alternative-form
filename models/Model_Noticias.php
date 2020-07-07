<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Noticias extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		// $this->load->database();
		$this->db_a = $this->load->database('conexion_A', true);
	}

	public function noticiasListar(){

		$noticias = $this->db_a
		->order_by('fecha_noticia','DESC')
		->get('noticias')
		->result();

		if(!empty($noticias))foreach($noticias as $noticia){
			$noticia->imagenes = $this->noticiasImagenesObtener($noticia->id_noticias);
			$noticia->ajuntos = $this->noticiasAdjuntosObtener($noticia->id_noticias);
			$noticia->enlaces = $this->noticiasEnlacesObtener($noticia->id_noticias);
		}

		return $noticias;

	}


	public function noticiasImagenesObtener($id_noticias){

		return $this->db_a
		->where('id_noticias',$id_noticias)
		->get('galeria_imagenes')
		->result();
	}

	public function noticiasAdjuntosObtener($id_noticias){

		return $this->db_a
		->where('id_noticias',$id_noticias)
		->get('archivos_adjuntos')
		->result();
	}

	public function noticiasEnlacesObtener($id_noticias){

		return $this->db_a
		->where('id_noticias',$id_noticias)
		->get('enlaces_noticias')
		->result();
	}


}

?>