<div class="hero mb-30" >
  <video autoplay loop muted >
    <source src="assets/video/video.mp4" type="video/mp4" >
    </video>
    <div class="banner-home" >
      <a href="<?=base_url('visitas')?>">
        <!-- <center> -->
          <img  src="<?=base_url('assets/img/home/banner_ticket_bco-01.svg')?>" style="width: 40%" >
          <!-- </center> -->
        </a>
      </div>
   <!--  <a href="<?=base_url('visitas')?>" class="banner-home">
        <img  src="<?=base_url('assets/img/home/banner_ticket_bco-01.svg')?>" >
      </a> --> 
    </div>

<?php

    /*$hoyParticular = date("Y-m-d");
    //echo "Mostrar: " . date('Y-m-d', strtotime($hoyParticular."+ 1 days"));
    $add="Archivo 1";
    echo "Ruta: " . base_url('planillas/') . $add;*/
 ?>
<!-- <?php if($congresos){ ?>
  
  <div class="contenedor">
    <div class="agenda-home">
    
    <?php if($this->session->userdata('site_lang') == 'spanish'){
    
      foreach($congresos as $c){ ?>
        <a class="evento" href="#">
          <div class="img-container">
            <div class="transparencia"></div>
            <img src="<?= base_url('assets/img/hero.jpg')?>" alt="">
          </div>
          <p class="categoria">// <span><?=$c->tipo_congreso?></span></p>
          <div class="titulo"><?=$c->nombre_congreso?></div>
        </a>
      
      <?php }
    } else { 
      
      foreach($congresos as $c){?>
    
        <a class="evento" href="#">
          <div class="img-container">
            <div class="transparencia"></div>
            <img src="<?= base_url('assets/img/hero.jpg')?>" alt="">
          </div>
          <p class="categoria">// <span><?=$c->type_congress?></span></p>
          <div class="titulo"><?=$c->name_congress?></div>
        </a>
          
      <?php } 
    } 
    
  } else { ?>
    <a class="evento" href="#">
      <div class="img-container">
        <div class="transparencia"></div>
        <img src="<?= base_url('assets/img/hero.jpg')?>" alt="">
      </div>
      <p class="categoria">// <span><?=lang('sin_congresos')?></span></p>
    </a>
    
  <?php } ?>
  
  </div>
</div> -->

<!-- OCULTA NOTICIAS-->
<?php /*if(!empty($noticias)){ ?>
<div class="noticias owl-one owl-carousel owl-theme " style="border-bottom: 1px solid;max-width: 1000px;margin-left: auto;margin-right: auto;padding-bottom: 10px;">
  <?php foreach($noticias as $key => $noticia){ ?>
  <?php  
  if(strlen($noticia->titulo)>=30 && false !== ($breakpoint = strpos($noticia->titulo,' ', 30))) {
    if($breakpoint < strlen($noticia->titulo) - 1) {
      $titulo = substr($noticia->titulo, 0, $breakpoint) . '...';
    }
  }else{
    $titulo = $noticia->titulo;
  }
  ?>
  <div class="item">
    <a href="#noticia_<?=$noticia->id_noticias?>" onclick="modalOpen()">
      <img class="grayscale" src="<?=!empty($noticia->imagenes)? base_url_noticias('uploads/galeria_noticias/'.$noticia->imagenes[0]->nombre_archivo) : '' ?>" alt="">
      <p>// <?=$noticia->volanta?></p>
      <p><b><?= $titulo ?></b></p>
    </a>
  </div>
  <?php } ?>

</div>
<?php } */?>
<!--END OCULTA NOTICIAS-->



<!--PARA EVENTO-->

