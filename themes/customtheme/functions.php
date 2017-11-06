<?php
// loading in stylesheets
function enqueue_customtheme_styles() {
    wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css");
    wp_enqueue_style("customtheme-style", get_stylesheet_uri() ); //this line of code loads in the "style.css" file
}
add_action("wp_enqueue_scripts", "enqueue_customtheme_styles");
?>