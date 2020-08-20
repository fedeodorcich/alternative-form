// ================================ //
//              ADMINLP             //
// ================================ //

// Variables globales.
var bpSm = 576,
	$statusBar = $('.status-bar'),
	$btnBar = $('#btn-menu-desktop'),
	$btnMenuMovil = $('#btn-menu-movil'),
	$moduloDeContenido = $('.modulo-admin-lp'),
	$sideBar = $('.side-bar');

// Agregamos o sacamos la clase 'close' en los componentes correspondientes para collapsar o expandir el menú.
$btnBar.on('click', function(){
	$btnBar.toggleClass('close');
	$sideBar.toggleClass('close');
	$statusBar.toggleClass('close');
	$moduloDeContenido.toggleClass('close');
	$('.dropdown').find('ul').hide();
});

$btnMenuMovil.on('click', function(){
	
	$sideBar.addClass('close')
		.after('<div id="fondo-negro" class="animated fadeIn fast"></div>');

	$('#fondo-negro').on('click', function(){
		$sideBar.removeClass('close');
		$(this).remove();
	});
});

$(window).on('resize', function(){

	var anchoPantalla = $(this).width();

	if( anchoPantalla < bpSm ){
		$btnBar.removeClass('close');
		$sideBar.removeClass('close');
		$statusBar.removeClass('close');
		$moduloDeContenido.removeClass('close');
		$('.dropdown').find('ul').hide();
	}
	$('#fondo-negro').remove();

});


// ===== DROPDPWN ===== //
var $btnDropdown = $('.dropdown'),
	ocultarmMenu = $btnDropdown.find('ul');

ocultarmMenu.hide();

$btnDropdown.on('click', function(){
	if( $(window).width() > 576 ){
		if( !$('.side-bar').hasClass('close') ){
			var menu = $(this).find('ul');
			menu.slideToggle();
			$(this).toggleClass('open');
		}
	} else {
		var menu = $(this).find('ul');
		menu.slideToggle();
		$(this).toggleClass('open');
	}
})



// ===== DESPLIEGUE DEL TOOLTIPS ===== //
function removerClon(){
	$('.div-clon').on('mouseleave', function(){
		$(this).remove();
	})
}

var $elementosHovereado = $sideBar.find('.menu-item');

$elementosHovereado.on('mouseenter', function(e){
	removerClon()
	
	if($('.side-bar').hasClass('close') && $(window).width() > 576 ){

		e.preventDefault();
		var posicion = $(this).offset(),
		clon = $(this).clone(),
		hermanos = $(this).siblings('ul').clone();

		var contenido = '';
		contenido += '<div class="div-clon">';
		contenido += '</div>';

		$('body').append(contenido);

		var $divClone = $('.div-clon');

		$divClone.append(clon);
		$divClone.append(hermanos);

		hermanos.show();

		$divClone.offset({top:posicion.top, left:0})
		
		removerClon()
	}
})


$(document).ready(function(){
	if( $(window).width() < bpSm ){
		$btnBar.removeClass('close');
		$sideBar.removeClass('close');
		$statusBar.removeClass('close');
		$moduloDeContenido.removeClass('close');
		$('.dropdown').find('ul').hide();
	}
	$('#fondo-negro').remove();
})



// ================================ //
//               MODAL              //
// ================================ //

function abrirModal(){
	var btnModals = $('.modal-open');
	btnModals.on('click', function(){
		// e.stopPropagation();
		var target = $(this).data('target');
			modalTarget = $('#'+target),
			outModal = modalTarget.find('.modal-container')
			btnClose = modalTarget.find('.icon-cross');
			
		modalTarget.css({
			display: 'flex'
		});

		// Cerramos el modal desde el boton de cerrrar
		btnClose.on('click', function(){
			modalTarget.hide();
		});

		// Cerramos el modal con la tecla escape
		$(document).bind('keydown',function(e){
			if ( e.which == 27 ) {
				modalTarget.hide();
			};
		});
	});

}
abrirModal();


$('.tabla').on('draw.dt', function(){
	abrirModal();
});

$('.tabla').on( 'responsive-display.dt', function ( ) {
	abrirModal();
} );






// ================================ //
//              SETTINGS            //
// ================================ //
var btnSetting = $('.status-bar .btn-setting'),
	setting = $('.status-bar .setting');

btnSetting.on('click', function(e){
	e.stopPropagation();
	setting.toggleClass('open');
	$(this).toggleClass('open');
});

	$(document).on("click",function(e) {
	if (!setting.is(e.target) && setting.has(e.target).length === 0) { 
		setting.removeClass('open');
		btnSetting.removeClass('open');          
	}
});

// Apertura del formulario de soporte
$('#btn-soporte').on('click', function(){

	var modal = $('#soporte');
	modal.css({
		display: 'flex'
	})
	btnSetting.toggleClass('open');
	setting.toggleClass('open');

	// Cerramos el modal desde el boton de cerrrar
	$('.icon-cross').on('click', function(){
		modal.hide();
	});

	// Cerramos el modal con la tecla escape
	$(document).bind('keydown',function(e){
		if ( e.which == 27 ) {
			modal.hide();
		};
	});
});






// ================================ //
//         SMALL NOTIFICATION       //
// ================================ //

