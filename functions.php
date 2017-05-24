<?php 

// adding menus support
add_theme_support( 'menus' );

// removing admin area if needed
// add_filter( 'show_admin_bar', '__return_false' );

function theme_styles(){
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );    
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/style.css' );    
}

function theme_js(){

    global $wp_scripts;

    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', '', false );
    wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', false );

    //  loading additional IE 9 scripts if we have IE 9
    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
    $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'bootstrap_js',  get_template_directory_uri() . '/js/bootstrap.min.js' , array('jquery'), true );
}

add_action( 'wp_enqueue_scripts' , 'theme_styles' );
add_action( 'wp_enqueue_scripts' , 'theme_js' );

// registering menu
function register_theme_menu(){
	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu')
			// 'secondary-menu' => __('Secondary Menu'),
		)
	);
}
add_action('init', 'register_theme_menu');

// adding widget support
function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );
create_widget( 'Sidebar Widget', 'sidebar', 'Displays on the sidebar of the page' );
create_widget( 'Blog Sidebar Widget', 'blog-sidebar', 'Displays on the blog sidebar of the page' );

?>

