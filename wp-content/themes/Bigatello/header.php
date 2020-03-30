<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <?php wp_head(); ?>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"  crossorigin="anonymous" />
        <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/commom.css" rel="stylesheet"/>
        <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/fancybox.css" rel="stylesheet"/>
        <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/slick.css" rel="stylesheet"/>
        <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/slick-theme.css" rel="stylesheet"/>
        <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/sweetalert.css" rel="stylesheet"/>
        <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css" rel="stylesheet"/>
        <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/responsive.css" rel="stylesheet"/>
        <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/animate.css" rel="stylesheet"/>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/fancybox.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/sweetalert.min.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/slick.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/mask.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/site.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/wow.js"></script>
        <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
        <![endif]-->
    </head>
    <body <?php body_class() ?>>
  <section class="header xs-gone">
    <div class="container-fluid limit header-cima">
      <div class="row">
        <div class="col-md-3">
          <div class="row margin-top-25 logo"> 
            <?php the_custom_logo(); ?>
          </div>
        </div>
        <div class="col-md-9 faixa-amarela padding-left-65 padding-top-55 relative">
          <div class="row">
            <div class="col-md-3">
              <div class="row">
                <div class="col-md-3">
                  <div class="row circulo vertical-middle horizontal-center">
                    <i class="fa fa-phone text-black text-20-pt"></i>
                  </div>
                </div>
                <div class="col-md-9 padding-left-10">
                  <div class="row">
                    <h3 class="text-black text-14-pt medium toupper">Fale conosco</h3>
                  </div>
                  <div class="row margin-top-10">
                    <h3 class="text-black text-18-pt medium"><?php the_field( 'telefone', 129 ) ?></h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="row">
                <div class="col-md-3">
                  <div class="row circulo vertical-middle horizontal-center">
                    <i class="fa fa-envelope text-black text-20-pt"></i>
                  </div> 
                </div>
                <div class="col-md-9 padding-left-10">
                  <div class="row">
                    <h3 class="text-black text-14-pt medium toupper">Fale conosco</h3>
                  </div>
                  <div class="row margin-top-10">
                    <h3 class="text-black text-18-pt medium"><?php the_field( 'telefone2', 129 ) ?></h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="row">
                <div class="col-md-2">
                  <div class="row circulo vertical-middle horizontal-center">
                    <i class="fa fa-envelope text-black text-20-pt"></i>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="row">
                    <h3 class="text-black text-14-pt medium toupper">envie um e-mail</h3>
                  </div>
                  <div class="row margin-top-10">
                    <h3 class="text-black text-18-pt medium"><?php the_field( 'email', 129 ) ?></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row header-baixo">
      <div class="container-fluid limit">
        <div class="row padding-top-10 margin-bottom-10">
          <?php wp_nav_menu( array('menu' => 'main',  'menu_class' => 'menu text-gray text-20-pt medium vertical-middle horizontal-between') ); ?>
        </div>
      </div>
    </div>
  </section>
