<?php
// loading in scripts
function enqueue_customtheme_styles() {
    // this line of code adds Twitter Bootstrap's JavaScript library
    // jQuery placed here to make sure loads before others
    wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'));
    // this line of code gives us access to the Twitter Boostrap library
    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
    //this line of code loads in the "style.css" file
    wp_enqueue_style('customtheme-style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'enqueue_customtheme_styles');

// this block will allow us to register a custom menu for our Admin section
function customtheme_setup() {
    // register a custom primary navigation menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'customtheme' )
    ));
    
    // add theme support for document Title tag
    add_theme_support('title-tag');
}
add_action( 'after_setup_theme', 'customtheme_setup' );

?>