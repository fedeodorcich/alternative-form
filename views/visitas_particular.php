<?= form_open('', array('id' => 'formulario')); ?>
<div id="p2">
  <div id="ayuda-segundo-paso" class="ayuda-segundo-paso" style="display: grid;grid-template-rows: 100%;text-align: left;background-color: #575756;">
    <p class="path"><strong class="header__bolder_num">2</strong>Seleccione cantidad de personas</p>
  </div>
  <div  class="una-columna particular-paso-2" >
    <div class="wrapper">
      <center>
        <span>Defina cantidad de personas que realizarán la visita:  <input type="number" class="input-number__clean" name="numero_visitantes" id="numero_visitantes" min="1" placeholder="0">     personas</span>
      </center>
    </div>
  </div>
</div>

<div id="p3">
  <div id="ayuda-tercer-paso" class=" header__style" style="display: grid;grid-template-rows: 100%;text-align: left;background-color: #575756;">
    <p class="path"><strong class="header__bolder_num">3</strong>Seleccione día y hora</p>
  </div>
  <div class="">
    <div class="grid-container mt-40" id="dia_hora" >
      <div class="item1">
       <div id="datepicker"></div>
       <input type="hidden" name="fecha_datepicker" id="fecha_datepicker" value="<?=date('j/n/Y', strtotime($hoyParticular))?>">
     </div>
     <?php $horarios = (!empty($horariosHoyParticular))? 'overflow-y: scroll;' : ''; ?>
     <div class="item2 table-responsive" style=" <?=$horarios?> height: 285px;">
      <table class="table table-striped" style="width: 100%">
        <thead>
          <tr style="background-color: #00a49d;height: 40px;color: white;">
            <th colspan="4"><center id="fecha_seleccionada"></center></th>
          </tr>
        </thead>
        <tbody style="text-align: center;" id="tabla_cuerpo">
          <?php if(!empty($horariosHoyParticular))foreach($horariosHoyParticular as $horarios){
            $hora = explode(":", $horarios->hora);
            ?>
            <tr id="h_<?=$hora[0]?>_<?=$hora[1]?>" style="background-color: rgb(129, 213, 209);">
              <td><input type="radio" onclick="horaSeleccionada()" name="hora" id="hora" value="<?=$hora[0].':'.$hora[1]?>"  > <?=$hora[0].':'.$hora[1]?></td>
              <td class="ocultar-responsive">Visita Guiada</td>
              <td class="hora-estado">DISPONIBLE</td>
            </tr>
            <?php } ?>
          </tbody>
        </table>

      </div>
      <div class="item3 wrapper">
        <button type="button" class="botones-visitas"  id="btn_listo_dia">Confirmar día y hora</button>
      </div>
    </div>
    <div  class="cinco-columnas particular-paso-2" id="dia_hora_elegidos">
      <div class="wrapper" id="dia_hora_elegidos1" style="border: none;padding: 2px;"></div>
      <div class="wrapper" id="dia_hora_elegidos2" style="border: none;padding: 2px;"></div>
      <div class="wrapper" id="dia_hora_elegidos3" style="border: none;padding: 2px;"></div>
      <div class="wrapper" id="dia_hora_elegidos4" style="border: none;padding: 2px;"></div>
      <div class="wrapper" id="dia_hora_elegidos5" style="border: none;padding: 2px;"></div>
    </div>
  </div>
</div>

<div  id="p4">
  <div id="ayuda-tercer-paso header__style" style="display: grid;grid-template-rows: 100%;text-align: left;background-color: #575756;">
    <p class="path"><strong class="header__bolder_num">4</strong>Datos Personales</p>
  </div>
  <div class="formulario" id="formulario_responsable">
    <div class="row tres-columnas segundo_paso">
      <div class="wrapper">
        <label for="nombre"><?=lang('form_nombre');?></label>
        <input type="text" placeholder="<?=lang('form_nombre_ph');?>" maxlength="10" id="nombre" name="nombre"  required>
      </div>
      <div class="wrapper">
        <label for="apellido"><?=lang('form_apellido');?></label>
        <input type="text" placeholder="<?=lang('form_apellido_ph');?>" maxlength="10" id="apellido" name="apellido" required>
      </div>
      <div class="wrapper">
        <label for="edad"><?=lang('edad');?></label>
        <input type="number" placeholder="<?=lang('edad_ph');?>" id="edad" name="edad" required>
      </div>
    </div>

    <div class="row tres-columnas segundo_paso">
      <div class="wrapper">
        <label for="procedencia"><?=lang('procedencia');?></label>
        <input type="text" placeholder="<?=lang('procedencia_ph');?>" id="procedencia" name="procedencia" required>
      </div>
      <div class="wrapper">
        <label for="email"><?=lang('form_email');?></label>
        <input type="email" placeholder="<?=lang('form_email_ph');?>" id="email" name="email" required>
      </div>
      <div class="wrapper">
        <label for="ocupacion"><?=lang('form_ocupacion');?></label>
        <input type="text" placeholder="<?=lang('form_ocupacion_ph');?>" id="ocupacion" name="ocupacion">
      </div>
    </div>  

    <div class="row tres-columnas segundo_paso">
      <div class="wrapper">
        <label for="procedencia"><?=lang('form_tel');?></label>
        <input type="number" placeholder="<?=lang('form_tel_ph');?>" id="telefono_particular" name="telefono_particular" required>
      </div>
    </div>  

