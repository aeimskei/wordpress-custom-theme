<?php
// loading in scripts
function enqueue_customtheme_styles() {
    wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css");
    wp_enqueue_style("customtheme-style", get_stylesheet_uri() ); //this line of code loads in the "style.css" file
}
add_action("wp_enqueue_scripts", "enqueue_customtheme_styles");

// this block will allow us to register a custom menu for our Admin section
function customtheme_setup() {
    // register a custom primary navigation menu
    register_nav_menus( array(
        "primary" => __( "Primary Menu", "customtheme" )
    ));
}
add_action( "after_setup_theme", "customtheme_setup" );

?>