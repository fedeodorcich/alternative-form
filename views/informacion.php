<div class="contenedor">
  <div class="img-hero">
    <div class="owl-carousel hero">
      <div class="item">
        <img src="<?= base_url('assets/img/informacion/informacion-01.jpg')?>" alt="">
      </div>
      <div class="item">
        <img src="<?= base_url('assets/img/informacion/informacion-02.jpg')?>" alt="">
      </div>
      <div class="item">
        <img src="<?= base_url('assets/img/informacion/informacion-03.jpg')?>" alt="">
      </div>
    </div>
  </div>
</div>

<div class="contenedor">
  <div class="title-section animated fadeIn wow">
    <p class="subtitle"><?=lang('info_subtitle');?></p>
    <p class="title"><?=lang('info_title');?></p>
  </div>

  <p class="border-text animated fadeIn wow"><?=lang('info_text01');?></p>
  <p class="border-text animated fadeIn wow"><?=lang('info_text02');?></p>
  <!-- <p class="border-text"><?=lang('info_text03');?></p> -->
  <p class="border-text animated fadeIn wow"><?=lang('info_text04');?></p>
  <p class="border-text animated fadeIn wow"><?=lang('info_text05');?></p>
  <p class="border-text animated fadeIn wow"><?=lang('info_text06');?></p>
  <p class="border-text animated fadeIn wow"><?=lang('info_text07');?></p>
  <p class="border-text animated fadeIn wow"><?=lang('info_text08');?></p>

</div>

<div class="contenedor" id="como-llegar">
  <div class="title-section animated fadeIn wow">
    <p class="subtitle"><?=lang('como_llegar_subtitle');?></p>
    <p class="title"><?=lang('como_llegar_title');?></p>
  </div>
  <p class="normal-text animated fadeIn wow"><?=lang('como_llegar_text');?></p>
</div>

<div class="contenedor" id="mapas-contenedor">
  <div class="img-hero contenedor-mapas animated fadeIn wow">

    <div class="mapa-iframe">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7061.621823317117!2d-68.6584853784056!3d-31.60444135636017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9681388548501aa3%3A0xdf05619894f50b22!2sCentro+Ambiental+Anchipurac!5e1!3m2!1ses-419!2sar!4v1559871588503!5m2!1ses-419!2sar" width="100%" height="560" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

  </div>

  <div class="grid-tres-columnas">
    <div class="column">
      <p class="normal-text animated fadeIn wow mb-0"><strong><?=lang('como_llegar_auto');?></strong></p>
      <p class="normal-text animated fadeIn wow"><?=lang('como_llegar_auto_text');?></p>

      <p class="normal-text animated fadeIn wow mb-0"><strong><?=lang('como_llegar_auto_conector');?></strong></p>
      <p class="normal-text animated fadeIn wow mb-0"><?=lang('como_llegar_auto_conector_text');?></p>
      <p class="normal-text animated fadeIn wow"><a class="btn-ver-mapa" href="#conector"><?=lang('como_llegar_auto_conector_cta');?></a></p>

      <p class="normal-text animated fadeIn wow mb-0"><strong><?=lang('como_llegar_auto_meglioli');?></strong></p>
      <p class="normal-text animated fadeIn wow mb-0"><?=lang('como_llegar_auto_meglioli_text');?></p>
      <p class="normal-text animated fadeIn wow"><a class="btn-ver-mapa" href="#meglioli"><?=lang('como_llegar_auto_meglioli_cta');?></a></p>

      <p class="normal-text animated fadeIn wow mb-0"><strong><?=lang('como_llegar_auto_moron');?></strong></p>
      <p class="normal-text animated fadeIn wow mb-0"><?=lang('como_llegar_auto_moron_text');?></p>
      <p class="normal-text animated fadeIn wow"><a class="btn-ver-mapa" href="#moron"><?=lang('como_llegar_auto_moron_cta');?></a></p>
    </div>

    <div class="column">
      <p class="normal-text animated fadeIn wow mb-0"><strong><?=lang('como_llegar_bici');?></strong></p>
      <p class="normal-text animated fadeIn wow"><?=lang('como_llegar_bici_text');?></p>
      <p class="normal-text animated fadeIn wow"><a class="btn-ver-mapa" href="#bici"><?=lang('como_llegar_bici_cta');?></a></p>
    </div>

    <div class="column">
      <p class="normal-text animated fadeIn wow mb-0"><strong><?=lang('como_llegar_mtb');?></strong></p>
      <p class="normal-text animated fadeIn wow"><?=lang('como_llegar_mtb_text');?></p>
      <p class="normal-text animated fadeIn wow"><a class="btn-ver-mapa" href="#mtb"><?=lang('como_llegar_mtb_cta');?></a></p>
    </div>
  </div>
</div>

<div class="contenedor" id="horarios">
  <div class="title-section">
    <p class="subtitle"><?=lang('date_subtitle');?></p>
    <p class="title"><?=lang('date_title');?></p>
  </div>

  <!--p class="normal-text mb-0"><?=lang('date_text01');?></p-->
  <p class="normal-text mb-0"><?=lang('date_text02');?></p>
  <!--p class="normal-text"><?=lang('date_text03');?></p-->
</div>

<div class="contenedor">
  <div class="title-section">
    <p class="subtitle"><?=lang('tickets_subtitle');?></p>
    <p class="title"><?=lang('tickets_title');?></p>
  </div>

  <p class="normal-text"><?=lang('tickets_text');?></p>
  <p class="normal-text"><a href="<?=base_url('visitas')?>"><?=lang('tickets_cta');?></a></p>
</div>

<div class="contenedor" id="medios-de-pago">
  <div class="title-section">
    <p class="subtitle"><?=lang('medios_subtitle');?></p>
    <p class="title"><?=lang('medios_title');?></p>
  </div>
</div>