<div class="contenedor" id="descargas" style="width: 50%; text-align: center; align-content: center; margin: auto;">
  <div style="display: grid; grid-template-columns: auto auto;">
    <div id="div-ev3" style="margin: 5px; padding: 5px;">
      <a href="<?=base_url('assets/folletos/FOLLETO 071.jpg')?>" download="folleto1.jpg"><h2 class="descarga" style="color: white;">Descargar Recorrido Exterior</h2></a>
    </div>
    <div id="div-ev3" style="margin: 5px; padding: 5px;">
      <a href="<?=base_url('assets/folletos/FOLLETO 072.jpg')?>" download="folleto2.jpg"><h2 class="descarga" style="color: white;">Descargar Folleto Número 2</h2></a>
    </div>
  </div>
  <br>
</div>

<div class='contenedor' style="padding: 0; align-items: center; margin: auto;">

  <!--div class="grid-tres-columnas" style="grid-gap: 0px; width:100%; margin:auto;">

    <div class="wrapper abs-center" id="div-ev1">
      <img src="<?=base_url('assets/img/evento/logo2.png')?>" alt="MVA"></a>
    </div>

    <div class="wrapper" id="div-ev2">
      <div id="div-vert"></div>
        <h5 class="abs-center" style="color: #707070; font-size: 1.5rem; margin-top: 10%; margin-bottom: 10%; text-align: center;">Ya podes ingresar a votar las diferentes obras</h5>
        
    </div>

    <div class="wrapper abs-center" id="div-ev3">

        <a id="link-evento" style="display: inline-block;" href ='https://anchipurac.com/app-mva2/'>
          <h5 id="link">Ingresar</h5>
        </a>

    </div>

</div-->

<br>

<div class="grid-tres-columnas" style="grid-gap: 0px; width:100%; margin:auto;">

    <div class="wrapper abs-center" id="div-ev1">
       <h5 class="abs-center" style="color: #707070; font-size: 1.6rem; text-align: center;"><span>Entrar al <br> <b>Parque Escultórico</b></h5>
    </div>

    <div class="wrapper" id="div-ev2">
      <div id="div-vert"></div>
        <h5 class="fecha-event" style="font-size: 1.5rem; margin-top: 5%; margin-bottom: 10%;">Conoce las obras del Parque Escultórico Anchipurac</h5>
    </div>

    <div class="wrapper abs-center" id="div-ev3">

        <a id="link-evento" style="display: inline-block;" href ='https://anchipurac.com/mva/'>
          <h5 id="link">Ingresa<br>Acá</h5>
        </a>

    </div>

</div>

<!--==================================================-->

<br>

<div class="grid-tres-columnas" style="grid-gap: 0px; width:100%; margin:auto;">

    <div class="wrapper abs-center" id="div-ev1">
       <h5 class="abs-center" style="color: #707070; font-size: 1.6rem; text-align: center;"><span>Foro Provincial <br> <b>"Hacia un Futuro Sustentable"</b></h5>
    </div>

    <div class="wrapper " id="div-ev2">
      <div id="div-vert"></div>
        
           <h5 class="fecha-event" style="font-size: 1.3rem"><b>07/09</b><br> <span style="font-style:italic; font-weight:lighter;">hasta</span> <br><b>25/09</b></h5>
           <a href="<?= base_url('assets/documento/Foro1.pdf')?>" target="_blank">
          <p id="bases" class="abs-center"style="color: #707070; font-size: 1.2rem; text-align: center; margin-top: 5px"><strong><u>Más información</u></strong></p></a>
    </div>

    <div class="wrapper abs-center" id="div-ev3">

        <a id="link-evento" target="_blank" style="display: inline-block;" href ='https://docs.google.com/forms/d/e/1FAIpQLScaeR6UbA7llAe0qZnjKq2pxuFUOw7419jVgYaEIQZMcVzVZg/viewform'>
          <h5 id="link">Inscribite</h5>
        </a>

    </div>

</div>
<br>

