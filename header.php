<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>
    <?php wp_head() ?>
</head>

<body>
    <div class="container-header">
        <header>

            <?php
            get_template_part("template-parts/header/header", "h");
            ?>
        </header>
        <nav>
        <?php
        if (!get_front_page_template()) {
            get_template_part("template-parts/header/menus", "f");
        } else {
            get_template_part("template-parts/header/menus", "h");
        }
        ?>
        </nav>
    </div>