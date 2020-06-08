<div class="nav-front">
    <div class="container-navigation">  
            <?php
            $args = array(
                "theme_location" => "main_menu",
                'container' => false,
                'items_wrap' => '<ul>%3$s</ul>'
            );

            wp_nav_menu($args);
            ?>
        <button>home</button>
    </div>
</div>