<br>

    <div>
    
    <h3>La siguiente encuesta se realiza en reprsentación de todo el grupo</h3>
    <h2>Encuesta COVID-19</h2>


    <!--div class="col-md-12" id="1">
      <label > ¿Tiene fiebre(37.5 o mas)?</label>
      <div class="form-check">
      <label class="form-check-label" for="si1">
      <input id="si1" class="form-check-input" name="respuesta0 " type="radio" value="1" required="">si</label>
      </div>
      <div class="form-check">
      <label class="form-check-label" for="no2">
        <input id="no2" class="form-check-input" name="respuesta0 " type="radio" value="2" required="">no</label>
      </div>
     </div-->

    <div>
      <label>¿Tiene fiebre(37.5 o mas)?</label>
      <div>
          <label for="si1">
              <input id="si1" type="radio" name="fiebre" value="Si" required>Si
          </label>
      </div>
    <div>
      <label for="no1">
        <input id="no1" type="radio" name="fiebre" value="No">No
      </label>
    </div>
    </div>


    <div>
      <label>¿Tiene diarrea o manifestaciones cutaneas?</label>
      <div>
      <label for="si2">
         <input id="si2" type="radio" name="diarrea" value="Si" required>Si
      </label>
    </div>
    <div>
      <label for="no2">
        <input id="no2" type="radio" name="diarrea" value="No">No
      </label>
    </div>
    </div>


    <div>
      <label>¿Tiene tos?</label>
      <div>
      <label for="si3">
         <input id="si3" type="radio" name="tos" value="Si" required>Si
      </label>
    </div>
    <div>
      <label for="no3">
        <input id="no3" type="radio" name="tos" value="No">No
      </label>
    </div>
    </div>


    <div>
      <label>¿Tiene dolor de garganta?</label>
      <div>
      <label for="si4">
         <input id="si4" type="radio" name="dolor" value="Si" required>Si
      </label>
    </div>
    <div>
      <label for="no4">
        <input id="no4" type="radio" name="dolor" value="No">No
      </label>
    </div>
    </div>


     <div>
      <label>¿Tiene perdida de olfato/gusto?</label>
      <div>
      <label for="si5">
         <input id="si5" type="radio" name="olfato" value="Si" required>Si
      </label>
    </div>
    <div>
      <label for="no5">
        <input id="no5" type="radio" name="olfato" value="No">No
      </label>
    </div>
    </div>
    

    <h2>En los ultimos 21 dias...</h2>

    <div>
      <label>¿Ha estado en contacto con casos confirmados de COVID-19?</label>
      <div>
      <label for="si6">
         <input id="si6" type="radio" name="casos" value="Si" required>Si
      </label>
    </div>
    <div>
      <label for="no6">
        <input id="no6" type="radio" name="casos" value="No">No
      </label>
    </div>
    </div>


    <div>
      <label>¿Ha viajado fuera de la PROVINCIA?</label>
      <div>
      <label for="si7">
         <input id="si7" type="radio" name="provincia" value="Si" required>Si
      </label>
    </div>
    <div>
      <label for="no7">
        <input id="no7" type="radio" name="provincia" value="No">No
      </label>
    </div>
    </div>


    <div>
      <label>¿Ha viajado fuera del PAIS?</label>
      <div>
      <label for="si8">
         <input id="si8" type="radio" name="pais" value="Si" required>Si
      </label>
    </div>
    <div>
      <label for="no8">
        <input id="no8" type="radio" name="pais" value="No">No
      </label>
    </div>
    </div>

  

  <br>
  <div>
    <p><strong>Al finalizar la inscripcion se descargara una declaracion jurada</strong></p>
  </div>
