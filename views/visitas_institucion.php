<?= form_open('', array('id' => 'i_formulario')); ?>
<div  id="i2">
  <div id="ayuda-tercer-paso" style="display: grid;grid-template-rows: 100%;text-align: left;background-color: #575756;">
    <p class="path"><strong class="header__bolder_num">2</strong>Datos ESCUELA/COLEGIO</p>
  </div>
  <div class="formulario" id="i_formulario_establecimiento">
    <div class="row cinco-columnas segundo_paso bloque-input-radio">
      <p>Seleccione</p>
      <label class="flex-check-form">Institución Educativa <input type="radio" class="ml-5" name="tipo_institucion" value="Institucion Educativa"  required></label>
      <!--label class="flex-check-form">Colegio <input type="radio" class="ml-5" name="tipo_institucion" value="colegio"  required></label-->
      <label class="flex-check-form">ONG <input type="radio" class="ml-5" name="tipo_institucion" value="ONG" required></label>
      <label class="flex-check-form">Otros <input type="radio" class="ml-5" name="tipo_institucion" value="Otros"  required></label>
    </div>
    <div class="row tres-columnas segundo_paso">
      <div class="wrapper" style="grid-column: 1/3;">
        <label for="establecimiento"><?=lang('form_establecimiento');?></label>
        <input type="text" placeholder="<?=lang('form_establecimiento_ph');?>" id="i_establecimiento" name="i_establecimiento"  required>
      </div>

      <div class="wrapper">
        <label for="cue"><?=lang('form_cue');?></label>
        <input type="number" placeholder="<?=lang('form_cue_ph');?>" id="i_cue" name="i_cue" required>
      </div>
    </div>
    <div class="row tres-columnas segundo_paso" style="margin-bottom: 0">
      <div class="wrapper"><label>Año que cursa</label></div>
      <div class="wrapper"><label>Primario</label></div>
    <div class="wrapper"><label>Secundario</label></div>
  </div>


  <div class="row tres-columnas segundo_paso bloque-input-radio" style="margin-top: 0">
  <div class="mb-0 row tres-columnas">
     <p>Seleccione</p>
    </div>
    <div class="row mb-0 siete-columnas">
      <!-- <p>Primario</p> -->
      <!--<label class="flex-check-form">1° <input type="radio" class="ml-5" name="tipo_anio_cursado" value="1° primaria"  required> </label>
      <label class="flex-check-form">2° <input type="radio" class="ml-5" name="tipo_anio_cursado" value="2° primaria"  required> </label>
      <label class="flex-check-form">3° <input type="radio" class="ml-5" name="tipo_anio_cursado" value="3° primaria"  required> </label>
      <label class="flex-check-form">4° <input type="radio" class="ml-5" name="tipo_anio_cursado" value="4° primaria"  required> </label>
      <label class="flex-check-form">5° <input type="radio" class="ml-5" name="tipo_anio_cursado" value="5° primaria"  required> </label>-->
      <label class="flex-check-form">6° <input type="radio" class="ml-5" name="tipo_anio_cursado" value="6° primaria"  required> </label>
    </div>
    <div class="row mb-0 siete-columnas">
      <!-- <p>Secundario</p> 
      <label class="flex-check-form">1° <input type="radio" class="ml-5" name="tipo_anio_cursado" value="1° secundaria"  required> </label>
      <label class="flex-check-form">2° <input type="radio" class="ml-5" name="tipo_anio_cursado" value="2° secundaria"  required> </label>-->
      <label class="flex-check-form">3° <input type="radio" class="ml-5" name="tipo_anio_cursado" value="3° secundaria"  required> </label>
      <!--<label class="flex-check-form">4° <input type="radio" class="ml-5" name="tipo_anio_cursado" value="4° secundaria"  required> </label>
      <label class="flex-check-form">5° <input type="radio" class="ml-5" name="tipo_anio_cursado" value="5° secundaria"  required> </label>-->
      <label class="flex-check-form">6° <input type="radio" class="ml-5" name="tipo_anio_cursado" value="6° secundaria"  required> </label>
      <label class="flex-check-form">7° <input type="radio" class="ml-5" name="tipo_anio_cursado" value="7° secundaria"  required> </label>

    </div>
  </div>

  <div class="row mb-0 tres-columnas segundo_paso">
    <div class="wrapper">
      <label for="provincia"><?=lang('form_provincia');?></label>
      <input type="text" placeholder="<?=lang('form_provincia_ph');?>" id="i_provincia" name="i_provincia" required>
    </div>
    <div class="wrapper">
      <label for="departamento"><?=lang('form_departamento');?></label>
      <input type="departamento" placeholder="<?=lang('form_departamento_ph');?>" id="i_departamento" name="i_departamento" required>
    </div>
    <div class="wrapper">
      <label for="tel_institucion"><?=lang('form_tel_institucion');?></label>
      <input type="number" placeholder="<?=lang('form_tel_institucion_ph');?>" id="i_tel_institucion" name="i_tel_institucion" required>
    </div>
  </div>

  <div class="row tres-columnas segundo_paso">
    <div class="wrapper">
      <label for="autoridad_est"><?=lang('form_autoridad_est');?></label>
      <input type="text" placeholder="<?=lang('form_autoridad_est_ph');?>" id="i_autoridad_est" name="i_autoridad_est" required>
    </div>
    <div class="wrapper">
      <label for="dni_autoridad"><?=lang('form_dni');?></label>
      <input type="number" placeholder="<?=lang('form_dni_ph');?>" id="i_dni_autoridad" name="i_dni_autoridad" required>
    </div>
    <div class="wrapper">
      <label for="tel_autoridad"><?=lang('form_tel');?></label>
      <input type="number" placeholder="<?=lang('form_tel_ph');?>" id="i_tel_autoridad" name="i_tel_autoridad" required>
    </div>
  </div>  

  <div class="row tres-columnas segundo_paso">
    <div class="wrapper" style=" grid-column: 2/3;">
      <button type="button" class="botones-visitas" style="float: right;" id="i_btn_datos_establecimiento">Confirmar datos personales</button>
    </div>
  </div>