<div class="grid-tres-columnas" style="grid-gap: 0px; width:100%; margin:auto;">

    <div class="wrapper abs-center" id="div-ev1">
       <h5 class="abs-center" style="color: #707070; font-size: 1.6rem; text-align: center;"><strong>Ya podés participar en los ODS</strong></h5>
    </div>

    <div class="wrapper" id="div-ev2">
      <div id="div-vert"></div>
        <h5 class="fecha-event" style="font-size: 1.5rem; margin-top: 5%; margin-bottom: 10%;">¿Qué sabe el ciudadano acerca de los ODS?</h5>
    </div>

    <div class="wrapper abs-center" id="div-ev3">

        <a id="link-evento" target="_blank" style="display: inline-block;" href ='https://docs.google.com/forms/d/e/1FAIpQLSfXR2MAc9yhz_mjO3lIjU4yZSyxyvs9VJDDdZ2opAACeCeYQw/viewform'>
          <h5 id="link">Dejanos tu<br>respuesta</h5>
        </a>

    </div>

</div>
<br>
<!--================================================-->

<div class="grid-tres-columnas" style="grid-gap: 0px; width:100%; margin:auto;">

    <div class="wrapper abs-center" id="div-ev1">
       <h5 class="abs-center" style="color: #707070; font-size: 1.6rem; text-align: center;">CUENTOS AMBIENTALES <br>ANCHIPURAC</h5>
    </div>

    <div class="wrapper " id="div-ev2">
      <div id="div-vert"></div>
        <a href="<?= base_url('assets/documento/Bases y condiciones Convocatoria Abierta 2020 Anchipurac Cuentos Ambientales.pdf')?>" target="_blank">
          <h5 id="bases" class="abs-center"style="color: #707070; font-size: 25px; text-align: center; margin-top: 10%; margin-bottom: 10%;">Bases y Condiciones</h5>
        </a>
    </div>

    <div class="wrapper abs-center" id="div-ev3">

        <a id="link-evento" style="display: inline-block;" href ='https://docs.google.com/forms/d/1KlbiS8LpwoKZoBcNUapHrd67lEC7wtCvIdflzSDfDGg/edit'>
          <h5 id="link">Inscribite</h5>
        </a>

    </div>

</div>



<!--=======================================================-->

<br>



    <div id="div2">

      <div class="wrapper abs-center" id="div-ev4" style="border: solid;">
       <img src="<?=base_url('assets/img/evento/suprabanner.jpg')?>" alt ="Supra Reciclaje">
      </div>

     <div class="wrapper abs-center" id="div-ev5">
        <a  class="link-evento" href ='https://docs.google.com/forms/d/e/1FAIpQLScJrga1n8jXPNxZaJQ6rzeOfs2s_fWFweIGYRnGA5XRTXUZ2A/alreadyresponded?vc=0&c=0&w=1'>
          <h5 style="font-size: 27px;"id="link">Unirse</h5>
        </a>
    </div>

    </div>

    <br>

</div>





<div class="contenedor" id="cont-encuesta" style="width: 25%; height: 30%">
  <div id="div3">
      <div class="wrapper abs-center" id="div-ev4" style="border: solid;" >
       <img src="<?=base_url('assets/img/evento/encuesta.jpg')?>" width="50%" height="50%" alt ="Encuesta">
      </div>

     <div class="wrapper abs-center" id="div-ev5">
        <a  class="link-evento" href ='https://docs.google.com/forms/d/e/1FAIpQLSfmoqTe5OrIUzXKH9vzeD365Eq8OkjcZSSgwdRrm3AzXwctXw/viewform'>
          <h5 style="font-size: 27px;"id="link">Realizar Encuesta</h5>
        </a>
    </div>

    </div>
  
