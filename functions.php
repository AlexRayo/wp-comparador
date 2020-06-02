<?php 
add_theme_support('automatic-feed-links');
add_theme_support( 'title-tag');
add_theme_support('post-thumbnails');
add_image_size('list_articles_thumbs');
add_theme_support( 'customize-selective-refresh-widgets' );

register_nav_menus(array(
    'menu_principal'=>'Menú principal de cabecera',
    'menu_footer'=>'Menú de pié de página',
));
/*
* Add custom logo support
*/
add_theme_support( 'custom-logo' );


/********************* */
function wpexplorer_add_post_formats() {
	add_theme_support( 'post-formats', array(
		'gallery',
		'quote',
		'video',
		'aside',
		'image',
		'link',
		'status',
		'audio',
		'chat'
	) );
}
add_action( 'after_setup_theme', 'wpexplorer_add_post_formats' );

//////////// WIDGETS ///////////////

// COVER
function cover_block() {

	register_sidebar( array(
		'name'          => 'Cover',
		'description'   => 'Add content you need to display on cover homepage',
		'before_widget' => '<div id="cover-block" class="cover-block h-100 col-10 col-sm-8 col-md-5 align-self-center">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="title">',
		'after_title'   => '</h1>',
	) );	
}

add_action( 'widgets_init', 'cover_block' );

// BENEFICIOS
function beneficios() {

	register_sidebar( array(
		'name'          => 'beneficios',
		'description'   => 'Add content you need to display on beneficios homepage',
		'before_widget' => '<div id="benefits" class="benefits h-100 col-12 col-md-5 align-self-center">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="title">',
		'after_title'   => '</h2>',
	) );	
}

add_action( 'widgets_init', 'beneficios' );
//////

function single_block_center() {

	register_sidebar( array(
		'name'          => 'single block center',
		'description'   => 'Add single block widget here',
		'before_widget' => '<div id="single-block-center" class="single-block-center col-10 col-md-7 mx-auto">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="title text-lg">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'single_block_center' );

///Bloques de beneficios
function block() {

	register_sidebar( array(
		'name'          => 'block',
		'description'   => 'Add block widget here',
		'before_widget' => '<div id="block" class="block text-bold col-10 col-sm-3 mx-auto">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="d-none">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'block' );

/// Resultados en 1 minuto///

function single_block_center_2() {

	register_sidebar( array(
		'name'          => 'Block thin',
		'description'   => 'Resultados en 1 minuto',
		'before_widget' => '<div id="single-block-center-2" class="single-block-center-2">',
		'after_widget'  => '</div>',
	) );
}

add_action( 'widgets_init', 'single_block_center_2' );


// ABOUT
function about() {

	register_sidebar( array(
		'name'          => 'about',
		'description'   => 'Add content you need to display on about homepage',
		'before_widget' => '<div id="about" class="about h-100 col-11 col-md-5 mx-auto">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="title">',
		'after_title'   => '</h2>',
	) );	
}

add_action( 'widgets_init', 'about' );
//FOOTER
function footer_block() {

	register_sidebar( array(
		'name'          => 'footer-block',
		'description'   => 'Add footer_block widget here',
		'before_widget' => '<div id="footer-block" class="footer-block mb-5 mb-sm-0 col-10 col-sm-5 col-md-3 mx-auto px-4 px-md-0">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title">',
		'after_title'   => '</h3>',
	) );	
}
add_action( 'widgets_init', 'footer_block' );

function block_bottom() {

	register_sidebar( array(
		'name'          => 'block-bottom',
		'description'   => 'Add block_bottom widget here',
		'before_widget' => '<div id="block-bottom" class="block-bottom col-12 col-md-6 mx-auto px-4">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title">',
		'after_title'   => '</h3>',
	) );	
}
add_action( 'widgets_init', 'block_bottom' );

function sidebar() {

	register_sidebar( array(
		'name'          => 'sidebar',
		'description'   => 'Add sidebar widget here',
		'before_widget' => '<div id="sidebar" class="sidebar mx-auto">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title">',
		'after_title'   => '</h3>',
	) );	
}
add_action( 'widgets_init', 'sidebar' );

/////////////////////////////
//cambia la cantidad de texto del excerpt de 50 caracteres a 15
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
    
    //esto permite cambiar los [...] que trae [por defecto al final del excerpt]
    function wpdocs_excerpt_more( $more ) {
    return ' ...';
    }
    add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


// cierra para excerpt


//FUNCION PARA LA PAGINACION DE archive.php
/**
 * @param WP_Query|null $wp_query
 * @param bool $echo
 *
 * @return string
 * Accepts a WP_Query instance to build pagination (for custom wp_query()), 
 * or nothing to use the current global $wp_query (eg: taxonomy term page)
 * - Tested on WP 4.9.5
 * - Tested with Bootstrap 4.1
 * - Tested on Sage 9
 *
 * USAGE:
 *     <?php echo bootstrap_pagination(); ?> //uses global $wp_query
 * or with custom WP_Query():
 *     <?php 
 *      $query = new \WP_Query($args);
 *       ... while(have_posts()), $query->posts stuff ...
 *       echo bootstrap_pagination($query);
 *     ?>
 */
function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true ) {
	if ( null === $wp_query ) {
		global $wp_query;
	}
	$pages = paginate_links( [
			'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'format'       => '?paged=%#%',
			'current'      => max( 1, get_query_var( 'paged' ) ),
			'total'        => $wp_query->max_num_pages,
			'type'         => 'array',
			'show_all'     => false,
			'end_size'     => 3,
			'mid_size'     => 1,
			'prev_next'    => true,
			'prev_text'    => __( '« Recientes' ),
			'next_text'    => __( 'Anteriores »' ),
			'add_args'     => false,
			'add_fragment' => ''
		]
	);
	if ( is_array( $pages ) ) {
		//$paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
		$pagination = '<div class="pagination"><ul class="pagination">';
		foreach ($pages as $page) {
                        $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
                }
		$pagination .= '</ul></div>';
		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}
	return null;
}
//ES RECOMENDABLE LINKEAR SCRIPTS EN ESTE ARCHIVO
function alex_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'responsive', get_template_directory_uri() . '/responsive.css', array(), '1.1', 'all');
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);

/////////////////////////////////////////  
 

}
add_action( 'wp_enqueue_scripts', 'alex_theme_scripts' );


 ?>