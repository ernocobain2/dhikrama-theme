<div class="containerlogos">
    <div class="logos">
        <?php
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        }
        ?>
        <h1><a href="<?php home_url('/')?>"><?php bloginfo('name') ?></a></h1>
        <p><?php bloginfo('description') ?></p>
    </div>
</div>