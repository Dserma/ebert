<?php
    get_header(); the_post();
    $segmento = wp_get_post_terms(get_the_ID(), 'segmento')[0];
?>
  <section class="page-segmentos interna xs-text-center">
    <section class="topo">
      <div class="row padding-top-45 text-center">
        <h3 class="text-white text-70-pt extra-bold">Ingredientes</h3>
      </div>
      <div class="row margin-top-5 text-center">
        <h3 class="lato text-white text-25-pt regular">Conheça melhor nossa linha de produtos</h3>
      </div>
    </section>

    <section class="conteudo margin-top-50">
      <div class="container-fluid limit">
        <div class="row">
          <div class="col-md-3">
            <?php $segmentos = get_terms( array('taxonomy' => 'segmento', 'hide_empty' => false)); ?>
            <?php foreach( $segmentos as $s ): ?>
              <div class="row item">
                <div class="row text-center"><img src="<?php echo get_template_directory_uri() ?>/images/linha-menu.png" alt=""></div>
                <div class="row">
                  <a href="<?php echo get_term_link( $s, 'segmento' )?>" class="<?php echo $segmento->slug == $s->slug ? 'active' : '' ?>" style="--bgcolor:<?php the_field( 'cor', $s ) ?>40">
                    <div class="row vertical-middle">
                      <div class="col-md-4">
                        <img src="<?php the_field( 'icone', $s ) ?>" alt="">
                      </div>
                      <div class="col-md-8">
                        <h3 class="text-20-pt extra-bold" style="color: <?php the_field( 'cor', $s ) ?>"><?php echo $s->name ?></h3>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            <?php endforeach ?>
          </div>
          <div class="col-md-9">
            <div class="row vertical-middle">
              <div class="col-md-2">
                <img src="<?php the_field( 'icone', $segmento  ) ?>" alt="">
              </div>
              <div class="col-md-10">
                <div class="row">
                  <h3 class="text-32-pt extra-bold" style="color: <?php the_field( 'cor', $segmento ) ?>"><?php the_title() ?></h3>
                </div>
              </div>
            </div>
            <div class="row margin-top-20 imagem">
              <img src="<?php the_field( 'imagem', $segmento  ) ?>" alt="">
            </div>
            <div class="row margin-top-30 work text-black text-15-pt regular line-24 margin-bottom-50">
              <?php the_content() ?>
            </div>
          </div>
        </div>
      </div>
    </section>


  </section>

<?php get_footer() ?>