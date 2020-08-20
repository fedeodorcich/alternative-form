<script type="text/javascript">
 // $("#1").hide();
 
 // se ocultan los bloques no necesarios al inicio
 $("#i2").hide();
 $("#i3").hide();
 $("#i4").hide();
 $("#i5").hide();
 $("#i6").hide();
 $("#i7").hide();
 $("#i8").hide();

 $("#paso_camino_institucion2").hide();
 $("#paso_camino_institucion3").hide();
 $("#paso_camino_institucion4").hide();
 $("#paso_camino_institucion5").hide();
 $("#paso_camino_institucion6").hide();
 $("#paso_camino_institucion7").hide();
 $("#paso_camino_institucion8").hide();


 // accion al confirmar el día y hora de visita
 $("#i_btn_listo_dia").click(function(){

  let contador = 0;
  $("#i_tabla_cuerpo input").each(function(){
    if($(this).is(':checked')){
      contador++;
    }
  });

  // obliga a seleccionar un horario
  if(contador == 0){
    hora = document.getElementById('i_hora');
    hora.setCustomValidity('Debe seleccionar un horario del listado');
    hora.reportValidity();
    return;
  }

  $("#i_tabla_cuerpo input").each(function(){
    if($(this).is(':checked')){
      // se obtienen los datos del horario seleccionado
      padre = $(this).parents('tr').attr('id');
      hora = $(this).val();
      guia = $("#"+padre+" td:nth-child(2)").text();
      ticket = $("#"+padre+" td:nth-child(3)").text();
      estado = $("#"+padre+" td:nth-child(4)").text();
      console.log(ticket.slice(0,-20));
      console.log($('#i_numero_visitantes').val());
    }
  });

  if($("#i_numero_visitantes").val() <= parseInt(ticket.slice(0,-20)) ){
    // bloque informativo de día y hora seleccionado
    $(".i_dia_hora").hide();
    $("#i_dia_hora_elegidos").show('slow');
    $("#i_dia_hora_elegidos1").text($("#i_fecha_seleccionada").text());
    $("#i_dia_hora_elegidos2").text(hora.replace('_',':') +' hs');
    $("#i_dia_hora_elegidos3").text(guia);
    $("#i_dia_hora_elegidos4").text(ticket);
    $("#i_dia_hora_elegidos5").html('<i class="fa fa-pencil-square-o" aria-hidden="true" title="Modificar Datos" onclick="modificarFechaHoraInstitucion()"></i>');



    $("#i5").show('slow');
    $("#paso_camino_institucion5").hide('slow');
    $("#i_formulario_responsable").show('slow');
    $("#i_formulario_responsable_datos").hide();
  }else{
    alert("No se dispone de suficiente cupo en el horario seleccionado");
  }
});


 // accion al confirmar datos de la institucion
 $("#i_btn_datos_establecimiento").click(function(){

  formulario = document.getElementById('i_formulario');
  
  //obliga a completar los campos obligatorios
  for (var i = 0; i < formulario.length; i++) {
    if (formulario[i].name != "") {
      formulario[i].setCustomValidity('');

      if (!formulario[i].checkValidity()) {
        formulario[i].reportValidity();
        return;
      }
    }
  }

 // bloque informativo de la institución ingresada
 $("#i_formulario_establecimiento").hide();
 $("#i_formulario_establecimiento_datos").show('slow');
 $("#i_formulario_establecimiento_datos1").text($("#i_establecimiento").val());
 $("#i_formulario_establecimiento_datos2").text( $("input[name=tipo_institucion]:checked").val());
 $("#i_formulario_establecimiento_datos3").text($("input[name=tipo_anio_cursado]:checked").val());
 $("#i_formulario_establecimiento_datos4").text($("#i_tel_institucion").val());
 $("#i_formulario_establecimiento_datos5").html('<i class="fa fa-pencil-square-o" aria-hidden="true" title="Modificar Datos" onclick="modificarEstablecimiento()"></i>');

 $("#i3").show('slow');
 $("#paso_camino_institucion3").hide('slow');

 if($("#i_numero_visitantes").val() > '0'){

  $("#i4").show('slow');
  $("#paso_camino_institucion4").hide('slow');
}


});

//Nuevo


