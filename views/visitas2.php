<style>
.grid-container {
  display: grid;
  grid-gap: 10px;

}
.title-visita{
  justify-content: center;
  align-items: center;
  text-align: center;
  margin: 0px auto;
  padding: 3%;
}
.item1 {
  grid-column: 1 / span 1;
}
.item2 {
  grid-column: 2 / span 2;
}
</style>
<style type="text/css">
#cantidad_visitantes{
  display: inline-block;
  color: #fff;
  padding-left: 25px;
  padding: 8px;

}
#btn_confirmar_grupo{
  display: inline-block;
  float: right;
  margin-right: 20px;
  margin-top: 5px;
  border: 1px solid #000;
  color: black;
  background-color: white;
  width: 135px;
}
.carga-visitantes{
  background-color: rgb(129, 213, 209);
  height: 40px;
  margin-top: 10px;
}
.visita-establecimiento{
  font-family: "sans-serif-italic" !important;
  font-size: 16px;
  color: #8b8b8a;
  margin-top: 15px;
  margin-bottom: 10px;
  border: 1px solid #a49a91; 
  padding: 8px; 
}
.lugar-visita{
  height: 120px;
  /*margin-bottom: 0px;*/
  grid-column-gap: 0px !important; 
  grid-row-gap: 0px !important; 
}
.cuatro-columnas{
  grid-template-columns: repeat(4, 1fr);
  margin: 0px;
  height: 80px;
}
.seleccion-tipo {
  padding: 9%;
}

.clasehover1
{
 color: #00a49d;
}
.clasehover2
{
 color: #575756;

}

.color-lugar-1
{
 background-color: #00a49d;
}
.color-lugar-2
{
 background-color: #575756;

}

.titulo-modal
{
 background-color: #00a49d;
 text-align: center;
 color: white;
 cursor: pointer;
}

.texto-moda{
  padding: 30px;
  padding-bottom: 10px;
}

#primer_paso{
  grid-template-columns: 35% 60%;
  margin-top: 20px;
  margin-bottom: 30px;
  padding-left: 35px;
  padding-right: 35px;
  grid-column-gap: 50px;
}

.pasos-seguir{

  color: black;
  padding-left: 20px;
  background-color: white;
  border-top-color: #575756;
  border-top-style: solid;
  border-top-width: 1px;
  display: grid;
  grid-template-rows: 100%;
  text-align: left;
  height: 30px;
}

.pasos-seguir-ultimo{
  border-bottom-color: #575756;
  border-bottom-style: solid;
  border-bottom-width: 1px;
}

.pasos-seguir p{
  color: #575756;
  padding-left: 20px;
  font-weight: bold;
}


p {
  font-size: 16px;
  font-family: "sans-serif-light";
  color: #1a1a1a;
  line-height: 1.4em;
}
a, input, span, button, p, div {
  -ms-touch-action: none !important;
  -webkit-touch-callout: none !important;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0) !important;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "sans-serif-regular", Helvetica, Arial, sans-serif;
}
#ayuda-inicial {
  margin-top: 70px;
}
#close{
  position: absolute !important;
  font-size: 18px !important;
  color: #fff !important;
  padding: 10px !important;
  height: 40px !important;
  width: 40px !important;
  border-radius: 50% !important;
  line-height: 20px !important;
}
.botones-visitas{
  border: 1px solid #000;
  color: black;
}

.ui-datepicker{
  width: 100%;
  font-size:21px;
}

.cantidad-visitantes{
  position: relative;
  margin-top: 30px;
  height: 40px;
  background-color: rgb(129, 213, 209);
}

.modal-confirmacion{
  color: black;
  background-color: white;
  height: 530px;
  width: 900px;
}
#ayuda_segundo_resultado{
  margin-bottom: 35px;
}

.visita-establecimiento-calendario{
  font-family: "sans-serif-italic" !important;
  font-size: 15px;
  color: #8b8b8a;
  margin-top: 15px;
  margin-bottom: 20px;
  border: 1px solid #a49a91;
  padding: 8px;
  height: auto;
  
}

