<div class="clippath"></div>
<div class="container">
    <div class="container-header">
        <div class="container-navigation">
            <nav>
                <?php
                $args = array(
                    "theme_location" => "main_menu",
                    'container' => false,
                    'items_wrap' => '<ul>%3$s</ul>'
                );

                wp_nav_menu($args);
                ?>
            </nav>

            <div class="logos">
                <h1><?php bloginfo('name') ?></h1>
                <p><?php bloginfo('description') ?></p>
            </div>

            <button>test</button>
        </div>
    </div>
</div>