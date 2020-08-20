<script type="text/javascript">
 // $("#1").hide();

 // se ocultan los bloques no necesarios al inicio
 /*$("#p2").hide();
 $("#p3").hide();
 $("#p4").hide();
 $("#p5").hide();
 $('#p5b').hide();
 $("#p6").hide();
 $("#p7").hide();*/

 $("#paso_camino_particular2").hide();
 $("#paso_camino_particular3").hide();
 $("#paso_camino_particular4").hide();
 $("#paso_camino_particular5").hide();
 $("#paso_camino_particular6").hide();
 $("#paso_camino_particular7").hide();


 // accion al confirmar el día y hora de visita
 $("#btn_listo_dia").click(function(){

  let contador = 0;
  $("#tabla_cuerpo input").each(function(){
    if($(this).is(':checked')){
      contador++;
    }
  });
/*if(! $("input[name='tipo']").is(':checked')){
  
    tipo = document.getElementById('interna');
    console.log("Tipo: " +tipo)
    tipo.setCustomValidity('Debe seleccionar un tipo de visita');
    tipo.reportValidity();
    return
  }*/
  // obliga a seleccionar un horario
  if(contador == 0){
    hora = document.getElementById('hora');
    hora.setCustomValidity('Debe seleccionar un horario del listado');
    hora.reportValidity();
    return;
  }
  

  // $("#p3 #ayuda-tercer-paso p").text('3 - Día y hora seleccionados');

  $("#tabla_cuerpo input").each(function(){
    if($(this).is(':checked')){
      // se obtienen los datos del horario seleccionado
      padre = $(this).parents('tr').attr('id');
      hora = $(this).val();
      guia = $("#"+padre+" td:nth-child(2)").text();
      ticket = $("#"+padre+" td:nth-child(3)").text();
      estado = $("#"+padre+" td:nth-child(4)").text();
      //console.log(ticket.slice(0,-20));
    }
  });

  if($("#numero_visitantes").val() <= parseInt(ticket.slice(0,-20)) ){

    // bloque informativo de día y hora seleccionado
    $("#t_visita").hide();
    $("#dia_hora").hide();
    $("#dia_hora_elegidos").show('slow');
    $("#dia_hora_elegidos1").text($("#fecha_seleccionada").text());
    $("#dia_hora_elegidos2").text(hora.replace('_',':') +' hs');
    $("#dia_hora_elegidos3").text(guia);
    $("#dia_hora_elegidos4").text(ticket);
    $("#dia_hora_elegidos5").html('<i class="fa fa-pencil-square-o" aria-hidden="true" title="Modificar Datos" onclick="modificarFechaHora()"></i>');

    $("#p4").show('slow');
    $("#paso_camino_particular4").hide('slow');
    $("#formulario_responsable").show('slow');
    //console.log('Funciona');
  }else{
    alert("No se dispone de suficiente cupo en el horario seleccionado");
  }
  
  
});

// accion al confirmar datos personales
var ocultar = true;
$("#btn_datos_personales").click(function(){
  formulario = document.getElementById('formulario');
  
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

  if($("#numero_visitantes").val() > 1){
    $("#p5").show('slow');
    $("#paso_camino_particular5").hide('slow');
  }else{
    $("#p6").show('slow');
    $("#paso_camino_particular6").hide('slow');
  }
  ocultar=false;

  // bloque informativo de los datos del responsable
  $("#btn_listo_listado_visitantes").show();
  $("#formulario_responsable").hide();
  $("#formulario_responsable_datos").show('slow');
  $("#formulario_responsable_datos1").text($("#nombre").val()+' '+$("#apellido").val() );
  $("#formulario_responsable_datos2").text($("#edad").val()+' años');
  $("#formulario_responsable_datos3").text($("#ocupacion").val());
  $("#formulario_responsable_datos4").text($("#email").val());
  $("#formulario_responsable_datos5").html('<i class="fa fa-pencil-square-o" aria-hidden="true" title="Modificar Datos" onclick="modificarResponsable()"></i>');


});

