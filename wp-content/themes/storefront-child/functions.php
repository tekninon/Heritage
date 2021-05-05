<?php
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles() {
	wp_enqueue_style('storefront', get_template_directory_uri() . '/style.css');
}

function register_my_menus() {
    register_nav_menus(
        array(
            'left-menu' => ( 'Menu Gauche' ),
            'right-menu' => ( 'Menu Droit' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );

/* Autoriser les fichiers SVG */
function wpc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');