$('#i_uploadedfile').on('change', function() {

archivo=$(this)[0].files[0];
var tipo=$(this)[0].files[0].type;
var tamaño=$(this)[0].files[0].size;
if (tipo != "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" && tipo != "application/vnd.ms-excel" ){ 

  alert("El formato debe ser .XLS o .XLSX ", tipo);
}
else if (tamaño > 200000){
      alert("El tamaño no puede superar los 200 KB");
     }else{
      $("#i_btn_descargar_planilla").hide('slow');
      $("#i_label_carga").hide('slow');
      $('#i_div_msj_ayuda').hide('slow');
      $("#i_div_listo").show('slow');
     }
      
});

$("#i_btn_listo_listado_visitantes_b").click(function(){

  $("#i7").show('slow');
  $("#paso_camino_institucion7").hide('slow');
  $(this).hide();

});





//EndNuevo



 /*/ accion al confirmar listado de visitantes
 $("#i_btn_listo_listado_visitantes").click(function(){

  $("#i_carga_visitantes input[type=text]").prop('required',true);

  formulario = document.getElementById('i_formulario');

  //obliga a conpletar los campos obligatorios
  for (var i = 0; i < formulario.length; i++) {
    if (formulario[i].name != "") {
      formulario[i].setCustomValidity('');

      if (!formulario[i].checkValidity()) {
        formulario[i].reportValidity();
        return;
      }
    }
  }


  // $(this).hide();

  $("#i7").show('slow');
  $("#paso_camino_institucion7").hide('slow');
  $(this).hide();
  // if($("input[name=i_visita_pta]").is(':checked')){
  //   $("#i8").show('slow');
  //   $("#paso_camino_institucion8").hide('slow');
  // }


});*/



 // accion al confirmar referente de la visita
 $("#i_btn_datos_personales").click(function(){

  $("#i_nombre").prop('required',true);
  $("#i_apellido").prop('required',true);
  $("#i_edad").prop('required',true);
  $("#i_procedencia").prop('required',true);
  $("#i_email").prop('required',true);
  $("#i_ocupacion").prop('required',true);
  formulario = document.getElementById('i_formulario');

  
  //obliga a conpletar los campos obligatorios
  for (var i = 0; i < formulario.length; i++) {
    if (formulario[i].name != "") {
      formulario[i].setCustomValidity('');

      if (!formulario[i].checkValidity()) {
        formulario[i].reportValidity();
        return;
      }
    }
  }

  // bloque informativo del referente ingresado
  $("#i_formulario_responsable").hide();
  $("#i_formulario_responsable_datos").show('slow');
  $("#i_formulario_responsable_datos1").text($("#i_nombre").val()+' '+$("#i_apellido").val());
  $("#i_formulario_responsable_datos2").text( $("#i_edad").val()+' años');
  $("#i_formulario_responsable_datos3").text($("#i_email").val());
  $("#i_formulario_responsable_datos4").text($("#i_ocupacion").val());
  $("#i_formulario_responsable_datos5").html('<i class="fa fa-pencil-square-o" aria-hidden="true" title="Modificar Datos" onclick="modificarResponsableInstitucion()"></i>');

  $("#i6").show('slow');
  $("#paso_camino_institucion6").hide('slow');
  //$("#i_btn_listo_listado_visiantes").show();
  $("#i_btn_listo_listado_visiantes").attr("style","display: flex;");


});

// accion al elegir visita pta
/*$(".i-visita-pta").click(function(){
  if($(this).is(':checked')){
    $("#i8").show('slow');
    $("#paso_camino_institucion8").hide('slow');
    hora = '';
    fecha = $("#i_fecha_datepicker").val().split('/'),
    $("#i_confirmacion_dia").text(fecha[0]+'/'+fecha[1]);
    $("#i_tabla_cuerpo input").each(function(){
      if($(this).is(':checked')){
        hora = $(this).val();
      }
    });
    $("#i_confirmacion_hora").text(hora.replace('_',':')); 
  }
});*/

//Nuevo visita PTA
$("#i_confirm-PTA").click(function(){
  
  $("#i8").show('slow');
  $("#paso_camino_institucion8").hide('slow');
  $(this).hide('slow');
  hora = '';
  fecha = $("#i_fecha_datepicker").val().split('/'),
  $("#i_confirmacion_dia").text(fecha[0]+'/'+fecha[1]);
  $("#i_tabla_cuerpo input").each(function(){
   if($(this).is(':checked')){
     hora = $(this).val();
   }
 });
  $("#i_confirmacion_hora").text(hora.replace('_',':')); 

});
//End NuevoPTA

