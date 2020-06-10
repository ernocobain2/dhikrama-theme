<?php
function color_link_customized_nav()
{ ?>
    <style>
        .container-navigation ul li a {
            color: <?php echo get_theme_mod('dh_nav_color') ?>;
        }
    </style>

<?php }

function color_link_customized_nav_hover()
{ ?>
    <style>
        .container-navigation ul li a:hover {
            color: <?php echo get_theme_mod('dh_nav_color_hover') ?>;
        }
    </style>
<?php }


add_action('wp_head', 'color_link_customized_nav_hover');
add_action('wp_head', 'color_link_customized_nav');

