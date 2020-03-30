  <?php
    /* Template Name: Blog */
    get_header(); the_post();
  ?>
  <section class="blog interna xs-text-center">
    <section class="topo">
      <div class="row padding-top-45 text-center">
        <h3 class="text-white text-70-pt extra-bold">BLOG</h3>
      </div>
      <div class="row margin-top-5 text-center">
        <h3 class="lato text-white text-25-pt regular">Fique por dentro de nossas novidades e dicas</h3>
      </div>
    </section>

    <section class="conteudo margin-top-70">
      <div class="container-fluid limit">
        <div class="row">
          <div class="col-md-9 padding-right-15">
            <?php 
              if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
              elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
              else { $paged = 1; } 
            ?>
            <?php $posts = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3,  'paged' => $paged) ) ?>
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

<?php get_footer() ?>