//Nuevo

  $('#uploadedfile').on('change', function() {

    archivo=$(this)[0].files[0];
    var tipo=$(this)[0].files[0].type;
    var tamaño=$(this)[0].files[0].size;
    if (tipo != "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" && tipo != "application/vnd.ms-excel" ){ //enta aca

      alert("El formato debe ser .XLS o .XLSX ", tipo);
    }
    else if (tamaño > 200000){
          alert("El tamaño no puede superar los 200 KB");
         }else{
          $("#btn_descargar_planilla").hide('slow');
          $("#label_carga").hide('slow');
          $('#div_msj_ayuda').hide('slow');
          $("#div_listo").show('slow');
         }
         
     
  });


  $("#btn_listo_listado_visitantes_b").click(function(){

    $("#p6").show('slow');
    $("#paso_camino_particular6").hide('slow');
    $(this).hide('slow');

  });



//endNuevo

// accion al confirmar listado de visitantes
$("#btn_listo_listado_visitantes").click(function(){

  $("#carga_visitantes input[type=text]").prop('required',true);

  formulario = document.getElementById('formulario');
  
  // obliga a conpletar los campos obligatorios
  for (var i = 0; i < formulario.length; i++) {
    if (formulario[i].name != "") {
      formulario[i].setCustomValidity('');

      if (!formulario[i].checkValidity()) {
        formulario[i].reportValidity();
        return;
      }
    }
  }

  $(this).attr("style","display: flex;");

 /* $(this).hide();
  $('#p5').hide('slow');

  $("#p6").show('slow');

  $("#paso_camino_particular6").hide('slow');*/


  $("#p6").show('slow');
  $("#paso_camino_particular6").hide('slow');
  $(this).hide();

  /*if($("input[name=visita_pta]").is(':checked')){
    $("#p7").show('slow');
    $("#paso_camino_particular7").hide('slow');
  }*/
  //$(this).attr("style","display: flex;");

  // if($("input[name=visita_pta]").is(':checked')){
  //   $("#p7").show('slow');
  //   $("#paso_camino_particular7").hide('slow');
  // }

});



// accion al elegir visita pta
$("#confirm-PTA").click(function(){
  
   $("#p7").show('slow');
   $("#paso_camino_particular7").hide('slow');
   $(this).hide('slow');
   hora = '';
   fecha = $("#fecha_datepicker").val().split('/'),
   $("#confirmacion_dia").text(fecha[0]+'/'+fecha[1]);
   $("#tabla_cuerpo input").each(function(){
    if($(this).is(':checked')){
      hora = $(this).val();
    }
  });
   $("#confirmacion_hora").text(hora.replace('_',':')); 
 
});

</script>

