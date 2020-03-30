<?php
    /* Template Name: Nossa Frota */
    get_header(); the_post();
?>
  <section class="nossa-frota interna xs-text-center">
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
      <div class="row frota-interna padding-top-65 padding-bottom-150">
        <div class="container-fluid limit">
          <div class="row">
            <div class="col-md-6 padding-right-60">
              <div class="row">
                <h3 class="text-l-gray text-18-pt toupper letter-6">conheça nossa frota</h3>
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
            <div class="col-md-6 padding-left-60">
              <div class="row imagem" style="background-image: url('<?php the_field('imagem') ?>')"></div>
            </div>
          </div>
          <div class="row margin-top-85 galeria">
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