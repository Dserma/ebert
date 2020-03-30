<div class="row post padding-bottom-30">
  <div class="row imagem" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')"></div>
  <div class="row vertical-bottom margin-top-20">
    <img src="<?php echo get_template_directory_uri() ?>/images/calendar.png" alt="">
    <label for="" class="work text-d-gray text-16-pt medium padding-left-10"><?php echo get_the_date('d/m/Y') ?> | </label>
    <img src="<?php echo get_template_directory_uri() ?>/images/tag.png" alt="" class="padding-left-10">
    <label for="" class="work text-d-gray text-16-pt medium padding-left-10 toupper"><?php $term = wp_get_post_terms(get_the_ID(), 'category')[0]; echo $term->name ?> </label>
  </div>
  <div class="row margin-top-25">
    <h3 class="text-black text-22-pt bold"><?php the_title() ?></h3>
  </div>
  <div class="row margin-top-15 work text-d-gray text-15-pt regular line-24">
    <?php echo break_text(get_the_excerpt(), 200) ?>
  </div>
  <div class="row margin-top-25">
    <a href="<?php the_permalink() ?>" class="work text-red text-13-pt semibold toupper">ver mais</a>
  </div>
</div>