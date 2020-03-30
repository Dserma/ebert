<div class="col-md-4 margin-bottom-50">
  <div class="row">
    <div class="col-xs-11 servico center-block">
      <div class="row imagem" style="background-image: url('<?php the_field('imagem') ?>')"></div>
      <div class="row conteudo">
        <div class="row margin-top-30 text-center">
          <h3 class="text-d-gray text-20-pt medi um"><?php the_title(); ?></h3>
        </div>
        <div class="row text-gray text-16-pt light line-24 margin-top-5 padding-left-40 padding-right-40 text-center">
          <?php echo break_text(get_field( 'resumo' ), 100) ?>
        </div>
        <div class="row margin-top-40 text-center">
          <a href="<?php the_permalink() ?>" class="text-d-gray text-18-pt medium toupper button-yellow">leia mais</a>
        </div>
      </div>
    </div>
  </div>
</div>