<script type="text/javascript">

  var disabledDays = <?= !empty($dias_bloqueados)? json_encode($dias_bloqueados) : json_encode('') ?>;
  var diaSeleccionadoDatePicker = 0;
  base_url = '<?=base_url()?>';
   // carga de datepicker con valores iniciales y luego de acuerdo al día seleccionado, la tabla de horarios se va modificando
   $( function() {
    $( "#datepicker" ).datepicker({
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
      minDate:   new Date('<?=date('n/j/Y', strtotime($hoyParticular))?>') ,
      beforeShowDay: function(date){

        var fecha = $( "#datepicker" ).datepicker( "getDate" );
        var options = { year: 'numeric', month: 'long', day: 'numeric' };

        var day = date.getDay();
        diaSeleccionadoDatePicker = fecha.getDay();
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
        var isDisabled = ($.inArray(string, disabledDays) != -1);
        var tooltipDate = "";
        if(isDisabled){
          tooltipDate = "This date is DISABLED!!";
        }

        $("#fecha_seleccionada").text(fecha.toLocaleDateString("es-ES", options));

        //day != 0 disables all Sundays
        //day != 2 && day != 4 &&
        return [ !isDisabled,'',tooltipDate];
      },
      onSelect: function(dateText,inst) {
        var fecha = $( "#datepicker" ).datepicker( "getDate" );
        var options = { year: 'numeric', month: 'long', day: 'numeric' };
        $("#fecha_seleccionada").text(fecha.toLocaleDateString("es-ES", options));

        $("#fecha_datepicker").val(dateText);
        diaSeleccionadoDatePicker = fecha.getDay();
        $.ajax({

          url: base_url + "visitas/horariosFechasObtener", //Comentario random
          method: "POST",          
          data: {
            token_sistema: $("input:hidden[name='token_sistema']").val(),
            fecha: this.value,
          },            
          // cache: false,
          // contentType: false,
          // processData: false,  
          success: function( data ) {
            resultado = jQuery.parseJSON(data); 
            // background-color: #e5a4a4;

            $("#tabla_cuerpo tr").remove();

            //------------------------------------------
            var f = new Date();
            var dif = Math.ceil((fecha-f)/(1000*60*60*24));

            //-------------------------------------------

            $("#btn_listo_dia").show();

            if(fecha.getDay()==3 || fecha.getDay() == 6){
              if(dif >= 2){
                fila = '<tr id="h_08_00"><td><input type="radio" onclick="horaSeleccionada()" name="hora" id="hora" value="08_00"  required> 10:00</td><td class="ocultar-responsive">Anchipurac/Parque Solar</td><td class="hora-estado">DISPONIBLE</td> </tr>';
                $("#tabla_cuerpo").append(fila);
              }
            }
            
            for(i = 0; i < resultado.horariosHoy.length; i++){

              hora = resultado.horariosHoy[i].hora.split(':');
              fila = '<tr id="h_'+hora[0]+'_'+hora[1]+'"><td><input type="radio" onclick="horaSeleccionada()" name="hora" id="hora" value="'+hora[0]+'_'+hora[1]+'"  required> '+hora[0]+':'+hora[1]+'</td><td class="ocultar-responsive">Visita Guiada</td><td class="hora-estado">DISPONIBLE</td> </tr>';
              $("#tabla_cuerpo").append(fila);
            }

            $("#tabla_cuerpo tr").css('background-color','rgb(129, 213, 209)');
            $("#tabla_cuerpo .hora-estado").text(visitantesMaximo+' lugares disponibles');
            $("#tabla_cuerpo input").prop('disabled',false);
            $("#tabla_cuerpo input").prop('checked',false);

            //Si es miercoles o sabado
            /*if(fecha.getDay()==3 || fecha.getDay() == 6){
              if(dif < 6){
                $("#h_10_00p").css('background-color','#e5a4a4');
                $("#h_10_00p").find('input').prop('disabled',true);
                $("#h_10_00p"+" td:last").text('OCUPADO');
            }
            }*/

            if(resultado.horariosHoy.length > 7){
              $(".table-responsive").attr('style','overflow-y : scroll;height: 312px;');
            }else{
              $(".table-responsive").attr('style','overflow-y : hidden');
            }

            if(resultado.success){
              
              for(i = 0; i < resultado.data.length; i++){
               hora = resultado.data[i].hora_visita.replace(':','_');
               console.log(resultado.data[i])
               if(parseInt(resultado.data[i].cantidad_disponible) < parseInt(visitantesMaximo) && parseInt(resultado.data[i].cantidad_disponible) > 0){
                $("#h_"+hora+" td:last").text(resultado.data[i].cantidad_disponible+' lugares disponibles');
              }else{
                $("#h_"+hora).css('background-color','#e5a4a4');
                $("#h_"+hora).find('input').prop('disabled',true);
                $("#h_"+hora+" td:last").text('OCUPADO');
              }

            }
          }
        }
      });

      }
    });
} );

  /*var disabledDays = <?= !empty($dias_bloqueados)? json_encode($dias_bloqueados) : json_encode('') ?>;
  var diaSeleccionadoDatePicker = 0;
  base_url = '<?=base_url()?>';
   // carga de datepicker con valores iniciales y luego de acuerdo al día seleccionado, la tabla de horarios se va modificando
   $( function() {
    $( "#datepicker" ).datepicker({
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
      minDate:   new Date('<?=date('n/j/Y', strtotime($hoyParticular))?>') ,
      beforeShowDay: function(date){

        var fecha = $( "#datepicker" ).datepicker( "getDate" );
        var options = { year: 'numeric', month: 'long', day: 'numeric' };

        var day = date.getDay();
        diaSeleccionadoDatePicker = fecha.getDay();
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
        var isDisabled = ($.inArray(string, disabledDays) != -1);
        var tooltipDate = "";
        if(isDisabled){
          tooltipDate = "This date is DISABLED!!";
        }

        $("#fecha_seleccionada").text(fecha.toLocaleDateString("es-ES", options));

        //day != 0 disables all Sundays
        //day != 2 && day != 4 &&
        return [ !isDisabled,'',tooltipDate];
      },
      onSelect: function(dateText,inst) {
        var fecha = $( "#datepicker" ).datepicker( "getDate" );
        var options = { year: 'numeric', month: 'long', day: 'numeric' };
        $("#fecha_seleccionada").text(fecha.toLocaleDateString("es-ES", options));

        $("#fecha_datepicker").val(dateText);
        diaSeleccionadoDatePicker = fecha.getDay();
        $.ajax({

          url: base_url + "visitas/horariosFechasObtener",
          method: "POST",          
          data: {
            token_sistema: $("input:hidden[name='token_sistema']").val(),
            fecha: this.value,
          },            
          // cache: false,
          // contentType: false,
          // processData: false,  
          success: function( data ) {
            resultado = jQuery.parseJSON(data); 
            // background-color: #e5a4a4;

            $("#tabla_cuerpo tr").remove();


            $("#btn_listo_dia").show();
            for(i = 0; i < resultado.horariosHoy.length; i++){
              hora = resultado.horariosHoy[i].hora.split(':');
              fila = '<tr id="h_'+hora[0]+'_'+hora[1]+'"><td><input type="radio" onclick="horaSeleccionada()" name="hora" id="hora" value="'+hora[0]+'_'+hora[1]+'"  required> '+hora[0]+':'+hora[1]+'</td><td class="ocultar-responsive">Visita Guiada</td><td class="hora-estado">DISPONIBLE</td> </tr>';
              $("#tabla_cuerpo").append(fila);
            }

            $("#tabla_cuerpo tr").css('background-color','rgb(129, 213, 209)');
            $("#tabla_cuerpo .hora-estado").text(visitantesMaximo+' lugares disponibles');  //aca se carga por primera vez
            $("#tabla_cuerpo input").prop('disabled',false);
            $("#tabla_cuerpo input").prop('checked',false);

            if(resultado.horariosHoy.length > 7){
              $(".table-responsive").attr('style','overflow-y : scroll;height: 312px;');
            }else{
              $(".table-responsive").attr('style','overflow-y : hidden');
            }

            if(resultado.success){

                /*for(i = 0; i < resultado.data.length; i++){
                 hora = resultado.data[i].hora_visita.replace(':','_');
                 if(parseInt(resultado.data[i].cantidad_disponible) < parseInt(visitantesMaximo) && parseInt(resultado.data[i].cantidad_disponible) > 0){
                  $("#h_"+hora+" td:last").text(resultado.data[i].cantidad_disponible+' lugares disponibles');
                }else{
                  $("#h_"+hora).css('background-color','#e5a4a4');
                  $("#h_"+hora).find('input').prop('disabled',true);
                  $("#h_"+hora+" td:last").text('OCUPADO');
                }
            }*/

            //let tipo = 0;
            //$("input[name='tipo']").change(function (){