// quita o agrega requerido a los años de cursado de a cuerdo al tipo de institución elegida
$("input[name=tipo_institucion]").click(function(){
  if($(this).val() == 'ONG' || $(this).val() == 'otros' ){
    $("input[name=tipo_anio_cursado]").prop('required',false);
  }else{
    $("input[name=tipo_anio_cursado]").prop('required',true);
  }
});

</script>

<script type="text/javascript">



  var disabledDays = <?= !empty($dias_bloqueados)? json_encode($dias_bloqueados) : json_encode('') ?>;
  var diaSeleccionadoDatePicker = 0;
  base_url = '<?=base_url()?>';
  // carga de datepicker con valores iniciales y luego de acuerdo al día seleccionado, la tabla de horarios se va modificando
  $( function() {
    $( "#i_datepicker" ).datepicker({
      closeText: 'Cerrar',
      prevText: 'Anterior',
      nextText: 'Siguiente',
      currentText: 'Hoy',
      monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
      dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
      dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
      dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
      weekHeader: 'Sm',
      dateFormat: 'dd/mm/yy',
      minDate:   new Date('<?=date('n/j/Y', strtotime($hoyInstitucion))?>') ,
      beforeShowDay: function(date){

        var fecha = $( "#i_datepicker" ).datepicker( "getDate" );
        var options = { year: 'numeric', month: 'long', day: 'numeric' };

        var day = date.getDay();
        diaSeleccionadoDatePicker = fecha.getDay();
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
        var isDisabled = ($.inArray(string, disabledDays) != -1);
        var tooltipDate = "";
        if(isDisabled){
          tooltipDate = "This date is DISABLED!!";
        }

        $("#i_fecha_seleccionada").text(fecha.toLocaleDateString("es-ES", options));

        //day != 0 disables all Sundays
        //day != 2 && day != 4 &&
        return [ !isDisabled,'',tooltipDate];
      },
      onSelect: function(dateText,inst) {
        var fecha = $( "#i_datepicker" ).datepicker( "getDate" );
        var options = { year: 'numeric', month: 'long', day: 'numeric' };
        $("#i_fecha_seleccionada").text(fecha.toLocaleDateString("es-ES", options));

        $("#i_fecha_datepicker").val(dateText);
        diaSeleccionadoDatePicker = fecha.getDay();
        $.ajax({

          url: base_url + "visitas/horariosFechasObtener",
          method: "POST",          
          data: {
            token_sistema: $("input:hidden[name='token_sistema']").val(),
            fecha: this.value,
          },            

          success: function( data ) {
            resultado = jQuery.parseJSON(data); 

            $("#i_tabla_cuerpo tr").remove();


            $("#i_btn_listo_dia").show();
            for(i = 0; i < resultado.horariosHoy.length; i++){
              hora = resultado.horariosHoy[i].hora.split(':');
              fila = '<tr id="i_h_'+hora[0]+'_'+hora[1]+'"><td><input type="radio" name="i_hora" id="i_hora" value="'+hora[0]+'_'+hora[1]+'"  required> '+hora[0]+':'+hora[1]+'</td><td class="ocultar-responsive">Visita Guiada</td><td class="hora-estado">DISPONIBLE</td> </tr>';
              $("#i_tabla_cuerpo").append(fila);
            }

            $("#i_tabla_cuerpo tr").css('background-color','rgb(129, 213, 209)');
            $("#i_tabla_cuerpo .hora-estado").text(visitantesMaximo+' lugares disponibles');
            $("#i_tabla_cuerpo input").prop('disabled',false);
            $("#i_tabla_cuerpo input").prop('checked',false);

            if(resultado.horariosHoy.length > 7){
              $(".table-responsive").attr('style','overflow-y : scroll;height: 312px;');
            }else{
              $(".table-responsive").attr('style','overflow-y : hidden');
            }

            if(resultado.success){                       

              for(i = 0; i < resultado.data.length; i++){
               hora = resultado.data[i].hora_visita.replace(':','_');
               if(parseInt(resultado.data[i].cantidad_disponible) < parseInt(visitantesMaximo) && resultado.data[i].cantidad_disponible > 0){
                $("#i_h_"+hora+" td:last").text(resultado.data[i].cantidad_disponible+' lugares disponibles');
              }else{
                $("#i_h_"+hora).css('background-color','#e5a4a4');
                $("#i_h_"+hora).find('input').prop('disabled',true);
                $("#i_h_"+hora+" td:last").text('OCUPADO');
              }

            }
          }
        }
      });

      }
    });
  } );

