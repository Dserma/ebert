<?php
    /* Template Name: Contato */
    get_header(); the_post();
?>
  <section class="contato-interna interna xs-text-center">
    <section class="topo">
      <div class="container-fluid limit">
        <div class="row breadcrumb margin-top-30 padding-left-15">
          <a href="<?php echo get_site_url('/') ?>" class="text-yellow text-12-pt medium toupper">página inicial</a>
          <span class="padding-left-20"><img src="<?php echo get_template_directory_uri() ?>/images/separador-bread.png" alt=""></span>
          <span class="padding-left-20 text-white text-12-pt medium toupper"><?php the_title()?></span>
        </div>
        <div class="row margin-top-35 xs-margin-top-10">
          <h3 class="text-yellow text-50-pt medium"><?php the_title() ?></h3>
        </div>
        <div class="row margin-top-10">
          <h3 class="text-white text-16-pt medium toupper letter-6">qualidade há mais de 17 anos</h3>
        </div>
      </div>
    </section>

    <section class="conteudo xs-text-center xs-padding-5">
      <div class="container-fluid limit">
        <div class="row padding-top-40 padding-bottom-50">
          <div class="col-md-7 formulario padding-right-20">
            <?php echo do_shortcode('[contact-form-7 id="5" title="Contato"]'); ?>
          </div>
          <div class="col-md-5 padding-left-20">
            <div class="row margin-top-30 vertical-middle">
              <div class="col-md-2">
                <img src="<?php echo get_template_directory_uri() ?>/images/telefone-contato.png" alt="">
              </div>
              <div class="col-md-10">
                <h3 class="text-d-gray text-20-pt regular"><?php the_field( 'telefone' ) ?></h3>
              </div>
            </div>
            <div class="row margin-top-40 vertical-middle">
              <div class="col-md-2">
                <img src="<?php echo get_template_directory_uri() ?>/images/email-contato.png" alt="">
              </div>
              <div class="col-md-10">
                <h3 class="text-d-gray text-20-pt regular">E-mail - <?php the_field( 'email' ) ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


  </section>
  <?php get_footer() ?>