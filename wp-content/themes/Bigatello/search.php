<?php 
  get_header(); 
?>
  <section class="blog interna xs-text-center">
    <section class="topo">
      <div class="row padding-top-45 text-center">
        <h3 class="text-white text-70-pt extra-bold">RESULTADOS DA BUSCA</h3>
      </div>
      <div class="row margin-top-5 text-center">
        <h3 class="lato text-white text-25-pt regular">Você buscou por: <?php echo get_query_var('s') ?></h3>
      </div>
    </section>
    <?php if( $_REQUEST['tipo'] == 0 ) : ?>
      <section class="conteudo margin-top-70">
        <div class="container-fluid limit">
          <div class="row">
            <div class="col-md-9 padding-right-15">
              <?php 
                if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
                elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
                else { $paged = 1; } 
              ?>
              <?php $posts = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 's' => $_GET['s'] ,  'paged' => $paged) ) ?>
              <?php while( $posts->have_posts() ) : $posts->the_post() ?>
                <?php get_template_part( 'parts/part', 'post' ) ?>
              <?php endwhile; ?>
              <div class="row text-black text-12-pt bold margin-top-50 padding-bottom-50">
                <?php 
                  if (function_exists("pagination")) {
                      pagination($posts->max_num_pages);
                  } 
                ?>
              </div>
            </div>
              <div class="col-lg-3 col-md-3 col-sm-12 col-12 padding-left-15">
                <?php get_template_part('parts/part', 'menu-blog') ?>
              </div>
            </div>
          </div>
      </div>
    </section>
  <?php endif; ?>
    <?php if( $_REQUEST['tipo'] == 1 ) : ?>
      <section class="conteudo margin-top-70">
        <div class="container-fluid limit">
          <div class="row">
            <div class="col-md-12 padding-right-15">
              <div class="row margin-top-50 margin-bottom-50">
                <h3 class="text-black text-24-pt bold">Ingredientes: </h3>
              </div>
              <div class="row">
                <?php $posts = new WP_Query( array( 'post_type' => 'ingrediente', 'showposts' => -1, 's' => $_GET['s']) ) ?>
                <?php if( $posts->have_posts() ) : ?>
                  <?php while( $posts->have_posts() ) : $posts->the_post() ?>
                    <?php get_template_part( 'parts/part', 'ingrediente' ) ?>
                  <?php endwhile; ?>
                <?php else: ?>
                  <div class="alert alert-danger">Nenhum ingrediente encontrado com a chave pesquisada!</div>
                <?php endif ?>
              </div>
              <div class="row margin-top-50 margin-bottom-50">
                <h3 class="text-black text-24-pt bold">Notícias: </h3>
              </div>
              <?php $posts = new WP_Query( array( 'post_type' => 'post', 'showposts' => -1, 's' => $_GET['s']) ) ?>
              <?php if( $posts->have_posts() ) : ?>
                <?php while( $posts->have_posts() ) : $posts->the_post() ?>
                  <?php get_template_part( 'parts/part', 'post' ) ?>
                <?php endwhile; ?>
              <?php else: ?>
                  <div class="alert alert-danger">Nenhuma notícia encontrada com a chave pesquisada!</div>
                <?php endif ?>
            </div>
          </div>
      </div>
  </section>
<?php endif; ?>
<?php get_footer() ?>