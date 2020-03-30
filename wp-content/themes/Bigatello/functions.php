<?php
require_once('wp_bootstrap_navwalker.php');
function rc_my_welcome_panel() {

    ?>
<script type="text/javascript">
jQuery(document).ready( function($) 
{
    $('div.welcome-panel-content').hide();
    $('div#dashboard-widgets-wrap').hide();
    $('.welcome-panel-close').hide();
});
</script>

    <div class="custom-welcome-panel-content">
        <div class="column-posts">
            <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="" />
            <h3>Bem-vindo ao painel administrativo do site Tovani Benzaqen!</h3>
            <p class="about-description">Aqui voce pode geenciar todo o conteudo do seu site. Mas tome <b>cuidado:</b> evite mexer nas partes de "Configuraçoes". =) </p>
        </div>
    <div class="welcome-panel-column-container">
    <div class="welcome-panel-column">
        <h4></h4>
    </div>
    </div>

<?php
}

add_action( 'welcome_panel', 'rc_my_welcome_panel' );

//    wp_set_password('digital@2018', 1);
add_theme_support('woocommerce');
add_theme_support('automatic-feed-links');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('custom-logo');
add_theme_support('html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
));

function register_my_menus() {
    register_nav_menus(
            array(
                'header-menu' => __('Principal'),
            )
    );
}

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item) {
    if (in_array('menu-outras', $classes) && is_singular('outras')) {
        $classes[] = 'current-menu-item';
    }
    return $classes;
}

function pagination($pages = '', $range = 0) {

    $showitems = ($range * 2) + 1;
    global $paged;
    if (empty($paged))
        $paged = 1;

    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        echo '<nav><ul class="pagination-vox">';
        if ($paged > 1) {
          echo '<li class="not-ball"><a href="' . get_pagenum_link($paged - 1) . '" aria-label="Anterior" class="vertical-middle horizontal-center anterior"><i class="fa fa-chevron-left"></i></a></li>';
        }
        for ($i = 1; $i <= $pages; $i++) {
          echo ($paged == $i) ? '<li class="ball-active vertical-middle horizontal-center"><a href="#" class="vertical-middle horizontal-center">' . $i . '</a></li>' : '<li class="ball vertical-middle horizontal-center"><a href="' . get_pagenum_link($i) . '" class="vertical-middle horizontal-center">' . $i . '</a></li>';
        }
        if ($paged < $pages) {
          echo '<li class="not-ball vertical-middle horizontal-center"><a href="' . get_pagenum_link($paged + 1) . '" aria-label="Próximo" class="vertical-middle horizontal-center proximo"><i class="fa fa-chevron-right"></i></a></li>';
        }
        echo '</ul></nav>';
    }
}

function dynamic_field_values($tag, $unused) {

    if ($tag['name'] != 'servicos')
        return $tag;

    $args = array(
        'numberposts' => -1,
        'post_type' => 'servico',
        'orderby' => 'title',
        'order' => 'ASC',
    );

    $custom_posts = get_posts($args);

    if (!$custom_posts)
        return $tag;

    foreach ($custom_posts as $custom_post) {

        $tag['raw_values'][] = $custom_post->post_title;
        $tag['values'][] = $custom_post->post_title;
        $tag['labels'][] = $custom_post->post_title;
    }

    return $tag;
}

add_filter('wpcf7_form_tag', 'dynamic_field_values', 10, 2);

function pre($array) {
    echo '<pre>';
    print_r($array);
    exit;
}

function break_text($text, $limit) {
    if (strlen($text) > $limit) {
        $pos = strpos($text, ' ', $limit);
        return substr($text, 0, $pos) . '...';
    } else {
        return $text;
    }
}

function my_acf_google_map_api($api) {
    $api['key'] = 'AIzaSyDHv5wzQEFzph1zyGSpEZR9BcKK405QEME';
    return $api;
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


function my_admin_enqueue_scripts() {
    wp_enqueue_script('mask-js', get_template_directory_uri() . '/js/mask.js', array(), '1.0.0', true);
    wp_enqueue_script('siteadmin-js', get_template_directory_uri() . '/js/siteadmin.js', array(), '1.0.0', true);
}

add_action('acf/input/admin_enqueue_scripts', 'my_admin_enqueue_scripts');

function wpdocs_theme_add_editor_styles() {
    add_editor_style( get_stylesheet_directory_uri() . '/css/editor-style.css' );
}
add_action( 'init',          'wpdocs_theme_add_editor_styles' );
add_action( 'pre_get_posts', 'wpdocs_theme_add_editor_styles' );

function getTypeArticle($post){
  if( is_page() ){
    $check = $post->post_name;
    switch( $check ){
      case 'estudos':
        $type = 'estudo';
        break;
      case 'noticias':
        $type = 'post';
        break;
      case 'artigos':
        $type = 'artigo';
        break;
      case 'devocoes':
        $type = 'devocao';
        break;
      case 'acoes-sociais':
        $type = 'acao';
        break;
    }
  }
  if( is_single() || is_archive() ){
    $type = $post->post_type;
  }
  return $type;
}

function getTitleArticle($post){
    $check = $post->post_type;
    switch( $check ){
      case 'estudo':
        $type = 'estudos';
        break;
      case 'post':
        $type = 'notícias';
        break;
      case 'artigo':
        $type = 'artigos';
        break;
      case 'devocao':
        $type = 'devoções';
        break;
      case 'acao':
        $type = 'ações sociais';
        break;
    }
  return $type;
}

add_filter('use_block_editor_for_post', '__return_false');

add_filter( 'posts_where', 'wpse18703_posts_where', 10, 2 );
function wpse18703_posts_where( $where, &$wp_query )
{
    global $wpdb;
    if ( $titulo = $wp_query->get( 'titulo' ) ) {
        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . $wpdb->esc_like( $titulo ). '%\'';
    }
    return $where;
}

?>