.item3 {
 grid-column: 2/3;
}

@media screen and (max-width: 992px) {
  .texto-moda{
    padding: 17px;
  }
  #btnEnviar{
    height: auto;
  }
  footer{
    margin-top: 90px;
  }
  p {
    font-size: 13px;
  }
  #btn_confirmar_grupo{
    width: 86%;
  }
  #btn_agregar_visitante{
    width: 100%;
  }
  
  .formulario form .row.dos-columnas-visitas {
    height: 80px !important;
  }
  .visita-establecimiento-calendario{
   height: auto;
   margin-left: auto;
   margin-right: auto;
 }
 .carga-visitantes{
  height: 105px;
}
#btn_cantidad_visitantes{
  width: 95% !important;
  margin-left: 2% !important;
  margin-top: 5px !important;
  border: 1px solid #000 !important;
  color: black !important;
  background-color: white !important;
}
#ayuda_segundo_resultado{
  margin-top: 70px;
}
.cuatro-columnas{
  margin-bottom: 120px;
}
.modal-confirmacion{
  height: 500px !important;

}
.cantidad-visitantes{
  height: 60px;
}
#ayuda-inicial {
  margin-top: 415px;
}
#datepicker{
  position: relative;
}
#primer_paso{
  grid-template-columns: 100%;
  margin-top: 20px;
}
#seleccion-dia h3{
  font-size: 17px;
}
.ocultar-responsive{
  display: none;
}

#btn_agregar_visitante{
  width: 70px;
}
#ex1{
}
.item2 {
  grid-column: 1 / span 1;
}
.item3 {
  grid-column: 1 / span 1;
}
.ui-datepicker{
  width: 100%;
  font-size:18px;
}
#primer_paso{
  padding-right: 35px;
}
}
.formulario{
  margin-top: 20px;
  margin-bottom: 30px;
}

.lugar-visita{
  margin-bottom: 125px !important;
}

.formulario form .row.dos-columnas-visitas {
  grid-template-columns: repeat(2, 1fr);
  border: 1px solid black; 
  border-top: none;
  height: 126px;
}

.formulario form button {
  font-family: "sans-serif-italic";
  font-size: 16px;
}

#tabla_cuerpo tr,#i_tabla_cuerpo tr{
  height: 35px;
}

.reservado{
  font-family: 'sans-serif-black';
  font-size: 24px;
  letter-spacing: 5px;
  margin-bottom: 20px;
  text-transform: uppercase;
}

.path{
  color: white;
  padding: 3px 0 3px 20px;
  font-family: 'sans-serif-bold';
}
.path-2{
  color: white;
  padding: 3px 0 3px 20px;
  font-family: 'sans-serif-bold';
}
</style>