</div>


  <!--div id="owlarea" style="display: flex; width: 60%;">
    <div class="owl-carousel owl-theme owl-loaded" >
      <div class="item"><img src="<?=base_url('assets/img/evento/01 Lidia Wicnudel MAR_3095.JPG')?>"></div>
      <div class="item"><img src="<?=base_url('assets/img/evento/02 Eduardo Cercós Mirats MAR_3076.JPG')?>"></div>
      <div class="item"><img src="<?=base_url('assets/img/evento/03 Facundo Bustelo MAR_3091.JPG')?>"></div>
      <div class="item"><img src="<?=base_url('assets/img/evento/04 Beatriz García Huertas MAR_3116.JPG')?>"></div>
      <div class="item"><img src="<?=base_url('assets/img/evento/05 Roxana Viotto MAR_3075.JPG')?>"></div>
      <div class="item"><img src="<?=base_url('assets/img/evento/06 Alberto Álvarez  MAR_3083.JPG')?>"></div>
      <div class="item"><img src="<?=base_url('assets/img/evento/07 Martín Quiroga MAR_3102.JPG')?>"></div>
      <div><img src="<?=base_url('assets/img/evento/08 Mirta Romero MAR_3066.JPG')?>"></div>
      <div><img src="<?=base_url('assets/img/evento/09 Claudia Cerminaro MAR_3138.JPG')?>"></div>
      <div><img src="<?=base_url('assets/img/evento/10 Carlos González Gutiérrez MAR_3070.JPG')?>"></div>
      <div><img src="<?=base_url('assets/img/evento/11 Humberto Costa MAR_2989.JPG')?>"></div>
      <div><img src="<?=base_url('assets/img/evento/12 Gustavo Balmaceda MAR_3132.JPG')?>"></div>
      <div><img src="<?=base_url('assets/img/evento/13 Lisandro Vinzio MAR_3153.JPG')?>"></div>
      <div><img src="<?=base_url('assets/img/evento/14 Natalia Abot Glez MAR_3110.JPG')?>"></div>
      <div><img src="<?=base_url('assets/img/evento/15 María Candelaria Tascheret MAR_3101.JPG')?>"></div>
      <div><img src="<?=base_url('assets/img/evento/16 José Luis Martínez MAR_3158.JPG')?>"></div-
      <div><img src="<?=base_url('assets/img/evento/17 Oriol Texidor MAR_3060.JPG')?>"></div>
      <div><img src="<?=base_url('assets/img/evento/18 Jennifer Calderón MAR_3098.JPG')?>"></div>
      <div><img src="<?=base_url('assets/img/evento/19 Elisa Dall’Occhio MAR_3122.JPG')?>"></div>
      <div><img src="<?=base_url('assets/img/evento/20 MURAL MAR_3140.JPG')?>"></div>

    </div>
  </div-->
  


<!--/PARA EVENTO-->


<div class="contenedor animated fadeIn wow">
  <div class="institucional-home">
    <h2><?=lang('slogan');?></h2>
    <h1>anchipurac</h1>
    <p><?=lang('parrafo');?></p>

    <img src="<?= base_url('assets/img/maqueta.png')?>" alt="Anchipurac - Centro de educación ambiental">
  </div>
</div>

<div class="mision-vision-valores mb-75 animated fadeIn wow" id="vison-mision-valores">
  <div class="contenedor">
    <div class="item">
      <div class="circle">
        <p><?=lang('vision_titulo');?></p>
      </div>
      <p class="contenido"><?=lang('vision_cuerpo');?></p>
    </div>
    <div class="item">
      <div class="circle">
        <p><?=lang('mision_titulo');?></p>
      </div>
      <p class="contenido"><?=lang('mision_cuerpo');?></p>
    </div>
    <div class="item">
      <div class="circle">
        <p><?=lang('valores_titulo');?></p>
      </div>
      <p class="contenido"><?=lang('valores_cuerpo');?></p>
    </div>
  </div>
</div>