var nro = '';
// accion al modificar la cantidad de visitantes 
$("#i_numero_visitantes").change(function(){
  $("#i4").show('slow');
  $("#paso_camino_institucion4").hide('slow');
  if($(this).val() == '1'){
    $("#i_confirmacion_cantidad").text($(this).val()+' visitante'); 
  }else{
    $("#i_confirmacion_cantidad").text($(this).val()+' visitantes'); 
  }

  
  cantidadFilasVisitantes = $("#i_carga_visitantes .row").length;
  cantidad = $(this).val() - 1;

  // clona la cantidad faltante de visitantes o elimina la cantidad sobrante
  if(cantidad > cantidadFilasVisitantes){

    filasFaltantes = cantidad - cantidadFilasVisitantes;
    for(i = 0; i < filasFaltantes; i++){
      fila = $("#i_carga_visitantes .row:first-child").clone();

      if(nro == '')
        nro = parseInt(fila.find('.nro_visitante').text().trim().replace('.','')) + 1;
      else nro++;

      fila.attr('id','i_visitante_'+nro);

      fila.find('.nro_visitante').text(nro);
      $("#i_carga_visitantes").append(fila);
      $("#i_visitante_"+nro+' .wrapper .datos_visitante').val('');
      $("#i_visitante_"+nro+' .wrapper input[type=checkbox]').prop('checked',false);
    }
    $("#i_btn_listo_listado_visitantes").show();
    $("#i7").hide('slow');    //Para que no desaparez
    $("#i8").hide('slow');
    /*$("#paso_camino_institucion7").hide('slow');
    $("#paso_camino_institucion8").hide('slow');*/
  }else{
   if(cantidad > 0){
    filasSobrantes = cantidadFilasVisitantes - cantidad;         
    for(i = 0; i < filasSobrantes; i++){
      $("#i_carga_visitantes .row:last-child").remove();
      nro--;
    }
  }
}



});

// verifica si por visitante se completo su registro, de ser así agrega el tilde o lo quita en caso de faltar algún dato
function verificaRegistroCompletoInstitucion(e){
  abuelo = e.parentNode.parentNode.id;
  cantidadInputs =  $("#"+abuelo+' .datos_visitante').length;
  inputsCompletos = 0;
  $("#"+abuelo+' .datos_visitante').each(function(){
    if($(this).val().trim() != ''){
      inputsCompletos++;
    }
  });

  if(cantidadInputs == inputsCompletos){
    $("#"+abuelo+" [type=checkbox]").prop('checked',true);
  }else{
    $("#"+abuelo+" [type=checkbox]").prop('checked',false);
  }

}

// si se desea modificar los datos del establecimieto, se ocultan y muestran los bloques necesarios para la acción
function modificarEstablecimiento(){

  $("#i3").hide('slow'); 
  $("#i4").hide('slow');
  $("#i5").hide('slow');
  $("#i6").hide('slow');
  $("#i7").hide('slow');
  $("#i8").hide('slow');

  $("#paso_camino_institucion3").show('slow');
  $("#paso_camino_institucion4").show('slow');
  $("#paso_camino_institucion5").show('slow');
  $("#paso_camino_institucion6").show('slow');
  $("#paso_camino_institucion7").show('slow');
  $("#paso_camino_institucion8").show('slow');

  $("#i_formulario_establecimiento").show('slow');
  $("#i_formulario_establecimiento_datos").hide('slow');
  $("#i_dia_hora").show('slow');
  $("#i_dia_hora_elegidos").hide('slow');


}

// si se desea modificar la fecha y hora de la visita, se ocultan y muestran los bloques necesarios para la acción
function modificarFechaHoraInstitucion(){
  $("#i_dia_hora").show('slow');
  $("#i_dia_hora_elegidos").hide('slow');
  $("#i5").hide('slow');
  $("#i6").hide('slow');
  $("#i7").hide('slow');
  $("#i8").hide('slow');

  $("#paso_camino_institucion5").show('slow');
  $("#paso_camino_institucion6").show('slow');
  $("#paso_camino_institucion7").show('slow');
  $("#paso_camino_institucion8").show('slow');
}

// si se desea modificar los datos del referente, se ocultan y muestran los bloques necesarios para la acción
function modificarResponsableInstitucion(){
 $("#i_formulario_responsable").show('slow');
 $("#i_formulario_responsable_datos").hide('slow');
 $("#i6").hide('slow');
 $("#i7").hide('slow');
 $("#i8").hide('slow');

 $("#paso_camino_institucion6").show('slow');
 $("#paso_camino_institucion7").show('slow');
 $("#paso_camino_institucion8").show('slow');
}



