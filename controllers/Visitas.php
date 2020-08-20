<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include '../CodeIgniter/application2/libraries/SimpleXLS.php';
include '../CodeIgniter/application2/libraries/phpqrcode/qrlib.php';
include '../CodeIgniter/application2/libraries/fpdf/fpdf.php';


class Visitas extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{

		parent::__construct();
		$this->load->model('Model_Visitas');
		$this->load->library('email');
		$this -> load -> library('SimpleXLSX');
		//$this -> load -> library('fpdf/fpdf.php');
		

		$this->visitantesMaximo = $this->Model_Visitas->maximoVisitantesObtener();
		$this->visitantesMaximoReal = $this->Model_Visitas->maximoVisitantesRealObtener();
	}


	/*
	* Página inicial de visitas
	* @author rodrigo kokot
	* @inputs no posee
	* @param no posee 
	* @return 
	*/  
	public function index()
	{

		// vista general del formulario de visitas
		$data['contenido'] = 'visitas2';

		// titulo que aparece en la pestaña del navegador
		$data['titulo'] = 'Anchipurac';

		// texto modal inicial al elejir particulares
		$data['modalContenidoParticular1'] = 'Arancel general a partir de los 12 años de edad:$180 (pesos ciento ochenta con 00.-) ';
		$data['valorTicketNumeroParticular'] = 'Jubilados y niños entre 4 y 11 años de edad $120 (pesos ciento veinte con 00.-)';
                $data['valorTicketLetrasParticular'] = '';
		$data['modalContenidoParticular2'] = 'Arancel bonificado para Personas con Discapacidad<br><br>Solo se reciben pagos en efectivo';
		$data['modalContenidoParticular3'] = 'Traslados al centro ambiental Anchipurac desde Centro Cívico según disponibilidad y con reservas anticipadas, autorizado solamente para 6° grado de nivel primario, 3° y 6° año de secundaria, previa declaración jurada de los directivos de los colegios y escuelas certificando este beneficio exclusivo para los mencionados cursos';

		// texto modal inicial al elejir institución
		$data['modalContenidoInstitucion1'] = 'Arancel general a partir de los 12 años de edad ';
		$data['valorTicketNumeroInstitucion'] = '$180';
		$data['valorTicketLetrasInstitucion'] = '(pesos ciento ochenta con 00.-)';
		$data['modalContenidoInstitucion2'] = 'Arancel bonificado para nivel educativo primario y secundario<br><br>Solo se reciben pagos en efectivo';
		/*$data['modalContenidoInstitucion3'] = '
En el caso del sistema educativo formal,la actividad esta destinada a alumnos de 6° grado Nivel Primario, y alumnos de 3°, 6°,
7° año Nivel Secundario en todas sus modalidades de Gestión Estatal y Privada, siendo
esta visita otorgada una única vez al año, y según disponibilidad de turnos y traslados,
por el Centro Ambiental Anchipurac, no siendo obligatorio el traslado si no hubiese
cupos en los turnos solicitados, los cuales podrán ser reprogramados por esta
institución previo aviso y acuerdo con el establecimiento educativo correspondiente.

Traslados al centro ambiental Anchipurac desde Centro Cívico según disponibilidad y con reservas anticipadas, autorizado solamente para 6° grado de nivel primario, 3° y 6° año de secundaria, previa declaración jurada de los directivos de los colegios y escuelas certificando este beneficio exclusivo para los mencionados cursos';*/
		
                 $data['modalContenidoInstitucion3']='Para todos los colegios y o escuelas que deseen tomar un turno exclusivamente para los niveles aprobados por Resolución Ministerial y bajo declaración jurada 6to grado primaria, 3, 6, 7, secundaria con no más de 10 personas por turno , deberán ingresar en nuestra página web www.anchipurac.com y completar desde la pestaña instituciones visita grupal todos los datos consignados y además se dejarán los datos completos del responsable de la visita, dirección, teléfono de contacto y datos completos del establecimiento educativo y nombre del director o directora.
Cabe destacarse que la inscripción y obtención del turno no incluye el traslado al Centro Ambiental Anchipurac, quedando este traslado a cargo de la institución escolar. Si usted y su establecimiento desea contar con transporte debe comunicarse con el 4382240  whatsapp, o vía Telefónica al 2644791840 y solicitar traslado que quedara  sujeto a la disponibilidad de fechas y turnos. Horario de atención telefónica y o whatsapp: de 8 hs  a 14 hs.';


		// funcion que trae los dias seleccionados como bloqueados
		$dias_bloqueados = $this->Model_Visitas->bloqueadoListar();

		// visitantes maximos que puede tener una visita, este valor se obtiene desde la BD
		$data['visitantesMaximo'] = $this->visitantesMaximo;

		// visitantes maximos real que puede tener una visita, este valor se obtiene desde la BD
		$data['visitantesMaximoReal'] = $this->visitantesMaximoReal;

		// verifica el idioma que tiene seleccionado la persona que esta realizando la visita, de acuerdo a ello, los títulos de los inputs de los formulario se mostrarán em uno u otro idioma (cabe mencionar que actualmente la página solo tiene lenguaje en español)
		if($this->session->userdata('site_lang') == 'spanish'){
			$data['lang_nav']  = $this->lang->load('nav', 'spanish');
			$data['lang']  = $this->lang->load('visitas', 'spanish');
		} else {
			$data['lang_nav']  = $this->lang->load('nav', 'english');			
			$data['lang']  = $this->lang->load('visitas', 'english');
		}

		// indica que los particulares podrán elejir del calendario a partir del día siguiente al actual
		$hoyParticular = date("Y-m-d"); 
		$hoyParticular = date('Y-m-d', strtotime($hoyParticular."+ 1 days")); //hasta 1

		// indica que las instituciones podrán elejir del calendario a partir de los 2 días siguientes al actual
		$hoyInstitucion = date("Y-m-d");
		$hoyInstitucion = date('Y-m-d', strtotime($hoyInstitucion."+ 2 days"));

		// verifica que si el dia de particular o instución se encuentra bloqueado en la BD, de ser así suma días hasta encontrar uno que no lo este
		$data['dias_bloqueados'] = [];
		if(!empty($dias_bloqueados))foreach($dias_bloqueados as $bloqueado){
			array_push($data['dias_bloqueados'], $bloqueado->dia);
			if($hoyParticular == $bloqueado->dia){
				$hoyParticular = date('Y-m-d', strtotime($hoyParticular."+ 1 days"));
			}
			if($hoyInstitucion == $bloqueado->dia){
				$hoyInstitucion = date('Y-m-d', strtotime($hoyInstitucion."+ 2 days"));
			}
		}

		// obtiene los horarios disponibles de particulares e institución y su disponibilidad, a partir del día inicial obtenido anteriormente y con el máximo de visitantes por horario
		$data['visitasHoyParticular'] = $this->Model_Visitas->horariosFechasObtener($hoyParticular,$this->visitantesMaximo);
		$data['visitasHoyInstitucion'] = $this->Model_Visitas->horariosFechasObtener($hoyInstitucion,$this->visitantesMaximo);

		// listado de horarios para el dia inicial de particulares
		$data['horariosHoyParticular'] = $this->Model_Visitas->horariosObtener($hoyParticular);

		// dia inicial particular
		$data['hoyParticular'] = $hoyParticular;

		// listado de horarios para el dia inicial de instituciones
		$data['horariosHoyInstitucion'] = $this->Model_Visitas->horariosObtener($hoyInstitucion);

		// dia inicial particular
		$data['hoyInstitucion'] = $hoyInstitucion;

		// llamado a la vista
		$this->load->view('template',$data);
	}


	/*
	* Guarda en BD visita correspondiente a un Particular
	* @author rodrigo kokot
	* @inputs formData ajax
	* @param no posee 
	* @return visita almacenada, con código de visita
	*/  


	public function prueba(){
		if($_POST['cant']!=""){
			echo "Cantidad devuelta desde el servidor: " . $_POST['cant'];
		}else{
			echo "No se ingreso nada";
		}
	}

	public function guardarVisitaParticular(){

		// se crea un objeto que será devuelto a la vista
		$response = new stdClass();	

		// se crea el código de visita de manera aleatoria
		$codigo = $this -> Model_Visitas -> codigoObtener();//$this->RandomCadena(7);

		// cantidad de visitantes seleccionados en el formulario
		$cantidad_visitantes = $this->input->post('cantidad_visitantes');

	


		// arreglo a guardar en la tabla de visitas
		$visita = array(
			'lugar' => 'anchipurac',
			'tipo' => 'particular',
			'fecha_visita' =>  date("Y-m-d", strtotime(str_replace("/", "-", $this->input->post('fecha_datepicker')))),
			'hora_visita' => str_replace("_", ":", $this->input->post('hora')),
			'estado' => 'ocupado',
			'codigo_reserva' => $codigo,
			'responsable' => $this->input->post('nombre').' '.$this->input->post('apellido'),
			'cantidad_visitantes' => $cantidad_visitantes
		);

		
		// antes de guardar, se valida que la cantidad seleccionada de visitantes se encuentre disponible
		$validacion = $this->Model_Visitas->validarVisita($visita,$this->visitantesMaximo);
		
		$validacion = (!empty($validacion))? $validacion->cantidad_disponible : 0;
		//$v=$validacion;

		// si no se encontrarion visitas en esa fecha y hora y la cantidad es menor, se procede a su almacenamiento
		if((int)$validacion + (int)$cantidad_visitantes < (int)$this->visitantesMaximoReal){

			// se guarda la visita en la BD y se obtine el número de visita para relacionarla a los visitantes
			$id_visitas = $this->Model_Visitas->guardarVisita($visita);

			// arreglo que obtiene al responsable del grupo
			$responsable = array(
				'id_visitas' => $id_visitas,
				'nombre' => $this->input->post('nombre'),
				'apellido' => $this->input->post('apellido'),
				'edad' => $this->input->post('edad'),
				'procedencia' => $this->input->post('procedencia'),
				'ocupacion' => $this->input->post('ocupacion'),
				'email' => $this->input->post('email'),
				'telefono_particular' => $this->input->post('telefono_particular'),
				'visita_pta' => '-',  //'$this->input->post('visita_pta'),'
				'fecha_visita' =>  date("Y-m-d", strtotime(str_replace("/", "-", $this->input->post('fecha_datepicker')))),
				'hora_visita' => str_replace("_", ":", $this->input->post('hora')),
			);

			// se almacena en la BD al responsable
			$this->Model_Visitas->guardarVisitaPersonal($responsable);
			if($cantidad_visitantes == 0){
				$response->success = true;
			}

			//=============================================//
			/*$pdf=new FPDF();
			$pdf->AddPage();
			$pdf->SetFont('Arial','B',16);
			$texto = "Mi primera página pdf con FPDF";
			$pdf->Cell(40,10,$texto);
			$pdf->Output('D','mipdf.pdf',FALSE);*/
			//=============================================//


			if($cantidad_visitantes >= 1 && $cantidad_visitantes <= 9){
			// Si cantidad de visitantes es  menor o igual a 6 se itera con la cantidad de visitantes seleccionados y se los guarda en la BD uno por uno
				for($i = 0; $i < $cantidad_visitantes; $i++){    

					$v = json_decode($this->input->post('visitante_'.$i));

					$visitante = array(
						'id_visitas' => $id_visitas,
						'nombre' => $v -> nombre_visitante,
						'apellido' => $v -> apellido_visitante,
						'ocupacion' => $v -> ocupacion_visitante,
						'edad' => $v -> edad_visitante,
						'visita_pta' => '-',
						'fecha_visita' =>  date("Y-m-d", strtotime(str_replace("/", "-", $this->input->post('fecha_datepicker')))),
						'hora_visita' => str_replace("_", ":", $this->input->post('hora'))
						
					);

					$this->Model_Visitas->guardarVisitaPersonal($visitante);

				}
				$response->success = true;
			}

			///////////////////////////////////NUEVO

			if($cantidad_visitantes >= 6){
				$uploadedfileload="true";

				if ($_FILES['uploadedfile']['size']>200000){
					
					$uploadedfileload="false";
				}

				$fecha=date("d-m-Y", strtotime(str_replace("/", "-", $this->input->post('fecha_datepicker'))));

				
				if ($_FILES['uploadedfile']['type'] =="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){  //condicion para extension
					$ext='.xlsx';
					$add="../CodeIgniter/planillas/visita_" . $responsable['nombre'] . "_" . $responsable['apellido'] . "_" . $fecha . $ext;  
				}
				elseif ($_FILES['uploadedfile']['type'] =="application/vnd.ms-excel"){
					$ext='.xls';
					$add="../CodeIgniter/planillas/visita_" . $responsable['nombre'] . "_" . $responsable['apellido'] . "_" . $fecha . $ext; 
				} else{
						$uploadedfileload="false";
					}

				if($uploadedfileload=="true"){

				if(move_uploaded_file ($_FILES['uploadedfile']['tmp_name'], $add)){
					
					$response->success = true;

					//Desde aca cargamos en BD

					if($ext =='.xlsx'){
							$archivo = new SimpleXLSX($add); 
						} elseif ($ext=='.xls'){
							$archivo= new SimpleXLS($add);
						}

					
					foreach ( $archivo->rows() as $r => $row ) {

						if($r > 0 && $row[0]!=''){
							$visitante = array(
								
								'id_visitas' => $id_visitas,
								'nombre' => $row[0],
								'apellido' => $row[1],
								'edad' => $row[2],
								'ocupacion' => $row[3],
								'visita_pta' => '-',
								'fecha_visita' =>  date("Y-m-d", strtotime(str_replace("/", "-", $this->input->post('fecha_datepicker')))),
								'hora_visita' => str_replace("_", ":", $this->input->post('hora'))
								);

								$this->Model_Visitas->guardarVisitaPersonal($visitante);
				
						}
					}
					
				}else{
					$response->success = false;}

				}else{$response->success = false;}

		}
			///////////////////////////////////////////////
			

			$codeFile = $this -> generarQr($codigo);



			///////////////////////////////////////////////endNUEVO

			// respuesta del email de la persona que recibirá la confirmación
			$response->destinoEmail = $this->input->post('email');

			// indica el estado del email, si es true, el email se envió correctamente
			//$response->estadoEmail = $this->enviarEmailVisita($visita,$responsable,$codeFile);

			// se devuelve el código generado
			//$response->data = $codigo;
			$response ->qr = $codeFile;
			$response->success = true;
			//$response->msj = 'La cantidad ingresada supera el cupo disponible de visitantes.';
		}else{
			// mensaje que indica que la cantidad de visitantes supera el máximo
			$response->msj = 'La cantidad ingresada supera el cupo disponible de visitantes.';
			$response->success = false;
		}

		//$response->validacion=$v;

		// respuesta a la vista con una variable json

		//$response -> up=$uploadedfileload;
		echo json_encode($response);


	}


	/*
	* Guarda en BD visita correspondiente a una Institución
	* @author rodrigo kokot
	* @inputs formData ajax
	* @param no posee 
	* @return visita almacenada, con código de visita
	*/  
	public function guardarVisitaInstitucion(){

		// se crea un objeto que será devuelto a la vista
		$response = new stdClass();	

		// se crea el código de visita de manera aleatoria
		$codigo =  $this -> Model_Visitas -> codigoObtener();//$this->RandomCadena(7);

		// cantidad de visitantes seleccionados en el formulario
		$cantidad_visitantes = $this->input->post('cantidad_visitantes');

		// arreglo a guardar en la tabla de visitas
		$visita = array(
			'lugar' => 'anchipurac',
			'tipo' => 'institucion',
			'fecha_visita' =>  date("Y-m-d", strtotime(str_replace("/", "-", $this->input->post('i_fecha_datepicker')))),
			'hora_visita' => str_replace("_", ":", $this->input->post('i_hora')),
			'estado' => 'ocupado',
			'codigo_reserva' => $codigo,
			'responsable' => $this->input->post('i_nombre').' '.$this->input->post('i_apellido'),
			'cantidad_visitantes' => $cantidad_visitantes,
		);

		

		// antes de guardar, se valida que la cantidad seleccionada de visitantes se encuentre disponible
		$validacion = $this->Model_Visitas->validarVisita($visita,$this->visitantesMaximo);
		$validacion = (!empty($validacion))? $validacion->cantidad_disponible : 0;

		// si no se encontrarion visitas en esa fecha y hora y la cantidad es menor, se procede a su almacenamiento
		if((int)$validacion + (int)$cantidad_visitantes <= (int)$this->visitantesMaximoReal){

			// se guarda la visita en la BD y se obtine el número de visita para relacionarla a los visitantes
			$id_visitas = $this->Model_Visitas->guardarVisita($visita);

			// arreglo que obtiene al responsable del grupo
			$responsable = array(
				'id_visitas' => $id_visitas,
				'nombre' => $this->input->post('i_nombre'),
				'apellido' => $this->input->post('i_apellido'),
				'edad' => $this->input->post('i_edad'),
				'procedencia' => $this->input->post('i_procedencia'),
				'ocupacion' => $this->input->post('i_ocupacion'),
				'email' => $this->input->post('i_email'),
				'tipo_institucion' => $this->input->post('tipo_institucion'),
				'establecimiento' => $this->input->post('i_establecimiento'),
				'cue' => $this->input->post('i_cue'),
				'anio_cursado' => $this->input->post('tipo_anio_cursado'),
				'provincia' => $this->input->post('i_provincia'),
				'departamento' => $this->input->post('i_departamento'),
				'telefono_institucion' => $this->input->post('i_tel_institucion'),
				'autoridad_establecimiento' => $this->input->post('i_autoridad_est'),
				'dni_autoridad' => $this->input->post('i_dni_autoridad'),
				'telefono_autoridad' => $this->input->post('i_tel_autoridad'),
				'visita_pta' => '-', //$this->input->post('i_visita_pta'),
				'fecha_visita' =>  date("Y-m-d", strtotime(str_replace("/", "-", $this->input->post('i_fecha_datepicker')))),
				'hora_visita' => str_replace("_", ":", $this->input->post('i_hora')),
			);

			// se almacena en la BD al responsable
			$this->Model_Visitas->guardarVisitaInstitucion($responsable);

			/*/ se itera con la cantidad de visitantes seleccionados y se los guarda en la BD uno por uno
			for($i = 0; $i < $cantidad_visitantes; $i++){

				$v = json_decode($this->input->post('visitante_'.$i)); //usar esta variable

				$visitante = array(
					/*'id_visitas' => $id_visitas,
					'nombre' => $this->input->post('i_nombre_visitante'),
					'apellido' => $this->input->post('i_apellido_visitante'),
					'ocupacion' => $this->input->post('i_ocupacion_visitante'),
					'edad' => $this->input->post('i_edad_visitante'),
					'fecha_visita' =>  date("Y-m-d", strtotime(str_replace("/", "-", $this->input->post('i_fecha_datepicker')))),
					'hora_visita' => str_replace("_", ":", $this->input->post('i_hora')),

					'id_visitas' => $id_visitas,
					'nombre' => $v -> nombre_visitante,
					'apellido' => $v -> apellido_visitante,
					'ocupacion' => $v -> ocupacion_visitante,
					'edad' => $v -> edad_visitante,
					'visita_pta' => '-',
					'fecha_visita' =>  date("Y-m-d", strtotime(str_replace("/", "-", $this->input->post('i_fecha_datepicker')))),
					'hora_visita' => str_replace("_", ":", $this->input->post('i_hora')),
				);

				$this->Model_Visitas->guardarVisitaInstitucion($visitante);

			}*/


			///////////////////////////////////////////////////////////Nuevo

			$i_uploadedfileload="true";

			if ($_FILES['i_uploadedfile']['size']>200000){
				
				$i_uploadedfileload="false";
			}
			$fecha=date("d-m-Y", strtotime(str_replace("/", "-", $this->input->post('i_fecha_datepicker'))));
			
			if ($_FILES['i_uploadedfile']['type'] =="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){  //condicion para extension
				$ext='.xlsx';
				$add="../CodeIgniter/planillas/i_visita_" . $responsable['nombre'] . "_" . $responsable['apellido'] . "_" . $fecha . $ext;  
			}
			elseif ($_FILES['i_uploadedfile']['type'] =="application/vnd.ms-excel"){
				$ext='.xls';
				$add="../CodeIgniter/planillas/i_visita_" . $responsable['nombre'] . "_" . $responsable['apellido'] . "_" . $fecha . $ext; 
			} else{
					$i_uploadedfileload="false";
				}

			if($i_uploadedfileload=="true"){

			if(move_uploaded_file ($_FILES['i_uploadedfile']['tmp_name'], $add)){
				
				$response->success = true;

				//Desde aca cargamos en BD

				if($ext =='.xlsx'){
						$archivo = new SimpleXLSX($add); 
					} elseif ($ext=='.xls'){
						$archivo= new SimpleXLS($add);
					}

				$i=0;
				foreach ( $archivo->rows() as $r => $row ) {

					if($r > 0 && $row[0]!=''){
						$visitante = array(
							
							'id_visitas' => $id_visitas,
							'apellido' => $row[0],
							'nombre' => $row[1],
							'edad' => $row[2],
							'ocupacion' => '-',
							'visita_pta' => '-',
							'fecha_visita' =>  date("Y-m-d", strtotime(str_replace("/", "-", $this->input->post('i_fecha_datepicker')))),
							'hora_visita' => str_replace("_", ":", $this->input->post('i_hora')),
							);

							$response->visitante[$i] = $visitante; //para que puse esto?
							$i++;

							$this->Model_Visitas->guardarVisitaInstitucion($visitante);
			
					}
				}

				if($cantidad_visitantes ==  $i){
					//Nada
				}else{
					//Notificar succes null, eliminar visita y personas institucion con ese id_visitas
				}
				

				
			}else{
				$response->success = false;}

			}else{$response->success = false;}

			//////////////////////////////////////////////////////////////
			
			$codeFile = $this -> generarQr($codigo);

			///////////////////////////////////////////////////////////endNuevo

			// respuesta del email de la persona que recibirá la confirmación
			$response->destinoEmail = $this->input->post('i_email');

			// indica el estado del email, si es true, el email se envió correctamente
			//$response->estadoEmail = $this->enviarEmailVisita($visita,$responsable, $codeFile);

			// se devuelve el código generado
			//$response->data = $codigo;
			$response ->qr = $codeFile;
			$response->success = true;
		}else{
			// mensaje que indica que la cantidad de visitantes supera el máximo
			$response->msj = 'La cantidad ingresada supera el cupo disponible de visitantes.';
			$response->success = false;
		}

		// respuesta a la vista con una variable json
		echo json_encode($response);


	}


	/*
	* Busca los datos de visitas de un día seleccionado en el datepicker de la vista
	* @author rodrigo kokot
	* @inputs fecha ajax
	* @param no posee 
	* @return datos de visita 
	*/  
	public function horariosFechasObtener(){
		$response = new stdClass();		
		
		$fechaSeleccionada = date("Y-m-d",strtotime(str_replace("/", "-", $this->input->post('fecha'))));
		$response->data = $this->Model_Visitas->horariosFechasObtener($fechaSeleccionada,$this->visitantesMaximo);
		$response->horariosHoy = $this->Model_Visitas->horariosObtener($fechaSeleccionada);
		if(!empty($response->data))
			$response->success = true;
		else $response->success = false;

		echo json_encode($response);
	}

	/*
	* Genera código de visita aleatorio
	* @author rodrigo kokot
	* @inputs no posee
	* @param longitud del código a generar, por defecto es 10
	* @return código generado
	*/ 
	function RandomCadena($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	/*Funcion que genera el codigo qr para el string $codigo*/
	
	public function generarQR($codigo){
		$ecc='H';
		$size=5;
		$codesDir = "../CodeIgniter/codigo/";   
		$codeFile = date('d-m-Y-h-i-s').'.png';
			
		//$info = $this -> Model_Visitas -> codigoObtener();
			
		QRcode::png($codigo, $codesDir.$codeFile, $ecc, $size);
		$a = substr($codigo,-4);
		$b = hexdec($a) + 1;
		$a = strtoupper(dechex($b));

		if(strlen($a) == 1){
			$b = "000".$a;
		} else if(strlen($a) == 2){
			$b = "00".$a;
		}else if(strlen($a) == 3){
			$b = "0".$a;
		}else{
			$b = $a;
		}


		$cod = substr($codigo,0,2).$b;
		$this -> Model_Visitas -> codigoModificar($cod);
		return $codeFile;
	}


	/*
	* Función encargada de enviar el email al responsable de la visita
	* @author rodrigo kokot
	* @inputs no posee
	* @param datos de visita y responsable
	* @return true si se envió el email, caso contrario el error del mismo
	*/ 
	public function enviarEmailVisita($data,$responsable, $qrcode){

		
		
		

		/*======================================*/

		setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
		$fecha = strftime("%d de %B de %Y", strtotime($data['fecha_visita']));


		// $image = base_url('assets/img/full-logo.jpg');
		// $src = 'data:image/jpg;base64,'.$imageData;
		// <center>
		// <img src="'.$src.'" width="350" alt="Anchipurac centro ambiental">
		// </center>

		$filename1 = base_url('assets/iconos/site/full-logo-gris.png');
		$this->email->attach($filename1, 'inline');
		$cid1 = $this->email->attachment_cid($filename1);

		$filename2 = base_url('assets/iconos/site/gobierno.png');
		$this->email->attach($filename2, 'inline');
		$cid2 = $this->email->attachment_cid($filename2);

		$filename3 = base_url('codigo/').$qrcode;
		$this->email->attach($filename3, 'inline');
		$cid3 =  $this->email->attachment_cid($filename3);

		$cuerpo = "<!DOCTYPE>
		<html>
		<head>
		<title>Visita a Anchipurac</title>
		</head>
		<body>";
		$cuerpo .='
		<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
		<tbody>
		<tr>
		<td bgcolor="#ffffff" align="center" style="padding:0 10px 0 10px">
		<table cellspacing="0" cellpadding="0" width="70%" border="0">
		<tbody>
		<tr>
		<td>
		<table cellspacing="0" cellpadding="0" width="100%" border="0">
		<tbody>
		<tr>
		<td>
		<table cellspacing="0" cellpadding="10" width="100%" border="0">
		<tbody>
		</tbody>
		</table>
		</td>
		</tr>
		</tbody>
		</table>
		</td>
		</tr>
		</tbody>
		</table>
		</td>
		</tr>
		<tr>
		<td width="100%" align="center">
		<div style="background-color:#f2f2f2">
		<div style="margin:0 auto;max-width:640px;background:#ffffff">
		<table style="width:100%;background:#ffffff" border="0" cellspacing="0" cellpadding="0" align="center">
		<tbody>
		<tr>
		<td style="text-align:center;vertical-align:top">
		<div class="m_-3803555639560832116mj-column-per-100" style="vertical-align:top;display:inline-block;font-size:13px;text-align:left;width:100%" aria-labelledby="mj-column-per-100">
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
		<tbody>
		<tr>
		<td align="left">
		<table style="border-collapse:collapse;border-spacing:0px" border="0" cellspacing="0" cellpadding="0" align="left">
		<tbody>
		<tr>
		<td style="width:640px;padding: 6%;background-color: #00a49d;text-align: center;color: white;cursor: pointer;">
		<div class="wrapper ">
		<div class="title-section" style="margin-top: 0px;background-color: #00a49d;" >
		<p class="subtitle" style="color: white">Registramos su </p>
		<b><p class="title" style="letter-spacing: 5px;margin-bottom: 20px;text-transform: uppercase;color: white">VISITA CON ÉXITO</p></b>
		</div>
		</div>
		</td>
		</tr>
		</tbody>
		</table>
		</td>
		</tr>
		</tbody>
		</table>
		</div>
		</td>
		</tr>
		</tbody>
		</table>
		</div>
		<div style="margin:0 auto;max-width:640px;background:#ffffff">
		<table style="width:100%;background:#ffffff" border="0" cellspacing="0" cellpadding="0" align="center">
		<tbody>
		<tr>
		<td style="text-align:center;vertical-align:top">
		<div class="m_-3803555639560832116mj-column-per-100" style="vertical-align:top;display:inline-block;font-size:13px;text-align:left;width:100%" aria-labelledby="mj-column-per-100">
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
		<tbody>
		<tr>
		<td colspan="3" style="padding:30px 25px 0" align="left">
		<div  style="width:100%;text-align:left;font-family:sans-serif-regular;color:#707070;font-size:16px;line-height:1.6;margin:0px">

		<span id="texto_confirmacion_visita" style="display: block;text-align: -webkit-center;margin-top: 20px;">Los esperamos en Anchipurac para realizar su visita grupal guiada, el '.$fecha.', a las '.$data['hora_visita'].' hs</span>
		<span style="display: block;text-align: -webkit-center;">Código de reserva:</span>
		
		<div style="display:flex; align-items:center; justify-content:center !important; margin:auto !important"><img src="cid:'.$cid3.'" alt="" style="padding: 10px;width: 185px; margin:auto !important"></div>


		<p style="font-size: 13px;font-family: sans-serif-italic;text-align: center;"><i>Se envió un email con la confirmación de su visita incluyendo el código de reserva.</i></p>
		<p style="font-size: 13px;font-family: sans-serif-italic;text-align: center;margin-bottom: 20px;"><i>Dicho código será solicitado al momento de ingresar a realizar su visita.</i></p>

		</div>
		</td>
		</tr>
		<tr>
		<td style="width:80%"><img src="cid:'.$cid1.'" alt="" style="padding: 10px;width: 185px;"></td>
		<td style="width:80%"><i style="padding: 185px;width:20%" class="ocultar-responsive">
		<p style="font-size: 11px;">Agustín Gómez y pie de monte</p>
		<p style="font-size: 11px;">de la Sierra Chica Rivadavia</p>
		<p style="font-size: 11px;">San Juan, Argentina</p>
		<p style="font-size: 11px;">+54 264 479-1840</p>
		</i>
		</td>
		<td style="width:20%"><img src="cid:'.$cid2.'" alt="" style="padding: 10px;width: 227px;">  </td>
		</tr>
		</tbody>
		</table>
		</div>
		</td>
		</tr>
		</tbody>
		</table>
		</div>
		<div style="margin:0 auto;max-width:640px;background:#ffffff">
		<table style="width:100%;background:#ffffff" border="0" cellspacing="0" cellpadding="0" align="center">
		<tbody>
		<tr>
		<td style="text-align:center;vertical-align:top">
		<div class="m_-3803555639560832116mj-column-per-100" style="vertical-align:top;display:inline-block;font-size:13px;text-align:left;width:100%" aria-labelledby="mj-column-per-100">
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
		<tbody>
		<tr>
		<td align="left">
		<table style="border-collapse:collapse;border-spacing:0px" border="0" cellspacing="0" cellpadding="0" align="left">
		<tbody>
		<tr>
		<td style="width:640px;height:15px;background-color:#00a29d">&nbsp;</td>
		</tr>
		</tbody>
		</table>
		</td>
		</tr>
		</tbody>
		</table>
		</div>
		</td>
		</tr>
		</tbody>
		</table>
		</div>
		</div>

		</td>
		</tr>
		</tbody>
		</table>
		';
		$cuerpo .= "</body></html>";


		$this->email->initialize( $this->configEmail() );

		$this->email->from('asesoresculturales@anchipurac.com', 'Anchipurac' );
		$this->email->to($responsable['email']);

		$this->email->subject( 'Visita a Anchipurac');

		$this->email->message($cuerpo);

		$res = $this->email->send();

		return ($res?$res:$this->email->print_debugger());
	}

	/*
	* Función encargada de configurar el email que enviará las confirmaciones
	* @author rodrigo kokot
	* @inputs no posee
	* @param no posee
	* @return arreglo de configuración
	*/ 
	private function configEmail()
	{
      	// Configuración librería email 
		$config['useragent'] = 'CodeIgniter';
		$config['protocol'] = 'smtp';
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