</div>
<div  class="cinco-columnas particular-paso-2" id="i_formulario_establecimiento_datos" style="display: none;">
  <div class="wrapper" id="i_formulario_establecimiento_datos1" style="border: none;"></div>
  <div class="wrapper" id="i_formulario_establecimiento_datos2" style="border: none;"></div>
  <div class="wrapper" id="i_formulario_establecimiento_datos3" style="border: none;"></div>
  <div class="wrapper" id="i_formulario_establecimiento_datos4" style="border: none;"></div>
  <div class="wrapper" id="i_formulario_establecimiento_datos5" style="border: none;"></div>
</div>
</div>

<div id="i3">
  <div id="ayuda-segundo-paso" class="ayuda-segundo-paso" style="display: grid;grid-template-rows: 100%;text-align: left;background-color: #575756;">
    <p class="path"><strong class="header__bolder_num">3</strong>Seleccione cantidad de personas</p>
  </div>
  <div  class="una-columna particular-paso-2" >
    <div class="wrapper">
      <center>
        <span>Defina cantidad de personas que realizarán la visita:  <input type="number" class="input-number__clean" name="i_numero_visitantes" id="i_numero_visitantes" min="1" placeholder="0">     personas</span>
      </center>
    </div>
  </div>
</div>

<div id="i4" style="margin-bottom: 25px;">
  <div id="ayuda-tercer-paso" style="display: grid;grid-template-rows: 100%;text-align: left;background-color: #575756;">
    <p class="path"><strong class="header__bolder_num">4</strong>Seleccione día y hora</p>
  </div>
  <div >
    <!-- <div class="una-columna visita-establecimiento-calendario i_dia_hora">
      <center>
        Los días martes, jueves y sábados son DÍAS RESERVADOS de manera EXCLUYENTE para visitas de ESTABLECIMIENTOS EDUCATIVOS.
        <br>Por lo que si no es una visita educativa deberá seleccionar los días lunes, miércoles, viernes y domingos.
      </center>
    </div> -->
    <div class="grid-container mt-40 i_dia_hora" id="i_dia_hora" >
      <div class="item1">
        <div id="i_datepicker"></div>
        <input type="hidden" name="i_fecha_datepicker" id="i_fecha_datepicker" value="<?=date('j/n/Y', strtotime($hoyInstitucion))?>">
      </div>
      <?php $horariosInstitucion = (!empty($horariosHoyInstitucion))? 'overflow-y: scroll;' : ''; ?>
      <div class="item2 table-responsive" style=" <?=$horariosInstitucion?> height: 285px;">
        <table class="table table-striped" style="width: 100%">
          <thead>
            <tr style="background-color: #00a49d;height: 40px;color: white;">
              <th colspan="4"><center id="i_fecha_seleccionada"></center></th>
            </tr>
          </thead>
          <tbody style="text-align: center;" id="i_tabla_cuerpo">
            <?php if(!empty($horariosHoyInstitucion))foreach($horariosHoyInstitucion as $horario){ 
              $hora = explode(":", $horario->hora); ?>
              <tr id="i_h_<?=$hora[0]?>_<?=$hora[1]?>" style="background-color: rgb(129, 213, 209);">
                <td><input type="radio" name="i_hora" id="i_hora" value="<?=$hora[0].':'.$hora[1]?>"  > <?=$hora[0].':'.$hora[1]?></td>
                <td class="ocultar-responsive">Visita Guiada</td>
                <td class="hora-estado">DISPONIBLE</td>
              </tr>
              <?php } ?>
            </tbody>
          </table>

        </div>
        <div class="item3 wrapper">
          <button type="button" class="botones-visitas"  id="i_btn_listo_dia">Confirmar día y hora</button>
        </div>
      </div>
      <div  class="cinco-columnas particular-paso-2" id="i_dia_hora_elegidos" style="display: none;">
        <div class="wrapper" id="i_dia_hora_elegidos1" style="border: none;padding: 2px;"></div>
        <div class="wrapper" id="i_dia_hora_elegidos2" style="border: none;padding: 2px;"></div>
        <div class="wrapper" id="i_dia_hora_elegidos3" style="border: none;padding: 2px;"></div>
        <div class="wrapper" id="i_dia_hora_elegidos4" style="border: none;padding: 2px;"></div>
        <div class="wrapper" id="i_dia_hora_elegidos5" style="border: none;padding: 2px;"></div>
      </div>
    </div>
  </div>

  <div  id="i5">
    <div id="ayuda-tercer-paso" style="display: grid;grid-template-rows: 100%;text-align: left;background-color: #575756;">
      <p class="path"><strong class="header__bolder_num">5</strong>Datos del REFERENTE DE LA VISITA</p>
    </div>
    <div class="formulario" id="i_formulario_responsable">
      <div class="row tres-columnas segundo_paso">
        <div class="wrapper">
          <label for="nombre"><?=lang('form_nombre');?></label>
          <input type="text" placeholder="<?=lang('form_nombre_ph');?>" maxlength="10" id="i_nombre" name="i_nombre" >
        </div>
        <div class="wrapper">
          <label for="apellido"><?=lang('form_apellido');?></label>
          <input type="text" placeholder="<?=lang('form_apellido_ph');?>" maxlength="10" id="i_apellido" name="i_apellido" >
        </div>
        <div class="wrapper">
          <label for="edad"><?=lang('edad');?></label>
          <input type="number" placeholder="<?=lang('edad_ph');?>" id="i_edad" name="i_edad" >
        </div>
      </div>

      <div class="row tres-columnas segundo_paso">
        <div class="wrapper">
          <label for="procedencia"><?=lang('procedencia');?></label>
          <input type="text" placeholder="<?=lang('procedencia_ph');?>" id="i_procedencia" name="i_procedencia" >
        </div>
        <div class="wrapper">
          <label for="email"><?=lang('form_email');?></label>
          <input type="email" placeholder="<?=lang('form_email_ph');?>" id="i_email" name="i_email" >
        </div>
        <div class="wrapper">
          <label for="ocupacion"><?=lang('form_ocupacion');?></label>
          <input type="text" placeholder="<?=lang('form_ocupacion_ph');?>" id="i_ocupacion" name="i_ocupacion" >
        </div>
      </div>  

      <div class="row tres-columnas segundo_paso">
        <div class="wrapper" style=" grid-column: 2/3;">
          <button type="button" class="botones-visitas" style="float: right;" id="i_btn_datos_personales">Confirmar datos</button>
        </div>
      </div>

    </div>
    <div  class="cinco-columnas particular-paso-2" id="i_formulario_responsable_datos" style="display: none;">
      <div class="wrapper" id="i_formulario_responsable_datos1" style="border: none;padding: 2px;"></div>
      <div class="wrapper" id="i_formulario_responsable_datos2" style="border: none;padding: 2px;"></div>
      <div class="wrapper" id="i_formulario_responsable_datos3" style="border: none;padding: 2px;"></div>
      <div class="wrapper" id="i_formulario_responsable_datos4" style="border: none;padding: 2px;"></div>
      <div class="wrapper" id="i_formulario_responsable_datos5" style="border: none;padding: 2px;"></div>
    </div>
  </div>

  <div id="i6">
     <!-- <button src="PLANTILLA/prueba.png">Descargar Planilla</button>
     <input type="file">Subir Planilla</input>-->
    <!--div id="ayuda-tercer-paso" style="display: grid;grid-template-rows: 100%;text-align: left;background-color: #575756;">
      <p class="path"><strong class="header__bolder_num">6</strong>Ingrese lista de visitantes</p>
    </div>
    <div id="i_listado_visitantes">
      <div id="i_carga_visitantes">
        <div class="row seis-columnas formulario tercer_paso fila-visitante" id="i_visitante_1">
          <div class="wrapper" style="margin: auto;">
            <span class="nro_visitante">1. </span>
          </div>
          <div class="wrapper">

            <input type="text" class="datos_visitante" placeholder="<?=lang('form_apellido_ph');?>" maxlength="30" id="i_apellido_visitante" name="i_apellido_visitante" onchange="verificaRegistroCompletoInstitucion(this)">
          </div>
          <div class="wrapper">

            <input type="text" class="datos_visitante" placeholder="<?=lang('form_nombre_ph');?>" id="i_nombre_visitante"  name="i_nombre_visitante" onchange="verificaRegistroCompletoInstitucion(this)">
          </div>
          <div class="wrapper">

            <input type="number" class="datos_visitante" placeholder="<?=lang('edad_ph');?>" id="i_edad_visitante" name="i_edad_visitante"  onchange="verificaRegistroCompletoInstitucion(this)">
          </div>
          <div class="wrapper">
            <input type="text" class="datos_visitante" placeholder="<?=lang('form_ocupacion_ph');?>" id="i_ocupacion_visitante" name="i_ocupacion_visitante"  onchange="verificaRegistroCompletoInstitucion(this)">
          </div>
          <div class="wrapper">
           <input type="checkbox" name="option[]" id="check1" disabled="" />
           <label for="check1" style="margin-top: 3px;">
            <span class="fa-stack">
              <i class="fa fa-square-o fa-stack-1x fa-2x"></i>
              <i class="fa fa-check fa-stack-1x fa-2x"></i>
            </span>
          </div>
        </div> 

      </div>
      <div class="row tres-columnas segundo_paso" style="margin-bottom: 25px;">
        <div class="wrapper" style=" grid-column: 2/3;">
          <button type="button" class="botones-visitas" style="float: right;" id="i_btn_listo_listado_visitantes">Confirmar listado de visitantes</button>
        </div>
      </div>
    </div>
  <div id="listado_visitantes_elegidos">
   -- 
       <div class="una-columna particular-paso-2">
         <div class="wrapper"></div>
       </div>
   --
  </div--> 


  <div id="ayuda-tercer-paso header__style" style="display: grid;grid-template-rows: 100%;text-align: left;background-color: #575756;">
    <p class="path"><strong class="header__bolder_num">6</strong>Ingrese lista de visitantes</p>
  </div>

 <div class="row tres-columnas segundo_paso" id="columnas-i6" style=" margin-bottom: 25px; padding-top: 20px">         
        <div class="wrapper"  id="idiv-descargar">    
          <button type="button" class="botones-visitas" style="margin: 0 auto;" id="i_btn_descargar_planilla">
            <a style="color: #00a49d!important; font-family: sans-serif-italic;" id="i_descargar_planilla" href="<?= base_url('assets/planilla/planilla_visitas_institucional.xlsx') ?>" download="planilla_institucion">Descargar Planilla</a>
          </button> 
        </div>
    
        <div class="wrapper" style=" grid-column: 2/2; padding-bottom: 10px;" id="idiv-subir">
          <input type="hidden" name="MAX_FILE_SIZE" value="200000" />
          <input type="file" style="display:none" class="botones-visitas" accept=".xlsx, .xls"  name ="i_uploadedfile" id="i_uploadedfile">     
          <label style="display:flex; justify-content: center; align-items: center; margin: 0 auto;" class="botones-visitas" id="i_label_carga" for="i_uploadedfile"><span style="font-family: sans-serif-italic; font-size: 18px">Subir Archivo</span>
          </label>   
        </div>

        <div class="wrapper" style="grid-column: 3/3;" id="i_div_msj_ayuda" >
          <p class="big-subtitle" style="text-align: center;">Debe descargar la planilla y luego subirla con los datos de los visitantes.</p>
        </div>

        <div class="wrapper" style="display: none; grid-column: 2/2;" id="i_div_listo">
          <button type="button" class="botones-visitas" style="margin: 0 auto" id="i_btn_listo_listado_visitantes_b">Continuar</button>
        </div>

    </div>


