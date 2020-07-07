<style type="text/css">
@media screen and (max-width: 992px){

  .bottom .column2 {
   display: block !important; 
   justify-content: space-between !important;
   align-items: center !important;
   margin-top: 15px;
 }
 .bottom .column1 {
   display: block !important; 
 }
}
</style>

<footer>
  <div class="contenedor">
    <div class="top layout" style="margin-bottom: 0px">
      <div class="columna1">
        <img src="<?= base_url('assets/iconos/site/full-logo-gris.svg')?>" alt="">
        <div class="column">
          <br>
          <div>
            <i>
              <p style="font-size: 14px;">Agustín Gómez y pie de monte</p>
              <p style="font-size: 14px;">de la Sierra Chica Rivadavia</p>
              <p style="font-size: 14px;">San Juan, Argentina</p>
              <p style="font-size: 14px;">+54 264 479-1840</p>
              <p style="font-size: 14px;">recepcion@anchipurac.com</p>

            </i>
          </div>
        </div>
      </div>
      <div class="columna2">
        <div class="column">
          <p data-target="footer-anchi" class="title">ANCHIPURAC</p>
          <div class="subtitle" id="footer-anchi">
            <a href="<?= base_url('institucional')?>"><?=lang('institucional')?></a>
            <a href="<?= base_url('institucional#objetivos')?>"><?=lang('objetivos')?></a>
            <a href="<?= base_url('institucional#equipo')?>"><?=lang('equipo')?></a>
            <a href="<?= base_url('institucional#edificio')?>"><?=lang('edificio')?></a>
            <a href="<?= base_url('institucional#investigacion')?>"><?=lang('investigacion')?></a>
            <a href="<?= base_url('institucional#complejo')?>"><?=lang('complejo-footer')?></a>
            <a href="<?= base_url('institucional#avales')?>"><?=lang('avales')?></a>
          </div>
        </div>
        <div class="column">
          <p data-target="footer-exp" class="title"><?=lang('experiencia')?></p>
          <div class="subtitle" id="footer-exp">
            <!-- <a href="#."><?=lang('informacion')?></a> -->
            <a href="<?= base_url('ejes')?>"><?=lang('ejes')?></a>
            <a href="<?= base_url('ejes#recorrido')?>"><?=lang('recorrido')?></a>
          </div>
        </div>

        <div class="column">
          <p data-target="footer-galeria" class="title"><?=lang('galeria')?></p>
          <div class="subtitle" id="footer-galeria">
            <a href="<?= base_url('galeria')?>"><?=lang('fotografias')?></a>
            <!-- <a href="#."><?=lang('videos')?></a> -->
          </div>
        </div>

        <div class="column">
          <p data-target="footer-visita" class="title"><?=lang('tu_visita')?></p>
          <div class="subtitle" id="footer-visita">
            <a href="<?= base_url('informacion')?>"><?=lang('informacion')?></a>
            <a href="<?= base_url('informacion#como-llegar')?>"><?=lang('como_llegar')?></a>
            <a href="<?= base_url('informacion#horarios')?>"><?=lang('horarios')?></a>
            <a href="<?= base_url('informacion#medios-de-pago')?>"><?=lang('medios_pago')?></a>
            <a href="<?=base_url('visitas')?>" class="ticket">
              <img src="<?= base_url('assets/iconos/site/tickets-header.svg')?>" alt="Anchipurac centro ambiental">
            </a>
          </div>
        </div>

        <div class="column">
          <p data-target="footer-contac" class="title"><?=lang('contacto')?></p>
          <div class="subtitle" id="footer-contac">
            <a href="<?= base_url('formulario')?>"><?=lang('formulario')?></a>
            <!-- <a href="#."><?=lang('consultas')?></a> -->
          </div>
        </div>

      </div>
      <div class="columna1">
      </div>
      <div class="columna2">
        <div class="column">
        </div>
        <div class="column">
        </div>

        <div class="column">
        </div>

        <div class="column">
        </div>

        <div class="column">

          <div class="bottom layout" style="border: none;padding-bottom: 5px;">

            <div class="column2">

              <div class="redes">
                <a href="https://www.facebook.com/pg/anchipurac" target="_blank"><img src="<?= base_url('assets/iconos/site/facebook.svg')?>" alt="" ></a>
                <!-- <a href="#."><img src="<?= base_url('assets/iconos/site/twitter.svg')?>" alt=""></a> -->
                <a href="https://www.instagram.com/somosanchipurac/" target="_blank"><img src="<?= base_url('assets/iconos/site/instagram.svg')?>" alt=""></a>
                <a href="https://www.youtube.com/channel/UCv5kTy7yU5SxFbRiHkOyw9Q" target="_blank"><img src="<?= base_url('assets/iconos/site/youtube.svg')?>" alt=""></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="bottom layout" style="padding-top: 20px;">
      <div class="column1">
        <img src="<?= base_url('assets/iconos/site/gobierno.svg')?>" alt="">      
      </div>
      <div class="column2" style="margin-left: auto">
        <div>
          <p style="font-size: 12px;text-align: right;">Centro Cívico</p>
          <p style="font-size: 12px;text-align: right;">Av. Libertador 1234</p>
          <p style="font-size: 12px;text-align: right;">C1246CLA San Juan, Argentina</p>
          <p style="font-size: 12px;text-align: right;">+54 264 4306657</p>
        </div>

        <!-- <div class="redes">
          <a href="#."><img src="<?= base_url('assets/iconos/site/facebook.svg')?>" alt=""></a>
          <a href="#."><img src="<?= base_url('assets/iconos/site/twitter.svg')?>" alt=""></a>
          <a href="#."><img src="<?= base_url('assets/iconos/site/instagram.svg')?>" alt=""></a>
          <a href="#."><img src="<?= base_url('assets/iconos/site/youtube.svg')?>" alt=""></a>
        </div> -->
      </div>
    </div>
  </div>
</footer>