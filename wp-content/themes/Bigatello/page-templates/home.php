<?php
    /* Template Name: Home */
    get_header(); the_post();
?>

<section class="banner xs-gone relative">
  <div class="row lista-banners">
    <?php $banners = new WP_Query( array( 'post_type' => 'banner', 'showposts' => -1 ) ); ?>
    <?php while( $banners->have_posts() ) : $banners->the_post(); ?>
      <div class="row imagem relative" style="background-image: url('<?php the_field('imagem'); ?>')">
      <?php if( get_field('texto') != '' ): ?>
        <div class="container-fluid limit">
          <div class="col-md-6 margin-top-150">
            <div class="row texto">
              <?php the_field('texto') ?>
            </div>
            <?php if( get_field('link') != '' ): ?>
              <div class="row margin-top-50">
                <a href="<?php the_field('link') ?>" class="text-d-gray text-18-pt medium toupper button-yellow">leia mais</a>
              </div>
            <?php endif ?>
          </div>
        </div>
      <?php endif ?>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>

<?php get_footer(); ?>