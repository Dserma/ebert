<?php 
    require(dirname(__FILE__) . '../../../../wp-load.php');
    $p = $_POST['p'];
    $c = $_POST['c'];
    $b = $_POST['b'];
    
    $args = array( 'post_type' => 'ingrediente', 'showposts' => -1, 'orderby' => 'title', 'order' => 'ASC' );

    if( $c != 'null' ){
      $args['segmento'] = $c;
      $term = get_term_by('slug', $c, 'segmento');
    }
    if( $b != '' ){
      $args['titulo'] = $b;
    }
    $posts = new WP_Query( $args );
    if( $posts->have_posts() ){
      $z = 0;
      while( $posts->have_posts() ): $posts->the_post();
        $result .=  load_template_part();
      $z++; endwhile; 
      if( $z < 24 ){
        $r = 'N¬'.$result;
      }else{
        $r = 'S¬'.$result; 
      }
    }else{
      $r = 'SP¬';
    }
        
    echo $r;    
    
    function load_template_part() {
      ob_start();
      get_template_part('parts/part', 'ingrediente');
      $var = ob_get_contents();
      ob_end_clean();
      return $var;
    }
?>
