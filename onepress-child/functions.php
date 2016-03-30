<?php
/**
 * Enqueue scripts and styles.
 */
function onepress_child_scripts() {
    wp_enqueue_style( 'onepress-child-style', get_template_directory_uri().'/style.css' );

}
add_action( 'wp_enqueue_scripts', 'onepress_child_scripts' );