/*$('input[type=radio][name=tipo]').change(function() {
    if (this.value == 'interna') {
        console.log("Interna");
    }
    else if (this.value == 'completa') {
        console.log("Completa");
    }
});*/
              //$('input[type=radio][name=tipo]').change(function() {

        /*if ($("input[name='tipo']:checked").val()=='interna') {
                for(i = 0; i < resultado.data.length; i++){
                 hora = resultado.data[i].hora_visita.replace(':','_');
                 if(parseInt(resultado.data[i].cantidad_disponible) < parseInt(visitantesMaximo)  && parseInt(resultado.data[i].cantidad_disponible) > 0 ){
                  $("#h_"+hora+" td:last").text(resultado.data[i].cantidad_disponible+' lugares disponibles');    
                }else{
                  $("#h_"+hora).css('background-color','#e5a4a4');
                  $("#h_"+hora).find('input').prop('disabled',true);
                  $("#h_"+hora+" td:last").text('OCUPADO');
                }
              }
        }

        else{

          //Bloquea ultimo turno
            $("#h_15_30").css('background-color','#e5a4a4');
            $("#h_15_30").find('input').prop('disabled',true);
            $("#h_15_30 td:last").text('OCUPADO');
            
          for(i = 0; i < resultado.data.length; i++){
            
            hora2 = resultado.data[i].hora_visita.replace(':','_');

            hora = hora2.split('_'); // Hora ocupada
            //console.log('Hora: '+hora[0])

            let hh = hora[0];
            let mm = hora[1];
            let c=hh;

            if(mm == 30){
              mm = '00';
            }else{
              c = parseInt(hh)-1;
              mm = '30';
              if(c<10){
                c = '0'+ c;
              }
            }
            
            horaprev = c+'_'+mm;
            //console.log("Hora previa["+i+"] = "+horaprev+" / "+hora2);

            hhn = hora[0];
            mmn = hora[1];
            cn=hh;

            if(mmn == 30){
              mmn = '00';
              cn = parseInt(hh)+1;
               if(cn<10){
                cn = '0'+ c;
              }
            }else{
              mmn = '30';
            }
            horanext = cn+'_'+mmn;
           // console.log("Hora siguiente["+i+"] = "+horanext+" / "+hora2);

             if(parseInt(resultado.data[i].cantidad_disponible) < (parseInt(visitantesMaximo))  && parseInt(resultado.data[i].cantidad_disponible) > 0 ){
             // console.log(resultado.data[i].cantidad_disponible)
              $("#h_"+hora2+" td:last").text(resultado.data[i].cantidad_disponible+' lugares disponibles');
              
            }else{
              $("#h_"+hora2).css('background-color','#e5a4a4');
              $("#h_"+hora2).find('input').prop('disabled',true);
              $("#h_"+hora2+" td:last").text('OCUPADO');
            }

              $("#h_"+horaprev).css('background-color','#e5a4a4');
              $("#h_"+horaprev).find('input').prop('disabled',true);
              $("#h_"+horaprev+" td:last").text('OCUPADO');

              $("#h_"+horanext).css('background-color','#e5a4a4');
              $("#h_"+horanext).find('input').prop('disabled',true);
              $("#h_"+horanext+" td:last").text('OCUPADO');

        }
        }

           $('input[type=radio][name=tipo]').change(function(){
           // console.log("Valor de radio: "+$("input[name='tipo']:checked").val())
              
            $("#tabla_cuerpo tr").remove();

            $("#btn_listo_dia").show();
            for(i = 0; i < resultado.horariosHoy.length; i++){
              hora = resultado.horariosHoy[i].hora.split(':');
              fila = '<tr id="h_'+hora[0]+'_'+hora[1]+'"><td><input type="radio" onclick="horaSeleccionada()" name="hora" id="hora" value="'+hora[0]+'_'+hora[1]+'"  required> '+hora[0]+':'+hora[1]+'</td><td class="ocultar-responsive">Visita Guiada</td><td class="hora-estado">DISPONIBLE</td> </tr>';
              $("#tabla_cuerpo").append(fila);
            }

            $("#tabla_cuerpo tr").css('background-color','rgb(129, 213, 209)');
            $("#tabla_cuerpo .hora-estado").text(visitantesMaximo+' lugares disponibles');  //aca se carga por primera vez
            $("#tabla_cuerpo input").prop('disabled',false);
            $("#tabla_cuerpo input").prop('checked',false);

            if(resultado.horariosHoy.length > 7){
              $(".table-responsive").attr('style','overflow-y : scroll;height: 312px;');
            }else{
              $(".table-responsive").attr('style','overflow-y : hidden');
            }
              
              if ($("input[name='tipo']:checked").val()=='interna') {
                for(i = 0; i < resultado.data.length; i++){
                 hora = resultado.data[i].hora_visita.replace(':','_');
                 if(parseInt(resultado.data[i].cantidad_disponible) < parseInt(visitantesMaximo)  && parseInt(resultado.data[i].cantidad_disponible) > 0 ){
                  $("#h_"+hora+" td:last").text(resultado.data[i].cantidad_disponible+' lugares disponibles');    
                }else{
                  $("#h_"+hora).css('background-color','#e5a4a4');
                  $("#h_"+hora).find('input').prop('disabled',true);
                  $("#h_"+hora+" td:last").text('OCUPADO');
                }
              }
        }

        else{
          //Bloquea ultimo turno
            $("#h_15_30").css('background-color','#e5a4a4');
            $("#h_15_30").find('input').prop('disabled',true);
            $("#h_15_30 td:last").text('OCUPADO');

          for(i = 0; i < resultado.data.length; i++){

            
            
            hora2 = resultado.data[i].hora_visita.replace(':','_');

            hora = hora2.split('_'); // Hora ocupada
           // console.log('Hora: '+hora[0])

            let hh = hora[0];
            let mm = hora[1];
            let c=hh;

            if(mm == 30){
              mm = '00';
            }else{
              c = parseInt(hh)-1;
              mm = '30';
              if(c<10){
                c = '0'+ c;
              }
            }
            
            horaprev = c+'_'+mm;
            //console.log("Hora previa["+i+"] = "+horaprev+" / "+hora2);

            hhn = hora[0];
            mmn = hora[1];
            cn=hh;

            if(mmn == 30){
              mmn = '00';
              cn = parseInt(hh)+1;
               if(cn<10){
                cn = '0'+ c;
              }
            }else{
              mmn = '30';
            }
            horanext = cn+'_'+mmn;
            //console.log("Hora siguiente["+i+"] = "+horanext+" / "+hora2);

             if(parseInt(resultado.data[i].cantidad_disponible) < (parseInt(visitantesMaximo))  && parseInt(resultado.data[i].cantidad_disponible) > 0 ){
              console.log(resultado.data[i].cantidad_disponible)
              $("#h_"+hora2+" td:last").text(resultado.data[i].cantidad_disponible+' lugares disponibles');
              
            }else{
              

              $("#h_"+hora2).css('background-color','#e5a4a4');
              $("#h_"+hora2).find('input').prop('disabled',true);
              $("#h_"+hora2+" td:last").text('OCUPADO');
            }

              $("#h_"+horaprev).css('background-color','#e5a4a4');
              $("#h_"+horaprev).find('input').prop('disabled',true);
              $("#h_"+horaprev+" td:last").text('OCUPADO');

              $("#h_"+horanext).css('background-color','#e5a4a4');
              $("#h_"+horanext).find('input').prop('disabled',true);
              $("#h_"+horanext+" td:last").text('OCUPADO');

        }
        }
      });
          
          }
        }
      });

      }
    });
});*/

