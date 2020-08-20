<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Visitas extends CI_Model {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}   


	// function actividadesListar(){
	// 	$query = $this->db
	// 	->select('a.*,plan.nombre plan,prog.nombre programa')
	// 	// ->join('par_localidades loc','loc.id_localidades = b.id_localidades')
	// 	// ->join('par_departamentos dpto','dpto.id_departamentos = loc.id_departamentos')
	// 	->join('programas prog','prog.id_programas = a.id_programas')
	// 	->join('planes plan','plan.id_planes = prog.id_planes')
	// 	->get('actividades a');
	// 	return $query->result();
	// }


	function pruebas ($hoy)
	{
		$query = $this->db
		->select('feriado')
		->where('dia',$hoy)
		->get('dias_reservados')
		->row_array();

		echo $query['feriado'];
		//return $query['feriado'];
	}


	function validarVisita($data,$visitantesMaximo){
		$query = "
		SELECT COUNT(*) cantidad_disponible
		FROM personas p
		WHERE p.fecha_visita = '".$data['fecha_visita']."' AND p.hora_visita = '".$data['hora_visita']."'
		";

		$result = $this->db->query($query)->row();

		return $result;
	}

	function validarVisita2($data,$visitantesMaximo){
		$query = "
		SELECT v.*, 
		( SELECT $visitantesMaximo - COUNT(*) 
		FROM personas p 
		WHERE p.id_visitas = v.id_visitas 
		) cantidad_disponible,
		( SELECT COUNT(*) FROM personas p WHERE p.id_visitas = v.id_visitas ) cantidad 
		FROM visitas v
		WHERE v.fecha_visita = '".$data['fecha_visita']."' AND v.hora_visita = '".$data['hora_visita']."'
		";

		$result = $this->db->query($query)->result();

		$elemento = (!empty($result))? $result[0] : '';

		for($i = 1; $i < count($result); $i++){
			if($elemento->hora_visita == $result[$i]->hora_visita){
				$elemento->cantidad += $result[$i]->cantidad;
				$elemento->cantidad_disponible = $visitantesMaximo - $elemento->cantidad;
				$result[$i]->cantidad = $elemento->cantidad;
				$result[$i]->cantidad_disponible = $elemento->cantidad_disponible;

			}
			$elemento = $result[$i];
			
		}
		// $query = $this->db
		// ->where('fecha_visita', $fechaSeleccionada)
		// ->get('visitas')
		// ->result();

		return $result;
	}

	function horariosFechasObtener($fechaSeleccionada,$visitantesMaximo){
		// $query = "
		// SELECT v.*, 
		// ( SELECT $visitantesMaximo - COUNT(*) 
		// FROM personas p 
		// WHERE p.id_visitas = v.id_visitas 
		// ) cantidad_disponible,
		// ( SELECT COUNT(*) FROM personas p WHERE p.id_visitas = v.id_visitas  ) cantidad
		// FROM visitas v
		// WHERE v.fecha_visita = '$fechaSeleccionada'
		// ORDER BY v.hora_visita ASC
		// ";

		// $result = $this->db->query($query)->result();
		// $elemento = (!empty($result))? $result[0] : '';
		// for($i = 1; $i < count($result); $i++){
		// 	if($elemento->hora_visita == $result[$i]->hora_visita){
		// 		$elemento->cantidad += $result[$i]->cantidad;
		// 		$elemento->cantidad_disponible = $visitantesMaximo - $elemento->cantidad;
		// 		$result[$i]->cantidad = $elemento->cantidad;
		// 		$result[$i]->cantidad_disponible = $elemento->cantidad_disponible;

		// 	}
		// 	$elemento = $result[$i];

		// }

		// $query = $this->db
		// ->where('fecha_visita', $fechaSeleccionada)
		// ->get('visitas')
		// ->result();

		$query = "
		SELECT v.*, 
		$visitantesMaximo - (
		( SELECT COUNT(*) 
		FROM personas p 
		WHERE p.hora_visita = v.hora_visita AND p.fecha_visita = v.fecha_visita 
		)
		+
		( SELECT COUNT(*) 
		FROM personas_institucion inst
		WHERE inst.hora_visita = v.hora_visita AND inst.fecha_visita = v.fecha_visita 
		)
		+( SELECT COUNT(*) 
		FROM personas_particular part 
		WHERE part.hora_visita = v.hora_visita AND part.fecha_visita = v.fecha_visita 
		)
		) cantidad_disponible,
		(
		( SELECT COUNT(*) 
		FROM personas p 
		WHERE p.hora_visita = v.hora_visita AND p.fecha_visita = v.fecha_visita 
		)
		+
		( SELECT COUNT(*) 
		FROM personas_institucion inst
		WHERE inst.hora_visita = v.hora_visita AND inst.fecha_visita = v.fecha_visita 
		)
		+( SELECT COUNT(*) 
		FROM personas_particular part 
		WHERE part.hora_visita = v.hora_visita AND part.fecha_visita = v.fecha_visita 
		)
		) cantidad

		FROM visitas v
		WHERE v.fecha_visita = '$fechaSeleccionada'
		ORDER BY v.hora_visita ASC
		";

		$result = $this->db->query($query)->result();

		return $result;
	}

	function guardarVisita($data){
		$query = $this->db
		->insert('visitas',$data);

		return $this->db->insert_id();
	}


	function guardarPersonaVisita($data){
		$query = $this->db
		->insert('personas',$data);

		return $query;
	}

	function guardarVisitaPersonal($data){
		$query = $this->db
		->insert('personas_particular',$data);

		return $query;
	}

	function guardarVisitaInstitucion($data){
		$query = $this->db
		->insert('personas_institucion',$data);

		return $query;
	}

	function horariosObtener($hoy){

		// if($this->bloqueadoObtener($hoy)){
		// 	return false;
		// }

		if($this->feriadoObtener($hoy)){
			$query = $this->db
			->select('hora')
			->where('feriado','si')
			->get('horarios')
			->result();
		}else{
			$dia_semana = date("w",strtotime($hoy));
			if($dia_semana != 0 && $dia_semana != 6){
				$query = $this->db
				->select('hora')
				->where('semana','si')
				->get('horarios')
				->result();
			}else{
				$query = $this->db
				->select('hora')
				->where('fin_semana','si')
				->get('horarios')
				->result();
			}
		}

		return $query;
		
	}

	function feriadoObtener($hoy){
		$query = $this->db
		->select('feriado')
		->where('dia',$hoy)
		->get('dias_reservados')
		->row_array();

		if ($query){
		return $query['feriado'];
		}
		else{
			return null;
		}
	}

	function bloqueadoObtener($hoy){
		$query = $this->db
		->where('dia',$hoy)
		->get('dias_reservados')
		->row_array();

		return !empty($query)? true : false;
	}

	function bloqueadoListar(){
		$query = $this->db
		->select('dia')
		->where('feriado',0)
		->get('dias_reservados')
		->result();

		return $query;
	}

	function maximoVisitantesObtener(){
		return $this->db
		->select('maximo_visitantes')
		->get('parametros')
		->row()
		->maximo_visitantes;
	}

	function maximoVisitantesRealObtener(){
		return $this->db
		->select('maximo_visitantes_real')
		->get('parametros')
		->row()
		->maximo_visitantes_real;
	}


	function codigoObtener(){
		return $this->db
		->select('codigo')
		->get('codigos')
		->row()
		->codigo;
	}

	function codigoModificar($cod){
		$query = "UPDATE codigos SET codigo = '$cod'";
		$this -> db-> query($query);
	}

}?>