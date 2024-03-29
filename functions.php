<?php
/*
*  Enqueue Scripts
*/
function jdequipment_scripts() {
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Condensed:400,700|Work+Sans:700,900');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'slickcss', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick.css' );
    wp_enqueue_style( 'slickcss', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick-theme.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'slickjs', get_template_directory_uri()  . '/node_modules/slick-carousel/slick/slick.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'jdequipment_scripts' );

/*
*  Register Nav Menus
*/
register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'footer_menu' => 'Footer Menu',
) );

/*
*  Add Post Thumbnails
*/
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 150, 150, true );
add_image_size( 'from-the-blog', 340, 230, array( 'left', 'top' ) );
?>