<div class="contenedor ubicacion-container mb-75 animated fadeIn wow">
  <a href="<?= base_url('informacion#mapas-contenedor')?>">
    <div class="ubicacion">
      <p><?=lang('ubicacion_linea_1');?></p>
      <h3><?=lang('ubicacion_linea_2');?></h3>
      <p><?=lang('ubicacion_linea_3');?></p>
      <p><?=lang('ubicacion_linea_4');?></p>
      <p><?=lang('ubicacion_linea_5');?></p>
    </div>
  </a>
</div>

<div class="contenedor galeria-home-container animated fadeIn wow">
  <p><?=lang('galeria_linea_1');?></p>
  <h3><?=lang('galeria_linea_2');?></h3>

  <div class="galeria-home">
    <div class="media-container">
      <img src="<?= base_url('assets/img/galeria/galeria-01.jpg')?>" alt="">
    </div>
    <div class="media-container">
      <img src="<?= base_url('assets/img/galeria/galeria-02.jpg')?>" alt="">
    </div>
    <div class="media-container">
      <img src="<?= base_url('assets/img/galeria/galeria-03.jpg')?>" alt="">
    </div>
    <div class="media-container">
      <img src="<?= base_url('assets/img/galeria/galeria-04.jpg')?>" alt="">
    </div>
    <div class="media-container">
      <img src="<?= base_url('assets/img/galeria/galeria-05.jpg')?>" alt="">
    </div>
    <div class="media-container">
      <img src="<?= base_url('assets/img/galeria/galeria-06.jpg')?>" alt="">
    </div>
    <div class="media-container">
      <img src="<?= base_url('assets/img/galeria/galeria-07.jpg')?>" alt="">
    </div>
    <div class="media-container">
      <img src="<?= base_url('assets/img/galeria/galeria-08.jpg')?>" alt="">
    </div>
    <div class="media-container">
      <img src="<?= base_url('assets/img/galeria/galeria-09.jpg')?>" alt="">
    </div>
    <div class="media-container">
      <img src="<?= base_url('assets/img/galeria/galeria-10.jpg')?>" alt="">
    </div>
    <div class="media-container">
      <img src="<?= base_url('assets/img/galeria/galeria-11.jpg')?>" alt="">
    </div>
    <div class="media-container">
      <img src="<?= base_url('assets/img/galeria/galeria-12.jpg')?>" alt="">
    </div>
    <div class="media-container">
      <img src="<?= base_url('assets/img/galeria/galeria-13.jpg')?>" alt="">
    </div>
    <div class="media-container">
      <img src="<?= base_url('assets/img/galeria/galeria-14.jpg')?>" alt="">
    </div>
    <div class="media-container">
      <img src="<?= base_url('assets/img/galeria/galeria-15.jpg')?>" alt="">
    </div>


    <a href="<?= base_url('galeria')?>" class="ver-mas">
      <img src="<?= base_url('assets/iconos/site/ver-mas.svg')?>" alt="">
      Ver más
    </a>
  </div>
</div>