//var ocultar = true;
var ant =  $("#carga_visitantes .row").length;
console.log(ant);

// accion al modificar la cantidad de visitantes 
var nro = '';
// accion al modificar la cantidad de visitantes 
$("#numero_visitantes").change(function(){
  $("#p3").show('slow');
  $("#paso_camino_particular3").hide('slow');
  if($(this).val() == '1'){
    $("#confirmacion_cantidad").text($(this).val()+' visitante'); 
    $("#paso_camino_particular5").hide('slow');

  }else{
    $("#confirmacion_cantidad").text($(this).val()+' visitantes'); 

  }


  cantidadFilasVisitantes = $("#carga_visitantes .row").length;
  cantidad = $(this).val() - 1;

  // clona la cnatidad faltante de visitantes o elimina la cantidad sobrante
  if(cantidad > cantidadFilasVisitantes){

    filasFaltantes = cantidad - cantidadFilasVisitantes;
    for(i = 0; i < filasFaltantes; i++){
      fila = $("#carga_visitantes .row:first-child").clone();

      if(nro == '')
        nro = parseInt(fila.find('.nro_visitante').text().trim().replace('.','')) + 1;
      else nro++;

      fila.attr('id','visitante_'+nro);

      fila.find('.nro_visitante').text(nro);
      $("#carga_visitantes").append(fila);
      $("#visitante_"+nro+' .wrapper .datos_visitante').val('');
      $("#visitante_"+nro+' .wrapper input[type=checkbox]').prop('checked',false);
    }


    $("#btn_listo_listado_visitantes").show();
    $("#p6").hide('slow');
    $("#p7").hide('slow');

    $("#paso_camino_particular6").show('slow');
    $("#paso_camino_particular7").show('slow');

  }else{
   if(cantidad > 0){
    filasSobrantes = cantidadFilasVisitantes - cantidad;         
    for(i = 0; i < filasSobrantes; i++){
      $("#carga_visitantes .row:last-child").remove();
      nro--;
    }
    if(!ocultar)
      $("#p5").show('slow');
  }else{
   $("#p5").hide('slow');
   if(!ocultar)
     $("#p6").show('slow');

 }
}



});