</div>


<div id="i7" style="padding: 20px">
  <div id="ayuda-tercer-paso header__style" style="display: grid;grid-template-rows: 100%;text-align: left;background-color: #575756;">
    <p class="path"><strong class="header__bolder_num">7</strong>Opcional visita al PTA</p>
  </div>
  <div  class="grid-tres-columnas-2 particular-paso-1" style="padding: 30px;">
   <div class="wrapper" style="padding: 5px;">
    <h5 class="big-title">¿Desea visitar el PTA - Parque de Tecnologías Ambientales?</h5>
    <p class="big-subtitle">Comuniquese al 02644302244</p>
     
  </div>
  </div>
    
 <!--div class="wrapper">
    <label class="title-section input-pta" >
     <input type="radio" name="i_visita_pta" id="" value="si" class="title i-visita-pta"> Si
     <span class="checkmark"></span>
   </label>
 </div>
 <div class="wrapper">
  <label class="title-section input-pta">
    <input type="radio" name="i_visita_pta" id="" value="no" class="title i-visita-pta"> No
    <span class="checkmark"></span>
  </label>
</div-->
  <div class="wrapper" style="text-align: center";>
          <label class="title-section input-pta visita-pta">
            <input type="button" name="i_visita_pta" id="i_confirm-PTA" value="Continuar" class="botones-visitas"> 
          </label>
      </div>

