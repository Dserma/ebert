<?php 
  get_header(); the_post();
?>
<section class="blog single interna xs-text-center">
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
          <div class="row vertical-bottom margin-top-20">
            <img src="<?php echo get_template_directory_uri() ?>/images/calendar.png" alt="">
            <label for="" class="work text-d-gray text-16-pt medium padding-left-10"><?php echo get_the_date('d/m/Y') ?> | </label>
            <img src="<?php echo get_template_directory_uri() ?>/images/tag.png" alt="" class="padding-left-10">
            <label for="" class="work text-d-gray text-16-pt medium padding-left-10 toupper"><?php $term = wp_get_post_terms(get_the_ID(), 'category')[0]; echo $term->name ?> </label>
          </div>
          <div class="row margin-top-25">
            <h3 class="text-black text-22-pt bold"><?php the_title() ?></h3>
          </div>
          <div class="row imagem margin-top-25" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')"></div>
          <div class="row margin-top-45 work text-black text-15-pt regular line-24">
            <?php the_content() ?>
          </div>
          <div class="row margin-top-50 tags padding-bottom-50">
            <?php $tags = wp_get_post_tags($post->ID); ?>
            <?php foreach( $tags as $t ) : ?>
              <a href="<?php echo get_tag_link($t) ?>" class="text-black text-12-pt semibold toupper inline-block"><?php echo $t->name; ?></a>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-12 padding-left-15">
          <?php get_template_part('parts/part', 'menu-blog') ?>
        </div>
      </div>
    </div>
  </section>

  </section>
<?php get_footer() ?>