<!-- STYLE REPAIRS -->
<style>
.realign-p1{
  height: 100px;
  display: flex;
  justify-content: space-around;
  align-items: center;
}
.header__bolder_num{
  line-height: 20px;
  height: 20px;
  width: 20px;
  background: #fff;
  display: inline-block;
  color: #575756;
  text-align: center;
  border-radius: 50%;
  margin-right: 5px;
}
.input-number__clean{
  text-align: center;
  font-weight: 700;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.header__style{
  display: flex;
  align-items: center;
  height:38px;
}
.mb-40{
  margin-bottom: 40px !important;
}
.mt-40{
  margin-top: 40px !important;
}
.text-center{
  text-align: center;
}
.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover{
  border: 1px solid #02807a;
  background: #00a49d;
}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active{
  text-align:center;
}
.big-title{
  font-size: 22px;
}
.big-subtitle{
  font-size: 17px;
  font-weight: 600;
  font-style: italic;
}
.input-pta{
  text-transform: uppercase;
  letter-spacing: 10px;
  font-size: 26px;
  line-height: 26px;
  font-weight: 900;
}
.center-fk-button{
  display: flex;
  align-items: center;
  align-content: center;
  justify-content: center;
  margin: 18px auto;
  top: auto !important;
  bottom: auto !important;
  right: auto !important;
  left: auto !important;
}
.btnConfirmar-center{
  display: block;
  margin: 30px auto;
}
.flex-check-form{
  display: flex;
  justify-content: flex-end;
  align-items: center;
}
.ml-5{
  margin-left:5px;
}
</style>
<!-- END STYLE REPAIRS -->
<div class="contenedor">
  <div class="img-hero mb-0">
    <img src="<?= base_url('assets/img/ejes/ejes/ejes-01.jpg')?>" alt="">
  </div>
</div>

<div class="contenedor">

  <div class="formulario">

   <div id="ayuda-inicial" class="una-columna header__style" style="text-align: left;background-color: #575756;height: 30px;margin-top: 0px">
    <p class="path"><strong class="header__bolder_num">1</strong>Seleccione tipo de visita</p>
  </div>
  <div  class="grid-tres-columnas particular-paso-1 realign-p1" id="tipo_visita">
   <div class="wrapper"  style="margin-top: 14px;">
    <h5>Mi visita es:</h5>
  </div>
  <div class="wrapper"  style="margin-top: 14px;">
    <label class="title-section">
      <input type="radio" name="tipo_visita" id="visita_particular" value="Particular" class="open-modal title" data-target="modal_particular"> <strong style="letter-spacing: 2px;margin-bottom: 20px;text-transform: uppercase; font-size:0.7em;"> Particular</strong> 
      <span class="checkmark" style=""></span>
    </label>
  </div>
  <div class="wrapper" style="margin-top: 14px;">
    <label class="title-section">
      <input type="radio" name="tipo_visita" id="visita_institucion" value="Institucion" class="open-modal title" data-target="modal_institucion"> <strong style="letter-spacing: 5px;margin-bottom: 20px;text-transform: uppercase; font-size:0.7em;"> INSTITUCIONAL</strong> <p style="font-size: 12px;">(Escuelas, colegios, ONGs, otros)</p>
      <span class="checkmark"></span>
    </label>
  </div>
</div>
<div  class="grid-tres-columnas particular-paso-1" id="bloque_tipo_visita_elegido">
 <div class="wrapper"></div>
 <div class="wrapper" ><strong id="tipo_visita_elegido" style="letter-spacing: 5px;margin-bottom: 20px;text-transform: uppercase;"></strong></div>
 <div class="wrapper"></div>
</div>


<?php $this->load->view('visitas_particular');?>
<?php $this->load->view('visitas_institucion');?>
<?php $this->load->view('visitas_particular_js');?>
<?php $this->load->view('visitas_institucion_js');?>

<!-- MODAL -->
<style>
@media(max-height:320px){
.modal-particular{height:80%;}
.modal-institucion{height:90%;}
}

#btn_aceptar_condiciones{
   position: relative!important;
  top: 10px;
  font-size: 18px;
  /*color: #00a49d!important;
  border: 1px solid #00a49d!important; 
  background-color: #81d5d175!important;*/
  color: white;
  border: 1px solid #b9201c!important; 
  background-color: #b9201c;
  width: 300px!important;
  height: 40px!important;
  border-radius:25px 25px 25px 25px;
  line-height: 20px;font-size:0.9em;
}
</style>