<!-- EN PROCESO
<div id="i7">
  <div id="ayuda-tercer-paso" style="display: grid;grid-template-rows: 100%;text-align: left;background-color: #575756;">
    <p class="path"><strong class="header__bolder_num">7</strong>Opcional visita al PTA</p>
  </div>
  <div  class="grid-tres-columnas-2 particular-paso-1" style="padding: 30px;">
   <div class="wrapper" style="padding: 5px;">
    <h5>¿Desea visitar el PTA - Parque de Tecnologías Ambientales? Llamar al 02644302244</h5>
    <p>Un coordinador de Anchipurac se comunicará vía telefónica con usted.</p>
     <a style="border-radius:5px;background-color:green;color:white;" href="api.whatsapp.com/send?phone=5492645849521&text=Me%20gustaría%20saber%20cómo%20puedo%20realizar%20una%20visita%20guiada%20por%20el%20Parque%20de%20tecnologias%20ambientales">Reservas por Whatsapp</a>
  </div>
    
 <div class="wrapper" style="display:none;">
    <label class="title-section input-pta" >
     <input type="radio" name="i_visita_pta" id="" value="si" class="title i-visita-pta"> Si
     <span class="checkmark"></span>
   </label>
 </div>
 <div class="wrapper" style="display:none;">
  <label class="title-section input-pta">
    <input type="radio" name="i_visita_pta" id="" value="no" class="title i-visita-pta"> No
    <span class="checkmark"></span>
  </label>
