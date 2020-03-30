<?php get_header(); ?>
<section class="noticias interna">
    <section class="topo relative">
        <div class="container-fluid limit">
            <div class="row margin-top-20 text-center">
                <a href="<?php echo get_site_url('/') ?>" class="text-black text-14-pt regular inline-block">Início</a>
                <h3 class="text-black text-14-pt regular inline-block"> / <?php $nome = explode(':',get_the_archive_title()); echo end($nome) ?></h3>
            </div>
            <div class="row margin-top-50 text-center">
                <h3 class="text-black text-50-pt bold">Noticias - <?php $nome = explode(':',get_the_archive_title()); echo end($nome) ?></h3>
            </div>
            <div class="row margin-top-10 text-center text-black text-22-pt light italic">
                <?php the_field('subtitulo', 14) ?>
            </div>
        </div>
    </section>
    <section class="conteudo">
        <div class="container-fluid limit">
            <div class="row margin-top-40">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 padding-right-15">
                    <div class="row lista-posts">
                        <?php 
                            if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
                            elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
                            else { $paged = 1; } 
                        ?>
                        <?php $xb = 0; while( have_posts() ) : the_post(); ?>
                            <?php get_template_part('parts/part', 'post') ?>
                        <?php $xb++; endwhile; ?>
                        <div class="row text-center margin-top-50 text-d-blue text-12-pt semibold padding-bottom-100 xs-padding-bottom-20 wow fadeInUp" data-wow-delay="0" data-wow-duration="1.5s">
                            <?php 
                                if (function_exists("pagination")) {
                                    pagination($wp_query->max_num_pages);
                                } 
                            ?>
                        </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 padding-left-30">
                <?php get_template_part('parts/part', 'menu-blog') ?>
            </div>
        </div>
    </section>
    <div class="row compra-venda margin-top-100 padding-bottom-80">
        <div class="container-fluid limit">
            <?php get_template_part('parts/part', 'compra-venda'); ?>
        </div>
    </div>
</section>

<?php get_footer() ?>