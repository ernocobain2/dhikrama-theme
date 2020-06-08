<?php get_header();
get_template_part('/template-parts/css/front', 'css');
?>
<div class="item-body">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class="post-home">
                <h1><?php the_title() ?></h1>
                <p><?php the_content() ?></p>
            </div>

    <?php
        endwhile;
    else :
        _e('Sorry, no posts were found.', 'textdomain');
    endif;
    ?>
</div>
<?php get_footer() ?>