<div class="modal" style="overflow: auto;z-index: 100;">
  <button id="close">
    <img src="<?= base_url('assets/iconos/site/cruz-galeria.svg')?>" alt="">
  </button>
  <div class="cuerpo-modal" style="width: 75vw;top: 60%;position: relative">
   <!--  <a id="close" class="boton-cerrar-modal">
      <i class="fa fa-times-circle fa-2x icono" aria-hidden="true" style=""></i>
    </a> -->
    <div class="owl-carousel noticias-galeria" style="height: auto;">
     <?php foreach($noticias as $noticia){ ?>
     <div class="item" data-hash="noticia_<?=$noticia->id_noticias?>">
      <div class="inner-carousel-interno " style="padding: 20px 40px 0 40px;background-color: white;" >

        <?php if(!empty($noticia->imagenes))foreach($noticia->imagenes as $imagen){?>
        <div class="inner-carousel-item">
          <img src="<?= base_url_noticias('uploads/galeria_noticias/'.$imagen->nombre_archivo)?>" alt="" >
        </div>
        <?php } ?>
      </div>
      

      <div class="contenido-noticia" style=" background-color: white;background-color: white;margin: auto;padding: 25px 75px 30px 75px">
        <div class="parte-1">
          <p class="volanta"><?=$noticia->volanta?></p>
          <span class="fecha-noticia"><?=date("d/m/Y",strtotime($noticia->fecha_noticia))?></span>            
        </div>
        <br>
        <h3><?=$noticia->titulo?></h3>
        <br>
        <p>
          <?=$noticia->contenido?>
        </p> 
        <br>
        <br>
        <?php if(!empty($noticia->adjuntos)){ ?>
        <div>
          <div class="parte-1">
            <span ><i class="fa fa-download" aria-hidden="true"></i>  Descargas</span>
          </div>
          <ul style="list-style: none;">
            <?php foreach($noticia->adjuntos as $adjuntos ){ ?>
            <li> <a href="<?=base_url_noticias('uploads/archivos_adjuntos/'.$adjuntos->nombre_adjuntos)?>" target="_blank"><?=$adjuntos->nombre_original?></a> </li>
            <?php } ?>
          </ul>
        </div>
        <?php } ?>
        <br>
        <?php if(!empty($noticia->enlaces)){ ?>
        <div>
          <div class="parte-1">
            <span ><i class="fa fa-link" aria-hidden="true"></i>  Enlaces</span>
          </div>
          <ul style="list-style: none;">
            <?php foreach($noticia->enlaces as $enlaces ){ ?>
            <li> <a href="<?=$enlaces->nombre_enlace?>" target="_blank"><?=$enlaces->nombre_enlace?></a> </li>
            <?php } ?>
          </ul>
        </div>
        <?php } ?>
      </div>
    </div>
    <?php } ?>
  </div>
</div>

</div>



<script type="text/javascript">
  $( ".noticias .item  img" ).hover(
    function() {
      $( this ).attr('style','filter:none');
    }, function() {
      $( this ).attr('style','filter:grayscale');
    }
    );

  // $(document).ready(function(){

  //   $(".owl-one .owl-nav").removeClass('disabled');
  // });

  // $(".owl-one .owl-nav button svg").click(function(){
  //   $(".owl-one .owl-nav").removeClass('disabled');
  // });

</script>
<style type="text/css">


.modal .owl-carousel {
  width: 75vw;
  height: 60vh;
  position: relative;
}
.fecha-noticia{
  float: right;
  background-color: black;
  color: white;
  padding: 0 20px;
}
.volanta{
  display: inline-block;
  font-family: "sans-serif-italic";
}
.parte-1{
  padding-top: 15px;
  border-bottom: 1px solid black;

}
.parte-1 span{
  font-family: "sans-serif-italic" !important;
}
.boton-cerrar-modal{
  z-index: 2;
  position: absolute;
  top: -5px;
  right: -20px;
  font-size: 18px;
  /* color: #fff; */
  /* padding: 10px; */
  height: 40px;
  width: 40px;
  border-radius: 50%;
  line-height: 20px;
  background-color: white;
}
}

.contenido-noticia{
  background-color: white;
  width: 90%;
  background-color: white;
  margin: auto;
  padding: 0 75px 30px 75px;
}
.contenido-noticia ul li{
  font-family: "sans-serif-italic" !important;
}
.boton-cerrar-modal .icono{
  padding-left: 6px; 
  padding-top: 1px;
}

/*.svg-anterior{
 -moz-transform: scaleX(-1); 
 -o-transform: scaleX(-1); 
 -webkit-transform: scaleX(-1); 
 transform: scaleX(-1); 
 filter: FlipH; 
 top: calc(50% - 20px)!important;
 }*/