<!--=========================================================================-->
  <div class="modal modal--" id="modal_covid" style="z-index: 100;">


  <div class="modal-particular">

    <div class="row una-columna titulo-modal" style="height: 90px;padding: 4%;background-color: #b9201c;" >
      <div class="wrapper " style="padding:1px;">
        <div class="title-section" style="margin-top: 0px;;background-color: #b9201c;" >
         <!--p class="subtitle" style="color: white">Arancel para </p-->
         <b><p class="title" style="letter-spacing: 5px;margin-bottom: 20px;text-transform: uppercase;color: white">CONDICIONES DE VISITA</p></b>
       </div>
     </div>
   </div>
   <div class="texto-modal">
    <center class="texto-modal-visitas-centrar"  style="padding:30px 3px 30px 3px;">
      <p class="texto-modal-visitas" >Declaracion de no sintomas</p>
      <p class="texto-modal-visitas" ><strong>Conozco el protocolo</strong></p>
      <p class="texto-modal-visitas-bold" >Otra cosita</p>
      <p class="texto-modal-visitas-pie" style="font-size:0.75em;padding-top:40px;">La letra chica, cuidado. Al aceptar se descargara una declaración que debera traer firmada</p>
    </center>
  </div>

  <!--div>
    <img src="<?= base_url('assets/img/icotipo_pdf.png')?>" style="height: 40px; width: 40px">
  
    <a src="https://blog.acens.com/white-papers/como-generar-codigos-qr-utilizando-php/" >Descargar pdf</a>
  </div-->
  <div class="row una-columna" >
   <center><button type="button" class="center-fk-button" id="btn_aceptar_condiciones">He leído y estoy de acuerdo</button></center>
 </div>
<!--<a style="color: #00a49d!important; font-family: sans-serif-italic;" id="i_descargar_planilla" href="<?= base_url('assets/planilla/planilla_visitas_institucional.xlsx') ?>" download="planilla_institucion">-->

</div>
</div>
<!--=========================================================================-->

<div class="modal modal--" id="modal_particular" style="z-index: 100;">


  <div class="modal-particular">

    <div class="row una-columna titulo-modal" style="height: 90px;padding: 4%;" >
      <div class="wrapper " style="padding:1px;">
        <div class="title-section" style="margin-top: 0px;background-color: #00a49d;" >
         <p class="subtitle" style="color: white">Arancel para </p>
         <b><p class="title" style="letter-spacing: 5px;margin-bottom: 20px;text-transform: uppercase;color: white">PARTICULARES</p></b>
       </div>
     </div>
   </div>
   <div class="texto-modal">
    <center class="texto-modal-visitas-centrar"  style="padding:30px 3px 30px 3px;">
      <p class="texto-modal-visitas" ><?=$modalContenidoParticular1?></p>
      <p class="texto-modal-visitas" ><strong><?=$valorTicketNumeroParticular?></strong> <i><?=$valorTicketLetrasParticular?></i></p>
      <p class="texto-modal-visitas-bold" ><?=$modalContenidoParticular2?></p>
      <p class="texto-modal-visitas-pie" style="font-size:0.75em;padding-top:40px;"><?=$modalContenidoParticular3?></p>
    </center>
  </div>
  <div class="row una-columna" >
   <center><button type="button" class="center-fk-button" id="btn_aceptar_particular" style="font-size:0.9em;">He leído y estoy de acuerdo</button></center>
 </div>


</div>
</div>


<div class="modal modal--" id="modal_institucion" style="z-index: 100;">


  <div class="modal-institucion" style="">

    <div class="row una-columna titulo-modal" style="height: 90px;padding: 4%;">
      <div class="wrapper ">
        <div class="title-section" style="margin-top: 0px;background-color: #00a49d;" >
         <p class="subtitle" style="color: white">Arancel para </p>
         <b><p class="title" style="letter-spacing: 5px;margin-bottom: 20px;text-transform: uppercase;color: white">INSTITUCIONES</p></b>
       </div>
     </div>
   </div>
   <div class="texto-modal">
    <center class="texto-modal-visitas-centrar" style="padding:10px 3px 3px 3px;">
      <p class="texto-modal-visitas" ><?=$modalContenidoInstitucion1?></p>
      <p class="texto-modal-visitas" ><strong><?=$valorTicketNumeroInstitucion?></strong> <i><?=$valorTicketLetrasInstitucion?></i></p>
      <p class="texto-modal-visitas-bold" ><?=$modalContenidoInstitucion2?></p>
      <p class="texto-modal-visitas-pie" style="font-size:0.75em;padding-top:20px;" ><?=$modalContenidoInstitucion3?></p>
    </center>
  </div>
  <div class="row una-columna">
    <center><button type="button" class="center-fk-button" id="btn_aceptar_institucion" style="font-size:0.9em;">He leído y estoy de acuerdo</button></center>
  </div>


