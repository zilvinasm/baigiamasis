<?php
//apraseme konstanta keliui
define('ASSETS_URL', get_template_directory_uri() . '/assets/');

//iskvieciame funkcija
add_action( 'wp_enqueue_scripts', 'adding_theme_styles_and_scripts' );
//funkcija skirta uzkrauti stiliams ir skriptams
function adding_theme_styles_and_scripts(){

  //registruojame stilius
  wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', array(), false );
  wp_register_style( 'reset_css', ASSETS_URL . 'reset.css', array(), false );
  wp_register_style( 'mano_css', ASSETS_URL . 'mano.css', array(), false );
  wp_register_style( 'style_css', ASSETS_URL . 'style.css', array(), false );
  wp_register_style( 'fontawesome_css', 'https://use.fontawesome.com/releases/v5.0.12/css/all.css', array(), false );
  wp_register_style( 'fonts_css', ASSETS_URL . 'fonts/stylesheet.css', array(), false );



  //registruojame javascript
  wp_register_script( 'mano_js', ASSETS_URL . 'js/mano.js', array('jquery','siema_js'), false, true);
  wp_register_script( 'google_api_key', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDm4z1FpxEpOOLVO3D4s926c6VNNoNIk08' );
  wp_register_script( 'maps_js', ASSETS_URL . 'js/maps.js', array('google_api_key'), false, true);
  wp_register_script( 'siema_js', ASSETS_URL . 'js/siema.js', array(), false, true);
  //uzkrauname stilius
  wp_enqueue_style( 'bootstrap_css' );
  wp_enqueue_style( 'reset_css' );
  wp_enqueue_style( 'mano_css' );
  wp_enqueue_style( 'style_css' );
  wp_enqueue_style( 'fontawesome_css' );
  wp_enqueue_style( 'fonts_css' );

  //uzkrauname javascript
  wp_enqueue_script( 'mano_js' );
  wp_enqueue_script('google_api_key');
  wp_enqueue_script('maps_js');
  wp_enqueue_script('siema_js');
}


add_action( 'init', 'disable_admin_bar' );
//funkcija isjungiam administratoriaus eilute virsuje
function disable_admin_bar() {
  show_admin_bar(false);
}

add_action( 'init', 'adding_theme_supports' );
//funkcija ijungianti nurodytas funkcijos galimybes
function adding_theme_supports() {
  //ijungia meniu redagavimo galimybe
  add_theme_support('menus');
}

//registruojame galimas navigaciju lokacijas
add_action('init', 'registering_navigations');
function registering_navigations() {
  register_nav_menus( array(
    'header-menu'             => __('Viršutinis meniu'),
    // 'footer-menu'             => __('Apatinis meniu')
  ) );
}

//uzregistruojame api rakta
function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyDm4z1FpxEpOOLVO3D4s926c6VNNoNIk08';
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
