<?php

add_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );
add_theme_support( 'post-thumbnails' );
remove_filter( 'the_excerpt', 'wpautop' );

add_filter('acf/settings/rest_api_format', function () { return 'standard'; });

// CUSTOM BLOCKS
add_action('acf/init', 'lbf_init_block_types');
function lbf_init_block_types()
{
    acf_register_block_type(array(
        'name' => 'example/headline-text',
        'title' => 'Headline with Text',
        'description' => 'Headline with optional subline and (multicolumn) text',
        'render_template' => '/blocks/headline-text.php',
        'category' => 'text',
        'icon' => 'text',
        'keywords' => ['headline', 'text', 'multicolumn'],
        'mode' => 'edit',
        'align' => 'full'
    ));
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    // update path
    $path = __DIR__ . '/acf-json';

    return $path;
}