</script>
<script type="text/javascript">
  /*/ acción al confirmar la visita
  $("#i_btnEnviar").click(function(){

    // se crea un formData con los valores de los inputs
    formdata = new FormData(document.getElementById('i_formulario'));

    i_cantidad_visitantes = 0;

    // se agregan al formData los visitantes
    $("#i_carga_visitantes .fila-visitante").each(function(index){
      visitante = $(this);

      fila = {
        apellido_visitante : visitante[0].childNodes[3].childNodes[1].value,
        nombre_visitante : visitante[0].childNodes[5].childNodes[1].value,
        edad_visitante : visitante[0].childNodes[7].childNodes[1].value,
        ocupacion_visitante : visitante[0].childNodes[9].childNodes[1].value,
      };

      fila = JSON.stringify(fila);
      formdata.append('visitante_'+index,fila);
      i_cantidad_visitantes++;
    });

    // cantidad de visitantes
    formdata.append('cantidad_visitantes',i_cantidad_visitantes);

    $("#i_btnEnviar").hide();
    $("#i_loading").show();
    
    // función ajax que almacena en la BD la visita
    $.ajax({

      url: base_url + "visitas/guardarVisitaInstitucion",
      method: "POST",          
      data: formdata,            
      cache: false,
      contentType: false,
      processData: false,  
      success: function( data ) {
        resultado = jQuery.parseJSON(data); 
        if(resultado.success){

          hora = $("#dia_hora_elegidos2").text().replace("_", ":");

          $("#texto_confirmacion_visita").text('Los esperamos en Anchipurac para realizar su visita grupal guiada, el '+$("#i_dia_hora_elegidos1").text()+', a las '+hora);
          $("#codigo_confirmacion").text(resultado.data);
          $("#ex1").attr("style","display: flex");
        }
        else{              
          alert(resultado.data);
          $("#i_btnEnviar").show();
          $("#i_loading").hide();
        }
      },
      error :function( data ) {
        alert('Hubo un error en el envío de la solicitud. Inténtelo nuevamente');
        $("#i_btnEnviar").show();
        $("#i_loading").hide();
      }
    });*/


$("#i_btnEnviar").click(function(){

// se crea un formData con los valores de los inputs
formdata = new FormData(document.getElementById('i_formulario'));

//i_cantidad_visitantes = 0;

// se agregan al formData los visitantes
/*$("#i_carga_visitantes .fila-visitante").each(function(index){
  visitante = $(this);

  fila = {
    apellido_visitante : visitante[0].childNodes[3].childNodes[1].value,
    nombre_visitante : visitante[0].childNodes[5].childNodes[1].value,
    edad_visitante : visitante[0].childNodes[7].childNodes[1].value,
    ocupacion_visitante : visitante[0].childNodes[9].childNodes[1].value,
  };*/

  //fila = JSON.stringify(fila);
  //formdata.append('visitante_'+index,fila);
  i_cantidad_visitantes= $('#i_numero_visitantes').val();
//});

// cantidad de visitantes
formdata.append('cantidad_visitantes',i_cantidad_visitantes);

$("#i_btnEnviar").hide();
$("#i_loading").show();

// función ajax que almacena en la BD la visita
$.ajax({

  url: base_url + "visitas/guardarVisitaInstitucion",
  method: "POST",          
  data: formdata,            
  cache: false,
  contentType: false,
  processData: false,  
  success: function( data ) {
    resultado = jQuery.parseJSON(data); 
    if(resultado.success){

      hora = $("#dia_hora_elegidos2").text().replace("_", ":");

      $("#texto_confirmacion_visita").text('Los esperamos en Anchipurac para realizar su visita grupal guiada, el '+$("#i_dia_hora_elegidos1").text()+', a las '+hora);
      //$("#codigo_confirmacion").text(resultado.data);
      $("#codigo_confirmacion").attr("src",base_url+"codigo/"+resultado.qr);
      $("#ex1").attr("style","display: flex");
    }
    else{              
      alert(resultado.data);
      $("#i_btnEnviar").show();
      $("#i_loading").hide();
    }
  },
  error :function( data ) {
    alert('Hubo un error en el envío de la solicitud. Inténtelo nuevamente');
    $("#i_btnEnviar").show();
    $("#i_loading").hide();
  }
});




  });
</script>