$notification = function( opciones, callback ){

	opciones = $.extend({
		mensaje: 	undefined,
		// timeout: 	3000, 
		type: 'succes',
	}, opciones);

	var html = '';

	html += '<div id="notification">';
	html += '	<div class="notif-container">';
	html += '		<button id="close-notification"><span class="icon-cross"></span></button>';
	(opciones.type === 'success') && (html += '<span class="icon-checkmark-outline"></span>');
	(opciones.type === 'error') && (html += '<span class="icon-close-outline"></span>');
	(opciones.type === 'warning') && (html += '<span class="icon-exclamation-outline"></span>');
	html += '		<p>'+opciones.mensaje+'</p>';
	html += '	</div>';
	html += '</div>';

	$('body').append( html );

	$('#close-notification').on('click', function(){
		$('#notification').remove();
		if ( typeof callback == 'function' ){
			callback();
		}
	})

};


// ================================ //
//         LOADER EN BOTONES        //
// ================================ //

$('#loader-demo').on('click', function(){
			$(this).toggleClass('active');
	})

$('#loader-demo2').on('click', function(){
			$(this).toggleClass('active');
})





// ================================ //
//         SWIPE DEL SIDE BAR       //
// ================================ //

// El codigo siguiente es para detectar SWIPES en dispositivos moviles sin usar frameworks ni librerias. Usamos Vanilla JS porque necesitamos usar jQuery V.3.X en adelante para el Datatable, entonces no podemos usar jQuery Mobile para los swipe porque jQeury Mobile neceista jQuery v.2 o anterior y si importamos estas libreriras se rompe todo.
document.addEventListener('touchstart', handleTouchStart, false);        
document.addEventListener('touchmove', handleTouchMove, false);

var xDown = null;                                                        
var yDown = null;
var menuAbierto = false;

function getTouches(evt) {
	return evt.touches ||             // browser API
			evt.originalEvent.touches; // jQuery
}                                                     

function handleTouchStart(evt) {                                         
	xDown = getTouches(evt)[0].clientX;                                      
	yDown = getTouches(evt)[0].clientY;                                      
};                                                

function handleTouchMove(evt) {
	if ( ! xDown || ! yDown ) {
		return;
	}

	var xUp = evt.touches[0].clientX;                                    
	var yUp = evt.touches[0].clientY;

	var xDiff = xDown - xUp;
	var yDiff = yDown - yUp;

	if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
		if ( xDiff > 0 ) {
			// Deteccion de SWIPE izquierdo y cerramos el modal
			$sideBar.removeClass('close');
			$('#fondo-negro').remove();
			menuAbierto = false;
		} else {
			// Deteccion de SWIPE derecho y abrimos el modal
			if(menuAbierto == false) {
				$sideBar.addClass('close')
					.after('<div id="fondo-negro" class="animated fadeIn fast"></div>');
				menuAbierto = true;
			}
			$('#fondo-negro').on('click', function(){
				$sideBar.removeClass('close');
				$(this).remove();
			});
		}                       
	} else {
		if ( yDiff > 0 ) {
			// Deteccion de SWIPE arriba
		} else { 
			// Deteccion de SWIPE abajo
		}                                                                 
	}
	/* reset values */
	xDown = null;
	yDown = null;                                             
};





// ================================ //
//        CONTENEDOR TOGGLE         //
// ================================ //

var $toggle = $('.contenedor.toggle'),
	$h2 = $toggle.find('h2'),
	$toggleContainer = $toggle.find('.toggle-container');
	$toggleContainer.hide();
	
	
$h2.on('click', function(){
	$(this).toggleClass('open');
	var $toggleContainer = $(this).siblings('.toggle-container');
	$toggleContainer.slideToggle();
})



$(document).ready(function(){
	$('#fechaDesde').focus();
})



/*==========================================
FORMULARIO SOPORTE
==========================================*/

$('#enviarCorreoSoporte').on('click', function(){

	var nombre     = $('#nombreSoporte').val(),
		email      = $('#emailSoporte').val(),
		asunto     = $('#asuntoSoporte').val(),
		comentario = $('#comentarioSoporte').val(),

		msg        = $('#msgSoporte'),
		$this      = $(this);

	if(nombre == '' || email == '' || asunto == '' || comentario == ''){
		$notification({
			mensaje: 'Todos los campos son requeridos.',
			type: 'error'
		})

	} else if(!expresionEmail.test(email)){
		$notification({
			mensaje: 'Por favor, ingrese un e-mail válido.',
			type: 'error'
		})
	} else {
	
		$.ajax({
			url: ruta+'soporte/enviarConsultaSoporte',
			method: "post",
			data: {'nombre': nombre,
				'email' : email,
				'asunto': asunto,
				'comentario': comentario
			},
			beforeSend: function(){
				$('#loader').addClass('active');
			},
			success: function(resp){

				$('#loader').removeClass('active');

				switch(resp){
					case 'error':
						$notification({
							mensaje: 'Error al enviar el correo, por favor verifique los datos ingresados y vuelva a intentarlo.',
							type: 'error'
						})
					break;

					case 'ok':
						$notification({
							mensaje: 'El e-mail se envió correctamente. Pronto el equipo de soporte se pondrá en contacto.',
							type: 'success'
						})
					break;

				}
		
			}
		
		})
	}
})

/*============== fin de FORMULARIO SOPORTE ===============*/