</div>
</div>
<div class="modal" id="ex1">


  <div class="modal-confirmacion">
   <a id="close" onclick="location.reload()">
    <img src="<?= base_url('assets/iconos/site/cruz-galeria.svg')?>" alt="" >
  </a>
  <div class="row una-columna titulo-modal" style="height: 140px;padding: 6%;">
    <div class="wrapper ">
      <div class="title-section" style="margin-top: 0px;background-color: #00a49d;" >
       <p class="subtitle" style="color: white">Registramos su </p>
       <b><p class="title" style="letter-spacing: 5px;margin-bottom: 20px;text-transform: uppercase;color: white">VISITA CON ÉXITO</p></b>
     </div>
   </div>
 </div>
 <div class="texto-modal">
  <span id="texto_confirmacion_visita" style="display: block;text-align: -webkit-center;margin-top: 20px;"></span><br>
  <span style="display: block;text-align: -webkit-center;">Código de reserva:</span>
  <!--center><h1 style="margin-top: 40px;margin-bottom: 40px;font-weight: bold;" id="codigo_confirmacion"></h1></center-->
  <img src="" style="padding: 10px;width: 185px; margin: auto !important" id="codigo_confirmacion">
  <p style="font-size: 13px;font-family: 'sans-serif-italic';text-align: center;">Se envió un email con la confirmación de su visita incluyendo el código de reserva.</p>
  <p style="font-size: 13px;font-family: 'sans-serif-italic';text-align: center;margin-bottom: 5px;">Dicho código será solicitado al momento de ingresar a realizar su visita.</p>
</div>
<hr>
<div style="background-color: white; display: grid;grid-template-columns: 22% 37% 40%;">
 <img src="<?= base_url('assets/iconos/site/full-logo-gris.svg')?>" alt="" style="padding: 10px">
 <i style="padding: 10px" class="ocultar-responsive">
  <p style="font-size: 11px;">Agustín Gómez y pie de monte</p>
  <p style="font-size: 11px;">de la Sierra Chica Rivadavia</p>
  <p style="font-size: 11px;">San Juan, Argentina</p>
  <p style="font-size: 11px;">+54 264 479-1840</p>
</i>

