// =============================== //
//              HEADER             //
// =============================== //

$('#btn-menu').on('click', function() {
    $(this).toggleClass('open');
    $('nav').slideToggle();
});
$('nav p.title').on('click', function() {
    if ($(window).width() < 768) {

        var target = $(this).data('target');

        $('nav p.title').not(this).removeClass('open');
        $('nav .subtitle').not('#' + target).slideUp();

        $(this).toggleClass('open');
        $(this).siblings('.subtitle').slideToggle();
    }
})



// =============================== //
//              FOOTER             //
// =============================== //
$('footer .title').on('click', function() {
    if ($(window).width() < 768) {
        var target = $(this).data('target');
        $('footer p.title').not(this).removeClass('open');
        $('footer .subtitle').not('#' + target).slideUp();
        $(this).toggleClass('open');
        $(this).siblings('.subtitle').slideToggle();
    }
})
$(window).on('resize', function() {
    if ($(this).width() > 768) {
        $('footer .subtitle').show();
        $('nav .subtitle').show();
    }
})


$('#frmContacto').on('submit', function(e) {

    e.preventDefault();

    var nombre = $('#nombre').val(),
    apellido = $('#apellido').val(),
    dni = $('#dni').val(),
    nacionalidad = $('#nacion').val(),
    ocupacion = $('#ocupacion').val(),
    establec = $('#establec').val(),
    tel_pers = $('#tel_pers').val(),
    tel_cont = $('#tel_cont').val(),
    email = $('#email').val(),
    consulta = $('#consulta').val(),

    boton = $('#btnEnviar');

    if (nombre == '' || apellido == '' || dni == '' || nacionalidad == '' || ocupacion == '' || establec == '' || tel_pers == '' || tel_cont == '' || email == '' || consulta == '') {
        alert('todos los campos son obligatorios');
    } else {

        $.ajax({
            url: ruta + "formulario/enviar",
            method: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                boton.prop('disabled', true).addClass('active');
            },
            success: function(respuesta) {


                // console.log(respuesta);

                switch (respuesta) {

                    case 'error':
                    boton.prop('disabled', false).removeClass('active');
                    alert('Hubo un error');
                    break;

                    case 'ok':
                    alert('La consulta se envió con éxito');
                    location.reload();
                    break;

                }

            }

        })




    }

})

// =============================== //
//        GALERIA - CAROUSEL       //
// =============================== //
$('.owl-carousel.galeria').owlCarousel({
    loop: true,
    dots: true,
    nav: true,
    margin: 0,
    center: true,
    items: 1,
});

$('.grid-page-galeria a').on('click', function() {
    $('.modal').css('display', 'flex')
})
$('.modal #close').on('click', function() {
    $('.modal').css('display', 'none')
})
$(document).on('keydown', function(e) {
    if (e.which == 27) {
        $('.modal').css({ display: 'none' });
    }
});


// =============================== //



// =============================== //
//         CAROUSEL VARIOS         //
// =============================== //
$('.owl-carousel.hero').owlCarousel({
    loop: true,
    dots: false,
    nav: false,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 3000,
    center: true,
    items: 1,
});


// =============================== //
//  GALERIA NOTICIAS- CAROUSEL     //
// =============================== //




$('.noticias-galeria').owlCarousel({
    autoplay:false,
    loop: true,
    dots: false,
    margin: 1,
    nav: true,
    center: true,
    mouseDrag: false,
    touchDrag: false,
    pullDrag: false,
    URLhashListener:true,
    navText: ['<img src="assets/iconos/site/flecha-izquierda.svg" alt="">', '<img src="assets/iconos/site/flecha-derecha.svg" alt="">'],
    items: 1,
});

// $('.inner-carousel-interno').owlCarousel({
//  loop: true,
//  autoplay: true,
//  nav: true,
//  dots: false,
//  items: 1,
//  center: true,
//  mouseDrag: true,
//  touchDrag: true,
//  pullDrag: true,
//  navText: ['<svg width="50" height="50" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>','<svg width="50" height="50" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>'],
// });


$('.modal #close').on('click', function() {
    $('.modal').css('display', 'none')
})
$(document).on('keydown', function(e) {
    if (e.which == 27) {
        $('.modal').css({ display: 'none' });
    }
});

$(".inner-carousel-interno").on("initialized.owl.carousel", () => {
  setTimeout(() => {
    $(".owl-item.active .owl-slide-animated").addClass("is-transitioned");
    $("section").show();
}, 200);
});

const $owlCarousel = $(".inner-carousel-interno").owlCarousel({
  items: 1,
  loop: true,
  center: true,
  // autoplay:true,
  margin:100,
  // autoplayTimeout:3000, 
  nav: true,
  responsive:{
    0:{
        autoplay:true,
        autoplayTimeout:3000, 
    },
},
navText: [
'<svg width="50" height="50" viewBox="0 0 24 24" class="svg-anterior"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>',
'<svg width="50" height="50" viewBox="0 0 24 24" class="svg-siguiente"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>' /* icons from https://iconmonstr.com */
]
});

$owlCarousel.on("changed.owl.carousel", e => {
  $(".owl-slide-animated").removeClass("is-transitioned");

  const $currentOwlItem = $(".owl-item").eq(e.item.index);
  $currentOwlItem.find(".owl-slide-animated").addClass("is-transitioned");

  const $target = $currentOwlItem.find(".owl-slide-text");
  // doDotsCalculations($target);
});

