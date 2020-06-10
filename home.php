<?php get_header();
get_template_part('template-parts/css/front', 'css')
?>
<div class="item-body">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class="container-blog">
                <div class="post-home">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                    <p><?php the_content() ?></p>
                </div>
            </div>

    <?php
        endwhile;
    else :
        _e('Sorry, no posts were found.', 'textdomain');
    endif;
    ?>
</div>
<?php get_footer() ?>