<?php // Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {  
	$filetype = wp_check_filetype( $filename, $mimes );
  
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
  
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  /* to add external files in to it */
function add_scripts()
{
    /* **Main JQuery Included** */
    wp_enqueue_script('jquery-js', get_stylesheet_directory_uri().'/js/lib/jquery.min.js');
    /**Font-Awesome Included***/
    wp_enqueue_style('fontawesome-css', get_stylesheet_directory_uri() . '/css/fontawesome.css');
      /* bootstrap style-css-js included */
  wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri().'/css/bootstrap.min.css');
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri().'/js/bootstrap.min.js');
  /* parallex */
  wp_enqueue_script('parallax-js', get_stylesheet_directory_uri().'/js/parallax.js');
  wp_enqueue_script('wow.min-js', get_stylesheet_directory_uri().'/js/wow.min.js');

  wp_enqueue_script('tilt-jquery-js', get_stylesheet_directory_uri().'/js/tilt.jquery.js');
  wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/css/animate.css');
  /* style.css included */
  wp_enqueue_style('twenty-twenty-one-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'add_scripts');
/*****---------------------------  widget registration  - -------------------------****/
function twentytwenty_custom_widget_registration()
{

    // Arguments used in all register_sidebar() calls.
    $shared_args = array(
        'before_title' => '<h2 class="widget-title subheading heading-size-3">',
        'after_title' => '</h2>',
        'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
        'after_widget' => '</div></div>',
    );
    // Top Header Contact Widget.
    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name' => __('Social Share', 'fansportiz'),
                'id' => 'sidebar-2',
                'description' => __('Social Icons ', 'fansportiz'),
            )
        )
    );
}
add_action('widgets_init', 'twentytwenty_custom_widget_registration');
/* footer menu */
function wpb_custom_new_menu() {
	register_nav_menus(
	  array(
		'footer-nav' => __( 'footer-nav' ),
	  )
	);
  }
  add_action( 'init', 'wpb_custom_new_menu' );

  /* function fans_body_class($classes) {
    $classes[] = 'primary-navigation-open';
    $classes[] = 'lock-scrolling';
    return $classes;
}

add_filter('body_class', 'fans_body_class'); */