/* .modal .inner-carousel-interno .owl-prev, .modal .owl-carousel .inner-carousel-interno .owl-next {
  position: relative;
  top: calc(50% - 20px)!important;

  }*/
  .modal .inner-carousel-interno .owl-nav{
   position: absolute;
   /*top: calc(33% - 20px);*/
   top: 27%;
   width: 93%;
 }

 @media screen and (max-width: 768px) {
   .modal .inner-carousel-interno .owl-nav{
    display: none;
    width: 82%;
  }

  .owl-one .owl-item .item a img {
    width: 40%!important;
    margin: 0 auto!important;
  }
  .owl-one .owl-nav .owl-prev {
    left: 4%!important;
  }
  .owl-one .owl-nav .owl-next {
    left: 79%!important;
  }

}

@media screen and (max-width: 992px) {
 .modal .inner-carousel-interno .owl-nav{
   display: none; 
   width: 86%;
 }
 .owl-one{
  max-width: 690px!important;
}

.owl-one .owl-prev {
  left: 4%!important;
}
.owl-one .owl-next {
  left: 79%!important;
}

}

.modal .inner-carousel-interno .owl-next{
 /* left: 50%;
  top: 10%;
  transform: translateX(-4%);
  margin: 0;
  left: 90%;
  position: relative;*/
  position: absolute;
  top: calc(50% - 20px);
}

.modal .inner-carousel-interno .owl-next svg{
  /*position: absolute;*/
  top: calc(50% - 20px);
}

.modal .inner-carousel-interno .owl-prev{
  left: -41px;

}

.owl-next svg,.owl-prev svg{
  padding: 15px;
  fill-opacity: 0.4;
}
/*
@supports(object-fit: cover){
  .inner-carousel-item img{
    height: 100%;
    object-fit: cover;
    object-position: center center;
  }
  }*/

  .inner-carousel-interno .owl-stage {
    display: flex;
    align-items: center;
  }

  .inner-carousel-interno .caption {
    text-align: center;
  }

  .owl-one .owl-nav{
    position: absolute;
    width: 100%;
    top: calc(33%);
  }

  .owl-one .owl-item .item img{

  }

  .owl-one .owl-next{
    position: absolute!important;
    left: 103%!important;
  }
  .owl-one .owl-prev{
    position: absolute!important;
    left: -7%!important;
  }

  .owl-one .owl-item img {
    display: block;
    width: 115px!important;
  }

/*.modal .inner-carousel-interno .owl-next svg{
  left: -45px;
  }*/
/*.modal .inner-carousel-interno .owl-prev, .modal .owl-carousel .inner-carousel-interno .owl-next {
  position: absolute;
  top: calc(50% - 20px)!important;
  padding: 8px!important;
  font-size: 24px !important;
  color: #fff !important;
}
.modal .inner-carousel-interno .owl-prev img, .modal .owl-carousel .inner-carousel-interno .owl-next img {
  width: auto!important;
  height: 100%!important;
}
.modal .inner-carousel-interno .owl-prev {
  left: -30px!important;
}
.modal .inner-carousel-interno .owl-prev img {
  margin-left: 0!important;
  margin-right: auto!important;
}
.modal .inner-carousel-interno .owl-next {
  right: -30px!important;
}
.modal .inner-carousel-interno .owl-next img {
  margin-right: 0!important;
  margin-left: auto!important;
}
.modal .inner-carousel-interno .owl-next {
  top: 25%!important;
}
.modal .inner-carousel-interno .owl-prev {
  top: 25%!important;
}

section {
  display: none;
  }*/

</style>
<script type="text/javascript">
  // $('.owl-dot').click(function () {
  //   owl.trigger('to.owl.carousel', [$(this).index(), 300]);
  // });
</script>




<script type="text/javascript">
  function modalOpen(){
   $('.modal').css('display', 'flex');
 }

 $(document).ready(function(){
  cantidadNoticias = <?= $cantidadNoticias ?> ;
  if(cantidadNoticias <=5){
   $(".owl-one .owl-stage .cloned .item").css('display','none');
 }
});

</script>


<?php $this->load->view('shared/avales') ?>
