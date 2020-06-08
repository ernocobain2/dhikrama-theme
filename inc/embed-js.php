<?php

function embed_js()
{
    if (!is_admin()) {
        wp_deregister_script('wp-embed');
        wp_deregister_script('jquery');
    }
}
add_action('init', 'embed_js');