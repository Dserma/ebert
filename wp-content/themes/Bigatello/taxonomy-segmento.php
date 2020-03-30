<?php
    get_header();
    $segmento = get_queried_object();
?>
  <section class="page-segmentos interna xs-text-center">
    <section class="topo">
      <div class="row padding-top-45 text-center">
        <h3 class="text-white text-70-pt extra-bold">Segmentos</h3>
      </div>
      <div class="row margin-top-5 text-center">
        <h3 class="lato text-white text-25-pt regular">Saiba mais onde aplica-se nossos produtos</h3>
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
                  <h3 class="text-32-pt extra-bold" style="color: <?php the_field( 'cor', $segmento ) ?>"><?php echo $segmento->name ?></h3>
                </div>
              </div>
            </div>
            <div class="row margin-top-20 imagem">
              <img src="<?php the_field( 'imagem', $segmento  ) ?>" alt="">
            </div>
            <div class="row margin-top-30 work text-black text-15-pt regular line-24">
              <?php the_field( 'texto', $segmento ) ?>
            </div>
            <div class="row margin-top-50 lista-ingredientes">
              <?php $ingredientes = new WP_Query( array( 'post_type' => 'ingrediente', 'segmento' => $segmento->slug, 'showposts' => -1, 'orderby' => 'title', 'order' => 'ASC') ); ?>
              <?php while( $ingredientes->have_posts() ) : $ingredientes->the_post(); ?>
                <div class="col-md-4">
                  <a href="<?php the_permalink() ?>" class="">
                    <div class="row">
                      <div class="col-xs-11 ingrediente vertical-middle margin-bottom-30 relative center-block">
                        <?php if( get_field('novo')[0] == 'S' ) : ?>
                          <div class="row novo text-right">
                            <h3 class="text-white text-14-pt bold" style="background-color: <?php the_field( 'cor', $segmento ) ?>">novo</h3>
                          </div>
                        <?php endif ?>
                        <div class="row vertical-middle" style="width: 100%">
                          <div class="col-md-2">
                            <div class="row">
                              <img src="<?php the_field( 'icone', $segmento  ) ?>" alt="">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row text-black text-14-pt bold">
                              <?php the_title() ?>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row text-center texto relative padding-top-10" style="color:<?php the_field( 'cor', $segmento ) ?> ">
                              <i class="fa fa-question-circle-o text-40-pt light ver-mais"></i>
                              <div class="row conteudo work text-13-pt regular line-24" style="--bgcolor:<?php the_field( 'cor', $segmento ) ?>40; color: #000;">
                                <?php the_field( 'texto' ) ?>
                              </div>
                            </div>
                            <div class="row margin-top-10 text-center">
                              <h3 class="text-14-pt extra-bold" style="color:<?php the_field( 'cor', $segmento ) ?>"><?php echo $segmento->name ?></h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              <?php endwhile ?>
            </div>
          </div>
        </div>
      </div>
    </section>


  </section>

<?php get_footer() ?>