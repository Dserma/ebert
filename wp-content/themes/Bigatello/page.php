<?php get_header(); ?>
<section class="single-servico interna xs-text-center">
    <section class="topo">
      <div class="container-fluid limit">
        <div class="row breadcrumb margin-top-30 padding-left-15">
          <a href="<?php echo get_site_url('/') ?>" class="text-yellow text-12-pt medium toupper">página inicial</a>
          <span class="padding-left-20"><img src="<?php echo get_template_directory_uri() ?>/images/separador-bread.png" alt=""></span>
          <span class="padding-left-20 text-white text-12-pt medium toupper"><?php the_title()?></span>
        </div>
        <div class="row margin-top-35">
          <h3 class="text-yellow text-50-pt medium"><?php the_title() ?></h3>
        </div>
        <div class="row margin-top-10">
          <h3 class="text-white text-16-pt medium toupper letter-6">contato</h3>
        </div>
      </div>
    </section>
  
    <section class="conteudo">
      <div class="row conteudo-interna padding-top-10 padding-bottom-50">
        <div class="container-fluid limit">
          <div class="row text-center text-gray line-24 text-16-pt light">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
    