</div>

    <div class="row tres-columnas segundo_paso">
      <div class="wrapper" style=" grid-column: 2/3;">
        <button type="button" class="botones-visitas" style="float: right;" id="btn_datos_personales">Confirmar datos personales</button>
      </div>
    </div>

  </div>
  <div  class="cinco-columnas particular-paso-2" id="formulario_responsable_datos">
    <div class="wrapper" id="formulario_responsable_datos1" style="border: none;padding: 2px;"></div>
    <div class="wrapper" id="formulario_responsable_datos2" style="border: none;padding: 2px;"></div>
    <div class="wrapper" id="formulario_responsable_datos3" style="border: none;padding: 2px;"></div>
    <div class="wrapper" id="formulario_responsable_datos4" style="border: none;padding: 2px;"></div>
    <div class="wrapper" id="formulario_responsable_datos5" style="border: none;padding: 2px;"></div>
  </div>
</div>

<div id="p5">
  <div id="ayuda-tercer-paso header__style" style="display: grid;grid-template-rows: 100%;text-align: left;background-color: #575756;">
    <p class="path"><strong class="header__bolder_num">5</strong>Ingrese lista de visitantes</p>
  </div>
  <div id="listado_visitantes">
    <div id="carga_visitantes">
      <div class="row seis-columnas tercer_paso fila-visitante" id="visitante_1">
        <div class="wrapper" style="margin: auto;">
          <span class="nro_visitante">1. </span>
        </div>
        <div class="wrapper">

          <input type="text" class="datos_visitante" placeholder="<?=lang('form_apellido_ph');?>" maxlength="30" id="apellido_visitante" name="apellido_visitante" onchange="verificaRegistroCompleto(this)">
        </div>
        <div class="wrapper">

          <input type="text" class="datos_visitante" placeholder="<?=lang('form_nombre_ph');?>" id="nombre_visitante"  name="nombre_visitante" onchange="verificaRegistroCompleto(this)">
        </div>
        <div class="wrapper">

          <input type="number" class="datos_visitante" placeholder="<?=lang('edad_ph');?>" id="edad_visitante" name="edad_visitante"  onchange="verificaRegistroCompleto(this)" >
        </div>
        <div class="wrapper">
          <input type="text" class="datos_visitante" placeholder="<?=lang('form_ocupacion_ph');?>" id="ocupacion_visitante" name="ocupacion_visitante"  onchange="verificaRegistroCompleto(this)">
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
        <button type="button" class="botones-visitas" style="float: right;" id="btn_listo_listado_visitantes">Confirmar listado de visitantes</button>        
      </div>
    </div>
  </div>
   <!--div id="listado_visitantes_elegidos">
    <div class="una-columna particular-paso-2">
      <div class="wrapper"></div>
    </div>
  </div> -->
</div>

<div id ="p5b" >
<div id="ayuda-tercer-paso header__style" style="display: grid;grid-template-rows: 100%;text-align: left;background-color: #575756;">
    <p class="path"><strong class="header__bolder_num">5</strong>Ingrese lista de visitantes</p>
  </div>

 <div class="row tres-columnas" id="columnas-p5b" style=" margin-bottom: 25px; padding-top: 20px">         
        <div class="wrapper" id="div-descargar" >    
          <button type="button" class="botones-visitas" style="margin: 0 auto;" id="btn_descargar_planilla">
            <a style="color: #00a49d!important; font-family: sans-serif-italic;" id="descargar_planilla" href="<?= base_url('assets/planilla/planilla_visitas_particular.xlsx') ?>" download="planilla_particular.xlsx">Descargar Planilla</a>
          </button> 
        </div>
    
        <div class="wrapper" id="div-subir">
          <input type="hidden" name="MAX_FILE_SIZE" value="200000" />
          <input type="file" style="display:none" class="botones-visitas" accept=".xlsx, .xls"  name ="uploadedfile" id="uploadedfile">     
          <label style="display:flex; justify-content: center; align-items: center; margin: 0 auto;" class="botones-visitas" id="label_carga" for="uploadedfile"><span style="font-family: sans-serif-italic; font-size: 18px">Subir Archivo</span>
          </label>   
        </div>

        <div class="wrapper" id="div_msj_ayuda" style="padding-top: 10px;">
          <p class="big-subtitle" style="text-align: center;">Debe descargar la planilla y luego subirla con los datos de los visitantes.</p>
        </div>

        <div class="wrapper"  style="display: none; grid-column: 2/2; " id="div_listo">
          <button type="button" class="botones-visitas" id="btn_listo_listado_visitantes_b" style="margin: 0 auto;">Continuar</button>
        </div>

    </div>
