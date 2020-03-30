<?php 
  global $term, $c; 
  if( $c == 'null' || !isset($c) ){
    $term = wp_get_post_terms(get_the_ID(), 'segmento')[0]; 
  }
  ?>
<div class="col-md-3">
  <a href="<?php the_permalink() ?>" class="">
    <div class="row">
      <div class="col-xs-11 ingrediente vertical-middle margin-bottom-30 relative">
        <?php if( get_field('novo')[0] == 'S' ) : ?>
          <div class="row novo text-right">
            <h3 class="text-white text-14-pt bold" style="background-color: <?php the_field( 'cor', $term ) ?>">novo</h3>
          </div>
        <?php endif ?>
        <div class="row vertical-middle" style="width: 100%">
          <div class="col-md-2">
            <div class="row">
              <img src="<?php the_field( 'icone', $term  ) ?>" alt="">
            </div>
          </div>
          <div class="col-md-5">
            <div class="row text-black text-14-pt bold">
              <?php the_title() ?>
            </div>
          </div>
          <div class="col-md-5">
            <div class="row text-center texto relative padding-top-10" style="color:<?php the_field( 'cor', $term ) ?> ">
              <i class="fa fa-question-circle-o text-40-pt light ver-mais"></i>
              <div class="row conteudo work text-13-pt regular line-24" style="--bgcolor:<?php the_field( 'cor', $term ) ?>40; color: #000;">
                <?php the_field( 'texto' ) ?>
              </div>
            </div>
            <div class="row margin-top-10 relative text-center">
              <h3 class="text-14-pt extra-bold" style="color:<?php the_field( 'cor', $term ) ?>"><?php echo $term->name ?></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </a>
</div>