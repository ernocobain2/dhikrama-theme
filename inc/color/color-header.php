<?php
function color_link_customized_header() {?>
<style>
.container-header {
    background-color: <?php echo get_theme_mod('dh_header_color')?>;
}
</style>

<?php }

add_action('wp_head', 'color_link_customized_header');