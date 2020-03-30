<?php
    /* Template Name: Sobre */
    get_header(); the_post();
?>
  <section class="sobre interna xs-text-center">
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

    <section class="conteudo xs-text-center">
      <div class="row conheca-interna padding-top-65 padding-bottom-150 xs-padding-0 xs-padding-top-30">
        <div class="container-fluid limit">
          <div class="row">
            <div class="col-md-6 padding-right-60 xs-padding-0">
              <div class="row">
                <h3 class="text-l-gray text-18-pt toupper letter-6">conheça nossa história</h3>
              </div>
              <div class="row margin-top-15 texto text-d-gray line-20 text-40-pt light">
                <?php the_field('texto') ?>
              </div>
              <div class="row margin-top-15">
                <img src="<?php echo get_template_directory_uri() ?>/images/traco-yellow.png" alt="">
              </div>
              <div class="row margin-top-20 texto text-black line-24 text-18-pt regular">
                <?php the_field('conteudo') ?>
              </div>
            </div>
            <div class="col-md-6 padding-left-60 xs-padding-0">
              <div class="row imagem" style="background-image: url('<?php the_field('imagem') ?>')"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mvv padding-bottom-70">
        <div class="container-fluid limit">
          <div class="row" style="background-color: #f2e600; height: 3px;"></div>
          <div class="row margin-top-80">
            <div class="col-md-6 padding-right-25 xs-padding-0">
              <div class="row">
                <h3 class="text-d-gray text-40-pt bold toupper">missão</h3>
              </div>
              <div class="row margin-top-15 text-gray text-18-pt regular line-28">
                <?php the_field( 'missao' ) ?>
              </div>
            </div>
            <div class="col-md-6 padding-left-25 xs-padding-0 xs-padding-top-30">
              <div class="row">
                <h3 class="text-d-gray text-40-pt bold toupper">visão</h3>
              </div>
              <div class="row margin-top-15 text-gray text-18-pt regular line-28">
                <?php the_field( 'visao' ) ?>
              </div>
            </div>
          </div>
          <div class="row margin-top-45">
            <div class="col-md-6 padding-right-25 xs-padding-0">
              <div class="row">
                <h3 class="text-d-gray text-40-pt bold toupper">valores</h3>
              </div>
              <div class="row margin-top-15 text-gray text-18-pt regular line-28">
                <?php the_field( 'valores' ) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


  </section>
  <?php get_footer() ?>