<?php 
// Theme the TinyMCE editor
// You should create custom-editor-style.css in your theme folder
add_editor_style('custom-editor-style.css');

add_theme_support( 'title-tag' ); 

// Add custom menus
register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'wpfme' ),
	//'example' => __( 'Example Navigation', 'wpfme' ),
) );


// Register Theme Features
function custom_theme_features()  {

  // Add theme support for document Title tag
  add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'custom_theme_features' );



// Register Script
function jav_scripts() {

  wp_enqueue_script( 'jquery', get_template_directory_uri() .'/js/jquery.js' );
  wp_enqueue_script( 'script', get_template_directory_uri() .'/script.js' );

}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'jav_scripts' );


// Register Style
function custom_styles() {
  wp_register_style( 'style', get_template_directory_uri() .'/style.css', false, false );
  wp_enqueue_style( 'style' );

  wp_register_style( 'responsive', get_template_directory_uri() .'/responsive.css', false, false );
  wp_enqueue_style( 'responsive' );

}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'custom_styles' );



//compress to 100% quality
add_filter('jpeg_quality', function($arg){return 100;});
add_filter( 'wp_editor_set_quality', function($arg){return 100;} );

// excerpt
function new_excerpt_more( $more ) {
  return '[.....]';
}
add_filter('excerpt_more', 'new_excerpt_more');

//shortcode download button

function downloadbtn( $atts, $content = null ) {  
    return '<a target="_blank" class="btn" href="'.$content.'">I Want to Download This Design Template!</a>';  
} 
 
add_shortcode("btn", "downloadbtn");

//shortcode more banner ad design template

function downloadbtn2( $atts, $content = null ) {  
    return '<a target="_blank" class="btn" href="'.$content.'">Click Here for More Design Templates</a>';  
} 
 
add_shortcode("btn2", "downloadbtn2");