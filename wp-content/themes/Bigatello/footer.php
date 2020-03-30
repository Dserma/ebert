<section class="footer xs-text-center">
  <div class="container-fluid limit">
    <div class="row margin-top-40">
      <div class="col-md-2 padding-top-20">
        <div class="row">
          <div class="col-md-3 xs-horizontal-center">
            <div class="row circulo vertical-middle horizontal-center xs-vertical-middle xs-horizontal-center">
              <i class="fa fa-phone text-yellow text-18-pt"></i>
            </div>
          </div>
          <div class="col-md-9 padding-left-10">
            <div class="row">
              <h3 class="text-white text-14-pt medium toupper">Fale conosco</h3>
            </div>
            <div class="row margin-top-10">
              <h3 class="text-yellow text-18-pt medium"><?php the_field( 'telefone', 129 ) ?></h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2 padding-top-20">
        <div class="row">
          <div class="col-md-3 xs-horizontal-center">
            <div class="row circulo vertical-middle horizontal-center xs-vertical-middle xs-horizontal-center">
              <i class="fa fa-envelope text-yellow text-18-pt"></i>
            </div>
          </div>
          <div class="col-md-9 padding-left-10">
            <div class="row">
              <h3 class="text-white text-14-pt medium toupper">Fale conosco</h3>
            </div>
            <div class="row margin-top-10">
              <h3 class="text-yellow text-18-pt medium"><?php the_field( 'telefone2', 129 ) ?></h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 padding-top-20 padding-left-30 xs-padding-0 xs-padding-top-20">
        <div class="row">
          <div class="col-md-2 xs-horizontal-center">
            <div class="row circulo vertical-middle horizontal-center xs-vertical-middle xs-horizontal-center">
              <i class="fa fa-envelope text-yellow text-18-pt"></i>
            </div>
          </div>
          <div class="col-md-10">
            <div class="row">
              <h3 class="text-white text-14-pt medium toupper">envie um e-mail</h3>
            </div>
            <div class="row margin-top-10">
              <h3 class="text-yellow text-18-pt medium"><?php the_field( 'email', 129 ) ?></h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 xs-padding-top-30">
        <div class="row text-center">
          <img src="<?php echo get_template_directory_uri()?>/images/logo-footer.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="row margin-top-40" style="background-color: #363636;height: 1px"></div>
  <div class="container-fluid limit">
    <div class="row margin-top-25 margin-bottom-25">
    <?php wp_nav_menu( array('menu' => 'main',  'menu_class' => 'menu-footer text-l-gray text-18-pt medium vertical-middle horizontal-between') ); ?>
    </div>
  </div>
  <div class="row copy padding-20">
    <div class="container-fluid limit">
      <div class="row">
        <div class="col-md-6">
          <h3 class="text-yellow text-14-pt thin">&copy;-<?php echo date('Y') ?> BIGATELLO</h3>
        </div>
        <div class="col-md-6 text-right xs-text-center">
          <h3 class="text-yellow text-14-pt thin toupper inline-block">desenvolvido por</h3>
          <a href="http://www.voxdigital.com.br" target="_blank" class="text-yellow text-14-pt thin toupper">vox digital</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php wp_footer() ?>