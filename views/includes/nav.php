<header>
  <div class="contenedor">
    <a href="<?= base_url('home')?>" class="logo">
      <img src="<?= base_url('assets/iconos/site/full-logo.svg')?>" alt="Anchipurac centro ambiental">
    </a>

    <div class="btns-right">
      <button id="btn-menu">
        <span class="icon-btn-menu"></span>
        <span class="icon-cross"></span>
        <?=lang('titulo_menu')?>
      </button>
      <!-- <a href="#." class="entradas">
        <img src="<?= base_url('assets/iconos/site/tickets-header.svg')?>" alt="Anchipurac centro ambiental">
      </a> -->
      
      <!-- <div class="lang-btns">
        <?php if ($this->session->userdata('site_lang') == 'spanish') { ?>
            <a href="<?php echo base_url('LanguageSwitcher/switchLang/spanish');?>" class="active">
              <img src="<?= base_url('assets/iconos/site/es.svg')?>" alt="">
            </a>
            <a href="<?php echo base_url('LanguageSwitcher/switchLang/english');?>">
              <img src="<?= base_url('assets/iconos/site/en-byn.svg')?>" alt="">
            </a>
        <?php } else { ?>
            <a href="<?php echo base_url('LanguageSwitcher/switchLang/spanish');?>">
              <img src="<?= base_url('assets/iconos/site/es-byn.svg')?>" alt="">
            </a>
            <a href="<?php echo base_url('LanguageSwitcher/switchLang/english');?>" class="active">
              <img src="<?= base_url('assets/iconos/site/en.svg')?>" alt="">
            </a>
        <?php } ?>
      </div> -->
    </div>
  </div>
</header>

<nav>
  <div class="contenedor">
    <div class="grid-nav">
      <div class="column">
        <p data-target="anchi" class="title">ANCHIPURAC</p>
        <div id="anchi" class="subtitle">
          <a href="<?= base_url('institucional') ?>"><?=lang('institucional')?></a>
          <a href="<?= base_url('institucional#objetivos') ?>"><?=lang('objetivos')?></a>
          <!-- <a href="<?= base_url('home#vison-mision-valores') ?>"><?=lang('mision')?></a> -->
          <!-- <a href="<?= base_url('home#vison-mision-valores') ?>"><?=lang('vision')?></a> -->
          <!-- <a href="<?= base_url('home#vison-mision-valores') ?>"><?=lang('valores')?></a> -->
          <a href="<?= base_url('institucional#equipo') ?>"><?=lang('equipo')?></a>
          <a href="<?= base_url('institucional#edificio') ?>"><?=lang('edificio')?></a>
          <a href="<?= base_url('institucional#investigacion') ?>"><?=lang('investigacion')?></a>
          <a href="<?= base_url('institucional#complejo') ?>"><?=lang('complejo')?></a>
          <a href="<?= base_url('institucional#avales') ?>"><?=lang('avales')?></a>
        </div>
      </div>

      <div class="column">
        <p data-target="expe" class="title"><?=lang('experiencia')?></p>
        <div id="expe" class="subtitle">
          <!-- <a href="#.">Información</a> -->
          <a href="<?= base_url('ejes') ?>"><?=lang('ejes')?></a>
          <a href="<?= base_url('ejes#recorrido-interior') ?>"><?=lang('recorrido-interior')?></a>
          <a href="<?= base_url('ejes#recorrido-exterior') ?>"><?=lang('recorrido-exterior')?></a>
        </div>
      </div>

      <div class="column">
        <p data-target="gale" class="title"><?=lang('galeria')?></p>
        <div id="gale" class="subtitle">
          <a href="<?= base_url('galeria') ?>"><?=lang('fotografias')?></a>
          <!-- <a href="<?= base_url('galeria') ?>"><?=lang('videos')?></a> -->
        </div>
      </div>

      <div class="column">
        <p data-target="visit" class="title"><?=lang('tu_visita')?></p>
        <div id="visit" class="subtitle">
          <a href="<?= base_url('informacion') ?>"><?=lang('informacion')?></a>
          <a href="<?= base_url('informacion#como-llegar') ?>"><?=lang('como_llegar')?></a>
          <a href="<?= base_url('informacion#horarios') ?>"><?=lang('horarios')?></a>

          <!-- class="mb" -->

          <!-- <a href="<?= base_url('informacion') ?>"><?=lang('ubicacion')?></a> -->
          <!-- <a href="<?= base_url('informacion') ?>"><?=lang('institucional')?></a> -->
          <a href="<?= base_url('informacion#medios-de-pago') ?>"><?=lang('medios_pago')?></a>
          <a href="<?=base_url('visitas')?>" class="img"><img src="<?= base_url('assets/iconos/site/tickets-header.svg')?>" alt="Anchipurac centro ambiental"></a>
        </div>
      </div>

      <div class="column">
        <p data-target="contac" class="title"><?=lang('contacto')?></p>
        <div id="contac" class="subtitle">
          <a href="<?= base_url('formulario') ?>"><?=lang('formulario')?></a>
          <!-- <a href="#."><?=lang('consultas')?></a> -->
        </div>
      </div>

      <a href="#." class="img-mobile"><img src="<?= base_url('assets/iconos/site/tickets-header.svg')?>" alt="Anchipurac centro ambiental"></a>

    
    </div>  
  </div>
</nav>