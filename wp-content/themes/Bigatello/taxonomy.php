<?php
    get_header();
  ?>
<section class="informativos-page interna">
  <div class="container-fluid limit">
    <div class="row margin-top-90 text-center">
      <h3 class="text-l-blue text-24-pt bold toupper relative titulo inline-block">
        informativos - <?php $title = get_the_archive_title(); echo end(explode(':', $title)); ?>
      </h3>
    </div>
    <div class="row margin-top-40">
      <div class="col-md-3">
        <div class="row head">
          <h3 class="text-black text-24-pt bold">Local</h3>
        </div>
        <ul class="menu padding-top-20 text-gray text-16-pt regular">
          <?php $termos =  get_terms( array( 'taxonomy' => 'local', 'hide_empty' => false )); ?>
          <?php foreach( $termos as $t ) : ?>
            <li class="block <?php if( get_queried_object()->slug == $t->slug) : ?> current-menu-item <?php endif ?>"><a href="<?php echo get_term_link($t) ?>"><?php echo $t->name ?></a></li>
          <?php endforeach ?>
        </ul>
      </div>
      <div class="col-md-9">
        <div class="row lista-informativos">
          <?php 
          if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
          elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
          else { $paged = 1; } 
        ?>
          <?php while( have_posts() ) : the_post(); ?>
          <div class="col-md-4 padding-5">
            <div class="row informativo-single padding-15">
              <div class="row">
                <h3 class="text-black text-18-pt bold">
                  <?php the_title(); ?>
                </h3>
              </div>
              <div class="row margin-top-15 vertical-middle">
                <a href="<?php the_field('arquivo') ?>" class="vertical-middle" target="_blank">
                  <img src="<?php echo get_template_directory_uri() ?>/images/informativo.png" alt="">
                  <span class="text-red text-18-pt regular padding-left-10">Clique aqui</span>
                </a>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
        <div class="row margin-top-50 horizontal-center padding-bottom-50">
          <?php 
          if (function_exists("pagination")) {
            pagination($wp_query->max_num_pages);
          } 
        ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer() ?>