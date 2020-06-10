<?php
function color_link_customized() {?>
<style>
a:link,
a:visited {
    color: <?php echo get_theme_mod('dh_link_color')?>;
    text-decoration: none;
}
</style>

<?php }

add_action('wp_head', 'color_link_customized');