function generarFilas(cantidad){
  for(i = 0; i < cantidad; i++){
          fila = $("#carga_visitantes .row:first-child").clone();

          if(nro == '')
            nro = parseInt(fila.find('.nro_visitante').text().trim().replace('.','')) + 1;
          else nro++;

          fila.attr('id','visitante_'+nro);

          fila.find('.nro_visitante').text(nro);
          $("#carga_visitantes").append(fila);
          $("#visitante_"+nro+' .wrapper .datos_visitante').val('');
          $("#visitante_"+nro+' .wrapper input[type=checkbox]').prop('checked',false);
        }

        $('#p5').show('slow');
        $("#p5b").hide('slow');
}

// verifica si por visitante se completo su registro, de ser así agrega el tilde o lo quita en caso de faltar algún dato
function verificaRegistroCompleto(e){
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

// si se desea modificar la fecha y hora de la visita, se ocultan y muestran los bloques necesarios para la acción
function modificarFechaHora(){

 $("#dia_hora").show('slow');
 $("#dia_hora_elegidos").hide();
 $("#formulario_responsable_datos").hide();
 $("#p4").hide('slow');
 $("#p5").hide('slow');
 $("#p6").hide('slow');
 $("#p7").hide('slow');

 if($("#numero_visitantes").val() == '1'){
   $("#paso_camino_particular5").hide('slow');
 }else{
   $("#paso_camino_particular5").show('slow');
 }

 $("#paso_camino_particular4").show('slow');
 $("#paso_camino_particular6").show('slow');
 $("#paso_camino_particular7").show('slow');

}

// si se desea modificar los datos del referente, se ocultan y muestran los bloques necesarios para la acción
function modificarResponsable(){
  $("#formulario_responsable").show('slow');
  $("#formulario_responsable_datos").hide();
  $("#p5").hide('slow');
  $("#p6").hide('slow');
  $("#p7").hide('slow');

  if($("#numero_visitantes").val() == '1'){
   $("#paso_camino_particular5").hide('slow');
 }else{
   $("#paso_camino_particular5").show('slow');
 }

 $("#paso_camino_particular6").show('slow');
 $("#paso_camino_particular7").show('slow');

}

</script>
<script type="text/javascript">
  /*/ acción al confirmar la visita
  $("#btnEnviarParticular").click(function(){

    formdata = new FormData(document.getElementById('formulario'));

    cantidad_visitantes = 0;

    // se agregan al formData los visitantes
    $("#carga_visitantes .fila-visitante").each(function(index){
      visitante = $(this);

      fila = {
        apellido_visitante : visitante[0].childNodes[3].childNodes[1].value,
        nombre_visitante : visitante[0].childNodes[5].childNodes[1].value,
        edad_visitante : visitante[0].childNodes[7].childNodes[1].value,
        ocupacion_visitante : visitante[0].childNodes[9].childNodes[1].value,
      };

      fila = JSON.stringify(fila);
      formdata.append('visitante_'+index,fila);
      cantidad_visitantes++;
    });

    // cantidad de visitantes
    formdata.append('cantidad_visitantes',cantidad_visitantes);

    $("#btnEnviarParticular").hide();
    $("#loading").show();

    // función ajax que almacena en la BD la visita
    $.ajax({

      url: base_url + "visitas/guardarVisitaParticular",
      method: "POST",          
      data: formdata,            
      cache: false,
      contentType: false,
      processData: false,  
      success: function( data ) {
        resultado = jQuery.parseJSON(data); 
        if(resultado.success){

          hora = $("#dia_hora_elegidos2").text().replace("_", ":");

          $("#texto_confirmacion_visita").text('Los esperamos en Anchipurac para realizar su visita grupal guiada, el '+$("#dia_hora_elegidos1").text()+', a las '+hora);
          $("#codigo_confirmacion").text(resultado.data);
          $("#ex1").attr("style","display: flex");
        }
        else{              
          alert(resultado.data);
          $("#btnEnviarParticular").show();
          $("#loading").hide();
        }
      },
      error :function( data ) {
        alert('Hubo un error en el envío de la solicitud. Inténtelo nuevamente');
        $("#btnEnviarParticular").show();
        $("#loading").hide();
      }
    });*/



$("#btnEnviarParticular").click(function(){

    formdata = new FormData(document.getElementById('formulario'));

    cantidad_visitantes = 0;

    // se agregan al formData los visitantes
    $("#carga_visitantes .fila-visitante").each(function(index){
      visitante = $(this);

      fila = {
        apellido_visitante : visitante[0].childNodes[3].childNodes[1].value,
        nombre_visitante : visitante[0].childNodes[5].childNodes[1].value,
        edad_visitante : visitante[0].childNodes[7].childNodes[1].value,
        ocupacion_visitante : visitante[0].childNodes[9].childNodes[1].value,
      };

      fila = JSON.stringify(fila);
      formdata.append('visitante_'+index,fila);
      cantidad_visitantes++;
    });

if ($('#numero_visitantes').val() == 1){
  cantidad_visitantes=0;
}

formdata.append('cantidad_visitantes',cantidad_visitantes);
console.log("Cant visistantes: "+cantidad_visitantes);

$("#btnEnviarParticular").hide();
$("#loading").show();

// función ajax que almacena en la BD la visita
$.ajax({

  url: base_url + "visitas/guardarVisitaParticular",
  method: "POST",          
  data: formdata,            
  cache: false,
  contentType: false,
  processData: false,  
  success: function( data ) {
    //console.log(data); 
    resultado = jQuery.parseJSON(data); 
    if(resultado.success){

     /* var f = new Date();
      var doc = new jsPDF();
      doc.setFontSize(16);
      doc.text(20,20, 'San Juan, '+ f.getDate()+ ' del '+ (f.getMonth()+1) + ' del ' +f.getFullYear());
      doc.text(20,30, 'Quienes subscriben: \nResponsable: ' +$("#nombre").val()+' '+$("#apellido").val()+', Edad '+$("#edad").val()+' años,\nProcedencia '+$("#procedencia").val()+',\nCorreo electronico '+$("#email").val()+',\ntelefono '+$("#telefono_particular").val()+',\ny sus acompañantes: \n');

      var i=70;
      $("#carga_visitantes .fila-visitante").each(function(index){
      visitante = $(this);

      fila = {
        apellido_visitante : visitante[0].childNodes[3].childNodes[1].value,
        nombre_visitante : visitante[0].childNodes[5].childNodes[1].value,
        edad_visitante : visitante[0].childNodes[7].childNodes[1].value,
        
      };

      console.log(fila.nombre_visitante);

      doc.text(20,i,fila.nombre_visitante+" "+fila.apellido_visitante)
      i=i+10;
      });

      
      doc.text(20,i, '\nDeclaran bajo juramento que los datos consignados en este formulario son \nveraces, reales y completos sin omitir ni falsear dato alguno que deba \ncontener, siendo fiel expresion de la verdad.');
      doc.save('Declaracion.pdf');*/
      
      //console.log("Validacion: "+resultado.msj);
      //console.log("uploadedfile: "+resultado.up);
      hora = $("#dia_hora_elegidos2").text().replace("_", ":");

      $("#texto_confirmacion_visita").text('Los esperamos en Anchipurac para realizar su visita grupal guiada, el '+$("#dia_hora_elegidos1").text()+', a las '+hora);
      $("#codigo_confirmacion").attr("src",base_url+"codigo/"+resultado.qr);
      $("#ex1").attr("style","display: flex");
      //ocultar=true; edad email procedencia
      
    }
    else{   
               
      alert(resultado.msj);
      $("#btnEnviarParticular").show();
      $("#loading").hide();
    }
  },
  error :function( data ) {
    alert('Hubo un error en el envío de la solicitud. Inténtelo nuevamente');
    $("#btnEnviarParticular").show();
    $("#loading").hide();
  }
});


  });
</script>