// $owlCarousel.on("resize.owl.carousel", () => {
//   setTimeout(() => {
//     setOwlDotsPosition();
//   }, 50);
// });

/*if there isn't content underneath the carousel*/
//$owlCarousel.trigger("refresh.owl.carousel");

// setOwlDotsPosition();

// function setOwlDotsPosition() {
//   const $target = $(".owl-item.active .owl-slide-text");
//   doDotsCalculations($target);
// }

// function doDotsCalculations(el) {
//   const height = el.height();
//   const {top, left} = el.position();
//   const res = height + top + 20;

//   $(".inner-carousel-interno .owl-dots").css({
//     top: `${res}px`,
//     left: `${left}px`
//   });
// }


$('.owl-one').owlCarousel({
    loop:true,
    margin:40,
    // autoplay:true,
    // autoplayTimeout:3000, 
    nav: true,
    dots:false,
    mouseDrag: false,
    touchDrag: false,
    pullDrag: false,
    URLhashListener:true,
    navText: [
    '<svg width="50" height="50" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>',
    '<svg width="50" height="50" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>' /* icons from https://iconmonstr.com */
    ],
    responsive:{
      0:{
        items:1,
        margin:20,
    },
    600:{
        items:3
    },
    765:{
        items:3,
        margin:100,
    },
    1000:{
        items:5,
    }
}
});


// =============================== //
//             MAPAS               //
// =============================== //

$('.btn-ver-mapa').on('click', function(e){
    e.preventDefault();
    $('.mapa-iframe').html('');
    var target = $(this).attr('href');

    $('.contenedor-mapas > img').hide();
    $('.mapa-iframe').show();

    if(target == '#conector'){
        $('.mapa-iframe').html('<iframe src="https://www.google.com/maps/embed?pb=!1m22!1m8!1m3!1d54383.09535369848!2d-68.61797831939376!3d-31.58059831668103!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d-31.5383732!2d-68.5363029!4m5!1s0x9681388548501aa3%3A0xdf05619894f50b22!2sCentro+Ambiental+Anchipurac%2C+Calle+5+y+Pelegrini.+Al+pie+del+cerro+Parkison%2C+5400+Rivadavia%2C+San+Juan!3m2!1d-31.603088999999997!2d-68.656522!5e0!3m2!1ses-419!2sar!4v1559775135183!5m2!1ses-419!2sar" width="100%" height="560" frameborder="0" style="border:0" allowfullscreen></iframe>');
    }

    if(target == '#meglioli'){
        $('.mapa-iframe').html('<iframe src="https://www.google.com/maps/embed?pb=!1m24!1m8!1m3!1d54392.085625833635!2d-68.6214759!3d-31.5651871!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x96814031c5aaaaab%3A0x909f132217dbc86e!2sCentro+C%C3%ADvico%2C+Avenida+Libertador+General+San+Mart%C3%ADn%2C+San+Juan!3m2!1d-31.536096399999998!2d-68.5376216!4m5!1s0x9681388548501aa3%3A0xdf05619894f50b22!2sCentro+Ambiental+Anchipurac%2C+Calle+5+y+Pelegrini.+Al+pie+del+cerro+Parkison%2C+5400+Rivadavia%2C+San+Juan!3m2!1d-31.603088999999997!2d-68.656522!5e0!3m2!1ses-419!2sar!4v1559775178527!5m2!1ses-419!2sar" width="100%" height="560" frameborder="0" style="border:0" allowfullscreen></iframe>')
    }

    if(target == '#moron'){
        $('.mapa-iframe').html('<iframe src="https://www.google.com/maps/embed?pb=!1m40!1m12!1m3!1d108779.05394725231!2d-68.66649109198525!3d-31.569573854594164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m25!3e0!4m5!1s0x96814031c456ec93%3A0xf81d3db636ae0d6e!2sCentro+C%C3%ADvico%2C+Av.+Libertador+Gral.+San+Mart%C3%ADn+750%2C+J5400+San+Juan!3m2!1d-31.536096899999997!2d-68.5376224!4m3!3m2!1d-31.5409889!2d-68.6254013!4m3!3m2!1d-31.5563127!2d-68.62347009999999!4m3!3m2!1d-31.567520599999998!2d-68.62525099999999!4m5!1s0x9681388548501aa3%3A0xdf05619894f50b22!2sCentro+Ambiental+Anchipurac%2C+Rivadavia%2C+San+Juan!3m2!1d-31.603088999999997!2d-68.656522!5e0!3m2!1ses-419!2sar!4v1559874621655!5m2!1ses-419!2sar" width="100%" height="560" frameborder="0" style="border:0" allowfullscreen></iframe>')
    }

    if(target == '#bici'){
        $('.mapa-iframe').html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7061.621823317117!2d-68.6584853784056!3d-31.60444135636017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9681388548501aa3%3A0xdf05619894f50b22!2sCentro+Ambiental+Anchipurac!5e1!3m2!1ses-419!2sar!4v1559871588503!5m2!1ses-419!2sar" width="100%" height="560" frameborder="0" style="border:0" allowfullscreen></iframe>')
    }

    if(target == '#mtb'){
        $('.mapa-iframe').html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7061.621823317117!2d-68.6584853784056!3d-31.60444135636017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9681388548501aa3%3A0xdf05619894f50b22!2sCentro+Ambiental+Anchipurac!5e1!3m2!1ses-419!2sar!4v1559871588503!5m2!1ses-419!2sar" width="100%" height="560" frameborder="0" style="border:0" allowfullscreen></iframe>')
    }

})