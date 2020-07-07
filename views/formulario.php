
<div class="contenedor">
  <div class="img-hero">
    <div class="owl-carousel hero">
      <div class="item">
        <img src="<?= base_url('assets/img/contacto/contacto-01.jpg')?>" alt="">
      </div>
      <div class="item">
        <img src="<?= base_url('assets/img/contacto/contacto-02.jpg')?>" alt="">
      </div>
      <div class="item">
        <img src="<?= base_url('assets/img/contacto/contacto-03.jpg')?>" alt="">
      </div>
    </div>    
  </div>
</div>

<div class="contenedor">
  <div class="title-section">
    <p class="subtitle"><?=lang('form_subtitle');?></p>
    <p class="title"><?=lang('form_title');?></p>
  </div>

  <div class="formulario">
    <form id="frmContacto">

      <div class="row dos-columnas">
        <div class="wrapper">
          <label for="nombre"><?=lang('form_nombre');?></label>
          <input type="text" placeholder="<?=lang('form_nombre_ph');?>" id="nombre" name="nombre">
        </div>
        <div class="wrapper">
          <label for="apellido"><?=lang('form_apellido');?></label>
          <input type="text" placeholder="<?=lang('form_apellido_ph');?>" id="apellido" name="apellido">
        </div>
      </div>

      <div class="row tres-columnas">
        <div class="wrapper">
          <label for="dni"><?=lang('form_dni');?></label>
          <input type="number" placeholder="<?=lang('form_dni_ph');?>" id="dni" name="dni">
        </div>
        <div class="wrapper">
          <label for="nacion"><?=lang('form_nacionalidad');?></label>
          <input type="text" placeholder="<?=lang('form_nacionalidad_ph');?>" id="nacion" name="nacion">
        </div>
        <div class="wrapper">
          <label for="ocupacion"><?=lang('form_ocupacion');?></label>
          <input type="text" placeholder="<?=lang('form_ocupacion_ph');?>" id="ocupacion" name="ocupacion">
        </div>
      </div>  

      <div class="row una-columna">
        <div class="wrapper">
          <label for="establec"><?=lang('form_establecimiento');?></label>
          <input type="text" placeholder="<?=lang('form_establecimiento_ph');?>" id="establec" name="establec">
        </div>
      </div>   

      <div class="row tres-columnas">
        <div class="wrapper">
          <label for="tel_pers"><?=lang('form_tel');?></label>
          <input type="text" placeholder="<?=lang('form_tel_ph');?>" id="tel_pers" name="tel_pers">
        </div>
        <div class="wrapper">
          <label for="tel_cont"><?=lang('form_tel_cont');?></label>
          <input type="text" placeholder="<?=lang('form_tel_cont_ph');?>" id="tel_cont" name="tel_cont">
        </div>
        <div class="wrapper">
          <label for="email"><?=lang('form_email');?></label>
          <input type="email" placeholder="<?=lang('form_email_ph');?>" id="email" name="email">
        </div>
      </div>

      <div class="row una-columna">
        <div class="wrapper">
          <label for="consulta"><?=lang('form_consulta');?></label>
          <textarea placeholder="<?=lang('form_consulta_ph');?>" id="consulta" name="consulta"></textarea>
        </div>
      </div>

      <button type="submit" id="btnEnviar" style="background-color: #ff000000;">
        <object type="image/svg+xml" data="buttonA.svg">
          <img src="<?=base_url('assets/img/formulario/btn_enviar.svg')?>"/>
        </object>
      </button>

    </form>  
  </div>

</div>