<img src="<?= base_url('assets/iconos/site/gobierno.svg')?>" alt="" style="padding: 10px">  
</div>
</div>
</div>
<script type="text/javascript">

  // variables a utilizar cuando se carga la página por primera vez
  visitasHoyParticular = <?= json_encode($visitasHoyParticular)?>;
  visitasHoyInstitucion = <?= json_encode($visitasHoyInstitucion)?>;
  visitantesMaximo = <?= json_encode($visitantesMaximo)?>;
  visitantesMaximoReal = <?= json_encode($visitantesMaximoReal)?>;
  

  $(document).ready(function(){
    //-----
    //$('#modal_covid').css('display', 'flex');
    $("#tabla_cuerpo .hora-estado").text(visitantesMaximo+' lugares disponibles');
    $("#tabla_cuerpo input").prop('disabled',false);
    // iteración que carga la tabla con los horarios y visitas disponibles en la tabla de particulares
   // console.log(visitasHoyParticular[0].hora_visita.replace(':','_'))
    let tipo = 1;
    if(tipo){
    for(i = 0; i < visitasHoyParticular.length; i++){
     hora = visitasHoyParticular[i].hora_visita.replace(':','_');
     if(parseInt(visitasHoyParticular[i].cantidad_disponible) < parseInt(visitantesMaximo)  && parseInt(visitasHoyParticular[i].cantidad_disponible) > 0 ){
      $("#h_"+hora+" td:last").text(visitasHoyParticular[i].cantidad_disponible+' lugares disponibles');    
    }else{
      $("#h_"+hora).css('background-color','#e5a4a4');
      $("#h_"+hora).find('input').prop('disabled',true);
      $("#h_"+hora+" td:last").text('OCUPADO');
    }

   
  }
}

else {

    

  for(i = 0; i < visitasHoyParticular.length; i++){
    
    hora2 = visitasHoyParticular[i].hora_visita.replace(':','_');

    hora3= hora2.split('_');
    console.log('Hora 3: '+hora3[0])

    var hh = hora3[0];
    var mm = hora3[1];
    var c=hh;

    if(mm == 30){
      mm = '00';
    }else{
      c = parseInt(hh)-1;
      mm = '30';
      if(c<10){
        c = '0'+ c;
      }
    }
    
    hora = c+'_'+mm;
    console.log("Hora["+i+"] = "+hora+" / "+hora2);



     if(parseInt(visitasHoyParticular[i].cantidad_disponible) < (parseInt(visitantesMaximo))  && parseInt(visitasHoyParticular[i].cantidad_disponible) > 0 ){
      console.log(visitasHoyParticular[i].cantidad_disponible)
      $("#h_"+hora2+" td:last").text(visitasHoyParticular[i].cantidad_disponible+' lugares disponibles');    
    //}else{
      $("#h_"+hora).css('background-color','#e5a4a4');
      $("#h_"+hora).find('input').prop('disabled',true);
      $("#h_"+hora+" td:last").text('OCUPADO');
    }

}
}



/* let media = 30*60*1000;
    let convmedia = new Date(media);
    let hoy = new Date();
    nueva = hoy.getTime() - convmedia;
    let a= new Date(nueva);
    console.log(a);
*/

   // iteración que carga la tabla con los horarios y visitas disponibles en la tabla de instituciones
   $("#i_tabla_cuerpo .hora-estado").text(visitantesMaximo+' lugares disponibles');
   $("#i_tabla_cuerpo input").prop('disabled',false);
   $("#i_tabla_cuerpo input").prop('checked',false);
   for(i = 0; i < visitasHoyInstitucion.length; i++){
     hora = visitasHoyInstitucion[i].hora_visita.replace(':','_');
     if(parseInt(visitasHoyInstitucion[i].cantidad_disponible) < parseInt(visitantesMaximo)  && parseInt(visitasHoyInstitucion[i].cantidad_disponible) > 0 ){
      $("#i_h_"+hora+" td:last").text(visitasHoyInstitucion[i].cantidad_disponible+' lugares disponibles');
    }else{
      $("#i_h_"+hora).css('background-color','#e5a4a4');
      $("#i_h_"+hora).find('input').prop('disabled',true);
      $("#i_h_"+hora+" td:last").text('OCUPADO');
    }

  }

});

  $('.open-modal').click(function(){
    var target = $(this).data('target');
    $('.modal--#'+target).css('display', 'flex');
  })
  $(document).on('keydown',function(e){
    if ( e.which == 27 ) {
      return;
    }
  });


  //Se aceptan terminos

  $('#btn_aceptar_condiciones').click(function(){
    $('#modal_covid').hide();
  });

  // se acepta el modal inicial de particulares
  $("#btn_aceptar_particular").click(function(){
    $('.modal--').hide();
    $("#tipo_visita").hide();

    $("#bloque_tipo_visita_elegido").show('slow');
    $("#tipo_visita_elegido").text('PARTICULAR');

    $('#p2').show('slow');
    $("#paso_camino_particular3").show('slow');
    $("#paso_camino_particular4").show('slow');
    $("#paso_camino_particular5").show('slow');
    $("#paso_camino_particular6").show('slow');
    $("#paso_camino_particular7").show('slow');

  })

  // se acepta el modal inicial de instituciones
  $("#btn_aceptar_institucion").click(function(){
    $('.modal--').hide();
    $("#tipo_visita").hide();


    $("#bloque_tipo_visita_elegido").show('slow');
    $("#tipo_visita_elegido").text('INSTITUCIÓN');

    $('#i2').show('slow');
    $("#paso_camino_institucion3").show('slow');
    $("#paso_camino_institucion4").show('slow');
    $("#paso_camino_institucion5").show('slow');
    $("#paso_camino_institucion6").show('slow');
    $("#paso_camino_institucion7").show('slow');
    $("#paso_camino_institucion8").show('slow');

  })


</script>