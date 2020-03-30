<?php
    /* Template Name: Servicos */
    get_header(); the_post();
?>
  <section class="servicos-listagem interna xs-text-center">
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

    <section class="conteudo">
      <div class="row servicos-interna padding-top-65 padding-bottom-150">
        <div class="container-fluid limit">
          <div class="row">
            <?php 
              if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); } 
              elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
              else { $paged = 1; }
            ?>
            <?php $items = new WP_Query( array( 'post_type' => 'servico', 'posts_per_page' => 6, 'paged' => $paged ) ); ?>
            <?php while( $items->have_posts() ) : $items->the_post(); ?>
              <?php get_template_part('parts/part', 'servico'); ?>
            <?php endwhile; ?>
          </div>
          <div class="row margin-top-60 horizontal-center text-20-pt medium text-d-gray">
            <?php pagination($items->max_num_pages) ?>
          </div>
        </div>
      </div>
    </section>


  </section>
  <?php get_footer() ?>