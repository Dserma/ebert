  <div class="row busca margin-top-50">
  <form action="<?php echo get_site_url('/') ?>" class="form-busca">
      <div class="row">
        <input type="hidden" name="tipo" value="0">
        <input type="search" name="s" class="form-control" placeholder="procurar">
      </div>
    </form>
  </div>
  <div class="row margin-top-50">
    <h3 class="text-black text-15-pt bold toupper">Categorias</h3>
  </div>
  <div class="row margin-top-20">
    <img src="<?php echo get_template_directory_uri() ?>/images/linha-blog.png" alt="">
  </div>
  <ul class="categorias work text-14-pt regular margin-top-30" style="color: #fd9b9e;">
    <?php wp_list_categories( array(
      'orderby'    => 'name',
      'show_count' => true,
      'exclude'    => array(1),
      'hide_empty' => false,
      'title_li'      => ''
      ) ); 
    ?>
  </ul>
  <?php $slug = get_query_var('pagename'); ?>
  <?php if( $slug != 'blog'): ?>
    <div class="row margin-top-100">
      <h3 class="text-black text-15-pt bold toupper">Posts Recentes</h3>
    </div>
    <div class="row margin-top-20">
      <img src="<?php echo get_template_directory_uri() ?>/images/linha-blog.png" alt="">
    </div>
    <div class="row margin-top-40">
      <?php $recentes = new WP_Query( array( 'post_type' => 'post', 'showposts' => 3) ); ?>
      <?php while( $recentes->have_posts() ) : $recentes->the_post(); ?>
        <div class="row recente margin-bottom-30">
          <a href="<?php the_permalink() ?>">
            <div class="col-md-3 imagem" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');"></div>
            <div class="col-md-9 padding-left-20">
              <div class="row margin-top-10">
                <h3 class="text-black text-14-pt bold"><?php the_title(); ?></h3>
              </div>
              <div class="row text-right">
                <h3 class="work text-d-gray text-14-pt regular"><?php echo get_the_date('d/m/Y') ?></h3>
              </div>
            </div>
          </a>
        </div>
      <?php endwhile ?>
    </div>
  <?php endif ?>
  <div class="row margin-top-45 conheca padding-50" style="background-image: url('<?php the_field('imagem-banner', 228) ?>')">
    <div class="row work text-white text-20-pt semibold toupper">
    <?php the_field('texto-banner', 228) ?>
    </div>
    <div class="row margin-top-50 text-center">
      <a href="<?php the_field('link-banner', 228) ?>" target="_blank" class="work text-white text-13-pt semibold toupper button-black">saiba mais</a>
    </div>
  </div>
  