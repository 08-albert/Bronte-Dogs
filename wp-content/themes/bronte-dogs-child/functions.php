<?php
add_action( 'wp_enqueue_scripts', 'bronte_child_enqueue_assets' );
function bronte_child_enqueue_assets() {
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        [],
        '5.3.2'
    );

    wp_enqueue_style(
        'bronte-parent-style',
        get_template_directory_uri() . '/style.css',
        [ 'bootstrap-css' ],
        filemtime( get_template_directory() . '/style.css' )
    );

    wp_enqueue_style(
        'bronte-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        [ 'bronte-parent-style' ],
        filemtime( get_stylesheet_directory() . '/style.css' )
    );

    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        [],
        '5.3.2',
        true
    );
}
