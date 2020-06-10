<?php
function color_link_customized_footer() {?>
<style>
footer {
    background-color: <?php echo get_theme_mod('dh_footer_color')?>;
}
</style>

<?php }

add_action('wp_head', 'color_link_customized_footer');