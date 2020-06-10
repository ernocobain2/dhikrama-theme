<div class="nav-footer">
            <?php
            $args = array(
                "theme_location" => "footer_menu",
                'container' => false,
                'items_wrap' => '<ul>%3$s</ul>'
            );

            wp_nav_menu($args);
            ?>
</div>