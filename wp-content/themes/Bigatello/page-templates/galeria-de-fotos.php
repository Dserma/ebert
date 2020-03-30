<?php
  /* Template Name: Galeria de Fotos */
    get_header(); the_post();
?>
  <section class="single-servico interna xs-text-center">
    <section class="topo">
      <div class="container-fluid limit">
        <div class="row breadcrumb margin-top-30 padding-left-15">
          <a href="<?php echo get_site_url('/') ?>" class="text-yellow text-12-pt medium toupper">página inicial</a>
          <span class="padding-left-20"><img src="<?php echo get_template_directory_uri() ?>/images/separador-bread.png" alt=""></span>
          <a href="<?php the_permalink(15) ?>" class="text-yellow text-12-pt medium toupper">serviços</a>
          <span class="padding-left-20"><img src="<?php echo get_template_directory_uri() ?>/images/separador-bread.png" alt=""></span>
          <span class="padding-left-20 text-white text-12-pt medium toupper"><?php the_title()?></span>
        </div>
        <div class="row margin-top-35 xs-margin-top-10">
          <h3 class="text-yellow text-50-pt medium"><?php the_title() ?></h3>
        </div>
        <div class="row margin-top-10">
          <h3 class="text-white text-16-pt medium toupper letter-6">Detalhes da Galeria</h3>
        </div>
      </div>
    </section>

    <section class="conteudo xs-text-center">
      <div class="row conteudo-interna xs-padding-top-30">
        <div class="container-fluid limit padding-bottom-200">
          <div class="row">
            <div class="col-md-7 padding-top-30 padding-right-30">
              <div class="row margin-top-20 texto text-gray line-24 text-16-pt light">
                <?php the_field('conteudo') ?>
              </div>
              <div class="row margin-top-30 text-center">
                <img src="<?php the_field( 'imagem' ) ?>" alt="">
              </div>
            </div>
            <div class="col-md-5 padding-left-30 relative">
              <div class="row formulario padding-bottom-80">
                <div class="row margin-top-50 text-center">
                  <h3 class="text-d-gray text-40-pt light">Entre em contato</h3>
                </div>
                <div class="row text-center">
                  <h3 class="text-black text-18-pt regular">Preencha o formulário abaixo</h3>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="230" title="Serviços"]') ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row padding-bottom-150">
        <div class="container-fluid limit">
          <div class="row margin-top-200 galeria">
            <?php foreach( get_field('galeria') as $g ):  ?>
              <div class="col-md-3 margin-bottom-30">
                <div class="row">
                  <a href="<?php echo $g['url'] ?>" class="fancybox" rel="galeria">
                    <div class="col-md-11 center-block item-galeria" style="background-image: url('<?php echo $g['url'] ?>')"></div>
                  </a>
                </div>
              </div>
            <?php  endforeach ?>
          </div>
        </div>
      </div>
    </section>


  </section>
  <?php get_footer() ?>