</div>
<!--div id="p6">
  <div id="ayuda-tercer-paso header__style" style="display: grid;grid-template-rows: 100%;text-align: left;background-color: #575756;">
    <p class="path"><strong class="header__bolder_num">6</strong>Opcional visita al PTA</p>
  </div>
  <div  class="grid-tres-columnas-2 particular-paso-1" style="padding: 30px;">
   <div class="wrapper" style="padding: 5px;">
      <h5 class="big-title">¿Desea visitar el PTA - Parque de Tecnologías Ambientales?</h5>
      <p class="big-subtitle">Un coordinador de Anchipurac se comunicará vía telefónica con usted.</p>
    </div>
    <div class="wrapper"  >
      <label class="title-section input-pta">
        <input type="radio" name="visita_pta" id="" value="si" class="title visita-pta"> Si
        <span class="checkmark"></span>
      </label>
    </div>
    <div class="wrapper" >
      <label class="title-section input-pta visita-pta">
        <input type="radio" name="visita_pta" id="" value="no" class="title visita-pta"> No
        <span class="checkmark"></span>
      </label>
  </div>
</div>
</div-->

<!-- Copiar desde aca-->
<div id="p6" style="padding: 10px">
    <div id="ayuda-tercer-paso header__style" style="display: grid;grid-template-rows: 100%;text-align: left;background-color: #575756;">
      <p class="path"><strong class="header__bolder_num">6</strong>Opcional visita al PTA</p>
    </div>
    <div  class="grid-tres-columnas-2 particular-paso-1" style="padding: 30px;">
      <div class="wrapper" style="padding: 5px;">
        <h5 class="big-title">¿Desea visitar el PTA - Parque de Tecnologías Ambientales?</h5>
        <p class="big-subtitle">Comuniquese al 02644302244</p>
      </div>
    </div>
    <div class="wrapper" style="text-align: center; padding-bottom: 10px;">
        <label class="title-section input-pta visita-pta">
          <input type="button" name="visita_pta" id="confirm-PTA" value="Continuar" class="botones-visitas"> 
        </label>
    </div>

    

</div>



<!-- Hasta aca-->

<div id="p7" style="padding: 10px">
  <div id="ayuda-tercer-paso header__style" style="display: grid;grid-template-rows: 100%;text-align: left;background-color: #575756;">
    <p class="path"><strong class="header__bolder_num">7</strong>Confirmación</p>
  </div>
  <div  class="una-columna particular-paso-2" >
    <div class="wrapper">
      <h2 style="padding: 51px;" class="text-center">
       <span class="confirmacion-visita"> Visita </span><strong style="letter-spacing: 5px;margin: 0 10px;text-transform: uppercase;font-weight: bold;font-size: 28px;">PARTICULAR</strong><span class="confirmacion-visita"> con </span><strong style="letter-spacing: 5px;margin: 0 10px;text-transform: uppercase;font-weight: bold;font-size: 28px;" id="confirmacion_cantidad"></strong><span class="confirmacion-visita">. El día </span><strong style="letter-spacing: 5px;margin: 0 10px;text-transform: uppercase;font-weight: bold;font-size: 28px;" id="confirmacion_dia"></strong><span class="confirmacion-visita"> a las </span><strong style="letter-spacing: 5px;margin: 0 10px;text-transform: uppercase;font-weight: bold;font-size: 28px;" id="confirmacion_hora"></strong><span class="confirmacion-visita"> hs. </span>
     </h2>
   </div>
 </div>
 <div class="row tres-columnas segundo_paso" style="margin-bottom: 25px;margin-top: 110px;">
  <div class="wrapper" style=" grid-column: 2/3;">
    <button type="button" class="botones-visitas btnConfirmar-center" id="btnEnviarParticular">Confirmar visita</button>
    <img id="loading" src="<?=base_url('assets/img/gif-load.gif')?>" style="height: 46px;width: 46px;display: none">
  </div>
</div>
</div>

<div id="paso_camino_particular2" class="pasos-seguir">
  <p class="path-2">2 - Seleccione cantidad de personas</p>
</div>
<div id="paso_camino_particular3" class="pasos-seguir">
  <p class="path-2">3 - Seleccione día y hora</p>
</div>
<div id="paso_camino_particular4" class="pasos-seguir">
  <p class="path-2">4 - Datos Personales</p>
</div>
<div id="paso_camino_particular5" class="pasos-seguir">
  <p class="path-2">5 - Ingrese lista de visitantes</p>
</div>
<div id="paso_camino_particular6" class="pasos-seguir">
  <p class="path-2">6 - Opcional visita al PTA</p>
</div>
<div id="paso_camino_particular7" class="pasos-seguir">
  <p class="path-2">7 - Confirmación</p>
</div>
<?=form_close()?>