</div>
--> 
</div>
<!--/div-->

<div id="i8">
  <div id="ayuda-tercer-paso" style="display: grid;grid-template-rows: 100%;text-align: left;background-color: #575756;">
    <p class="path"><strong class="header__bolder_num">8</strong>Confirmación</p>
  </div>
  <div  class="una-columna particular-paso-2" >
    <div class="wrapper">
      <center>
        <h2 style="padding: 40px;">
         <span class="confirmacion-visita"> Visita </span><strong style="letter-spacing: 5px;margin: 0 10px;text-transform: uppercase;font-weight: bold;font-size: 28px;">INSTITUCIONAL</strong><span class="confirmacion-visita"> con </span><strong style="letter-spacing: 5px;margin: 0 10px;text-transform: uppercase;font-weight: bold;font-size: 28px;" id="i_confirmacion_cantidad"></strong><span class="confirmacion-visita">. El día </span><strong style="letter-spacing: 5px;margin: 0 10px;text-transform: uppercase;font-weight: bold;font-size: 28px;" id="i_confirmacion_dia"></strong><span class="confirmacion-visita"> a las </span><strong style="letter-spacing: 5px;margin: 0 10px;text-transform: uppercase;font-weight: bold;font-size: 28px;" id="i_confirmacion_hora"></strong><span class="confirmacion-visita"> hs. </span>
       </h2>
     </center>
   </div>
 </div>
 <div class="row tres-columnas segundo_paso" style="margin-bottom: 25px; margin-top: 110px;">
  <div class="wrapper" style=" grid-column: 2/3;">
    <button type="button" class="botones-visitas btnConfirmar-center" id="i_btnEnviar">Confirmar visita</button>
    <img id="i_loading" src="<?=base_url('assets/img/gif-load.gif')?>" style="height: 46px;width: 46px;display: none">
  </div>
</div>
</div>


<div id="paso_camino_institucion2" class="pasos-seguir">
  <p class="path-2">2 - Datos ESCUELA/COLEGIO</p>
</div>
<div id="paso_camino_institucion3" class="pasos-seguir">
  <p class="path-2">3 - Seleccione cantidad de personas</p>
</div>
<div id="paso_camino_institucion4" class="pasos-seguir">
  <p class="path-2">4 - Seleccione día y hora</p>
</div>
<div id="paso_camino_institucion5" class="pasos-seguir">
  <p class="path-2">5 - Datos del REFERENTE DE LA VISITA</p>
</div>
<div id="paso_camino_institucion6" class="pasos-seguir">
  <p class="path-2">6 - Ingrese lista de visitantes</p>
</div>
<div id="paso_camino_institucion7" class="pasos-seguir">
  <p class="path-2">7 - Opcional visita al PTA</p>
</div>
<div id="paso_camino_institucion8" class="pasos-seguir">
  <p class="path-2">8 - Confirmación</p>
</div>

<?=form_close()?>